<?php
require "../database/config.php";

$upload_error=''; 
$upload_success='';

if($_SERVER['REQUEST_METHOD']==='POST'&&isset($_POST['upload_product'])){
    $product_name=trim($_POST['_product_name_']??'');
    $title=trim($_POST['_title_']??'');
    $price=trim($_POST['_price_']??'');
    $product_class=$_POST['_product_class_']??'Portraits';
    $style=$_POST['_style_']??'N/A'; 
    $type=$_POST['_type_']??'N/A';
    $person=$_POST['_person_']??'N/A';

    if($product_name===''||$title===''||$price===''||$product_class===''){
        $upload_error='All product information is required.';
    }elseif(!is_numeric($price)||(float)$price<0){
        $upload_error='Please enter a valid price.';
    }elseif(!in_array($product_class,['Portraits','Statues','Accessories'],true)){
        $upload_error='Invalid product class.';
    }else{
        if($product_class==='Portraits'){
            if(!in_array($style,['Western','Eastern'],true)){
                $style='Western';
            }
            
            $type='N/A';
            
            if(!in_array($person,['Jesus Christ','Virgin Mary','St. Joseph','Saint','Blessed'],true)){
                $person='Saint';
            }
        }elseif($product_class==='Statues'){
            if(!in_array($style,['Plain','Painted'],true)){
                $style='Plain';
            } 
            
            $type='N/A';
            
            if(!in_array($person,['Jesus Christ','Virgin Mary','St. Joseph','Saint','Blessed'],true)){
                $person='Saint';
            }
        }elseif($product_class==='Accessories'){
            $style='N/A';
            $person='N/A';
            
            if(!in_array($type,['Crucifixes','Rosaries','Scapulars','Novenas'],true)){
                $upload_error='Invalid accessory type.';
            } 
        }
    }

    if($upload_error===''){
        if(!isset($_FILES['_image_file_'])||$_FILES['_image_file_']['error']!==UPLOAD_ERR_OK){
            $upload_error='Please select an image file to upload.';
        }else{
            $file=$_FILES['_image_file_'];
            $fileTmpPath=$file['tmp_name'];
            $originalName=basename($file['name']);
            $fileExtension=strtolower(pathinfo($originalName,PATHINFO_EXTENSION));
            $safeBaseName=pathinfo($originalName,PATHINFO_FILENAME);
            $safeBaseName=preg_replace('/[^A-Za-z0-9_-]/','-',$safeBaseName);
            $safeBaseName=trim($safeBaseName,'-_.');

            if($safeBaseName===''){
                $safeBaseName='product';
            }

            $allowedExtensions=['jpg','jpeg','png'];
            
            if(!in_array($fileExtension,$allowedExtensions,true)){
                $upload_error='Invalid file extension. Only JPG, JPEG, and PNG are allowed.';
            }
            if($upload_error===''){
                $imageInfo=@getimagesize($fileTmpPath);
                
                if($imageInfo===false){
                    $upload_error='The uploaded file is not a valid image.';
                }
            }
            if($upload_error===''&&$file['size']>10*1024*1024){
                $upload_error='The image file must not exceed 10 MB.';
            }

            $targetDir='';
            
            if($upload_error===''){
                if($product_class==='Portraits'){
                    if($style==='Western'){
                        $targetDir='./assets/portraits/western/';
                    }else{
                        $targetDir='./assets/portraits/eastern/';
                    }
                }elseif($product_class==='Statues'){
                    if($style==='Plain'){
                        $targetDir='./assets/statues/plain/';
                    }else{
                        $targetDir='./assets/statues/painted/';
                    }
                }elseif($product_class==='Accessories'){
                    switch($type){
                        case 'Crucifixes':
                            $targetDir='./assets/accessories/crucifixes/';
                            break;
                        case 'Rosaries': 
                            $targetDir='./assets/accessories/rosaries/'; 
                            break; 
                        case 'Scapulars': 
                            $targetDir='./assets/accessories/scapulars/'; 
                            break; 
                        case 'Novenas': 
                            $targetDir='./assets/accessories/novenas/'; 
                            break; 
                    } 
                } 
            }
            if($upload_error===''&&!is_dir($targetDir)){
                if(!is_dir($targetDir)){
                    if(!mkdir($targetDir,0755,true)){
                        $upload_error='Unable to create the product image directory.';
                    } 
                } 
            }

            $destPath='';

            if($upload_error===''){
                $newFileName=$safeBaseName.'.'.$fileExtension;
                $destPath=rtrim($targetDir,'/\\').'/'.$newFileName;
            }
            if($upload_error===''){
                if(!move_uploaded_file($fileTmpPath,$destPath)){
                    $upload_error='Error moving the uploaded file.';
                }
            }
            if($upload_error===''&&$pdo!==null){
                try{
                    $stmt=$pdo->prepare("INSERT INTO products 
                        (_product_name_,_title_,_price_,_product_class_,_style_,_type_,_person_,
                        _uploaded_, _image_path_, _available_ ) 
                        VALUES (:product_name,:title,:price,:product_class,:style,:type,:person,
                        NOW(),:image_path,'Yes')"
                    ); 
                    $stmt->execute([':product_name'=>$product_name,':title'=>$title,
                        ':price'=>number_format((float)$price,2,'.',''),
                        ':product_class'=>$product_class,':style'=>$style,
                        ':type'=>$type,':person'=>$person,':image_path'=>$destPath
                    ]);

                    if(isset($_GET['upload'])&&$_GET['upload']==='success'){
                        $upload_success='Product uploaded successfully.';
                        header('Location: ./products.php?upload=success');
                        exit();
                    }
                }catch(PDOException $e){       
                    $upload_error='Database error: '.$e->getMessage(); 
                    
                    if($destPath!==''&&file_exists($destPath)){
                        unlink($destPath);
                    }
                }
            }
        } 
    } 
}

$filter_class=trim($_GET['filter_class']??'');
$filter_style=trim($_GET['filter_style']??'');
$filter_style_statue=trim($_GET['filter_style_statue']??'');
$filter_type=trim($_GET['filter_type']??'');
$filter_person=trim($_GET['filter_person']??'');
$query="SELECT * FROM products WHERE 1 = 1"; 
$params=[];

if($filter_class==='Portraits'){
    $query .= " AND _product_class_ = :product_class";
    $params[':product_class']=$filter_class;
    
    if($filter_style!==''){
        $query .= " AND _style_ = :style";
        $params[':style']=$filter_style;
    }
    if($filter_person!==''){
        $query .= " AND _person_ = :person";
        $params[':person']=$filter_person;
    }
}elseif($filter_class==='Statues'){
    $query .= " AND _product_class_ = :product_class";
    $params[':product_class']=$filter_class;

    if($filter_style_statue!==''){
        $query .= " AND _style_ = :style";
        $params[':style']=$filter_style_statue;
    }
    if($filter_person!==''){
        $query .= " AND _person_ = :person";
        $params[':person']=$filter_person;
    }
}elseif($filter_class==='Accessories'){
    $query .= " AND _product_class_ = :product_class";
    $params[':product_class']=$filter_class;

    if($filter_type!==''){
        $query .= " AND _type_ = :type";
        $params[':type']=$filter_type;
    }
}

$query .= " ORDER BY _id_ ASC";
$products=[]; 
    
if($pdo!==null){ 
    try{ 
        $stmt=$pdo->prepare($query);
        $stmt->execute($params); 
        $products=$stmt->fetchAll(); 
    }catch(PDOException $e){ 
        $db_error='Unable to retrieve products.';
        $db_error='Database error: '.$e->getMessage(); 
    } 
}else{ 
    $db_error='Database connection failed.'; 
}
?>