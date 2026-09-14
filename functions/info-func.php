<?php
require '../database/config.php';

$product_id=filter_input(INPUT_GET,'id',FILTER_VALIDATE_INT);

if(!$product_id||$product_id<1){
    header("Location: ./products.php"); 
    exit();
}

$product=null;
$details=null;
$table_used='';
$success_msg='';
$error_msg='';

if($pdo===null){
    $error_msg='Database connection failed.';
}else{
    try{
        $stmt=$pdo->prepare(" SELECT _id_, _product_name_, 
            _title_, _price_, _product_class_, _style_, _type_, 
            _person_, _uploaded_, _image_path_, _available_,
            _stock_ FROM products WHERE _id_ = :id LIMIT 1 "); 
        $stmt->execute([ ':id'=>$product_id ]); 
        $product=$stmt->fetch(); 

        if(!$product){
            header("Location: ./products.php"); 
            exit();
        }

        $product_class=$product['_product_class_'];
        $person=$product['_person_']; 
        $product_name=$product['_product_name_']; 
        $image_path=$product['_image_path_'];

        if($product_class==='Portraits'||$product_class==='Statues'){
            if($person==="Jesus Christ"||$person==="Virgin Mary"||$person==="St. Joseph"||$person==='Saint'){
                $table_used='saints'; 
            }elseif($person==='Blessed'){
                $table_used='blesseds'; 
            } 
        }elseif($product_class==='Accessories'){
            $table_used='accessories';
        }

        if($table_used!==''){
            $stmt=$pdo->prepare( "SELECT * FROM {$table_used} 
                WHERE _product_id_ = :product_id LIMIT 1" ); 
            $stmt->execute([ ':product_id'=>$product_id ]); 
            $details=$stmt->fetch(); 
        } 
    }catch(PDOException $e){
        $error_msg='Unable to retrieve product information.';
        $error_msg='Database error: '.$e->getMessage(); 
    } 
}

if($_SERVER['REQUEST_METHOD']==='POST'&&$pdo!==null&&$product){
    if(isset($_POST['delete_product'])){
        try{ 
            $pdo->beginTransaction(); 
            if($table_used==='saints'){ 
                $stmt=$pdo->prepare(" DELETE FROM saints WHERE 
                    _product_id_ = :product_id "); 
                $stmt->execute([ ':product_id'=>$image_path ]); 
            }elseif($table_used==='blesseds'){
                $stmt=$pdo->prepare(" DELETE FROM blesseds WHERE 
                    _product_id_ = :product_id "); 
                $stmt->execute([ ':product_id'=>$product_id ]); 
            }elseif($table_used==='accessories'){
                $stmt=$pdo->prepare(" DELETE FROM accessories WHERE 
                    _product_id_ = :product_id "); 
                $stmt->execute([ ':product_id'=>$product_id ]); 
            }
            
            $stmt=$pdo->prepare(" DELETE FROM products WHERE _id_ = :id "); 
            $stmt->execute([ ':id'=>$product_id ]); 
            
            if($stmt->rowCount()!== 1){
                throw new RuntimeException('The product could not be deleted.'); 
            } 
            
            $pdo->commit();
            
            if ($image_path!==''&&file_exists($image_path)){
                unlink($image_path); 
            }
            
            header("Location: ./products.php");
            exit(); 
        }catch(Throwable $e){
            if($pdo->inTransaction()){
                $pdo->rollBack(); 
            } 
            
            $error_msg='Unable to delete the product.'; 
            $error_msg='Delete error: '.$e->getMessage(); 
        } 
    }elseif(isset($_POST['save_details'])){
        $available=$_POST['_available_']??'Yes';
        $stock=filter_input(INPUT_POST,'_stock_',FILTER_VALIDATE_INT);

        if ($stock===false||$stock===null||$stock<0){
            $stock=0;
        }
        if(!in_array($available,['Yes','No'],true)){
            $available ='Yes';
        }

        $years=trim($_POST['_years_']??'');
        $feast_day=trim($_POST['_feast_day_']??'');
        $beatified=trim($_POST['_beatified_']??'');
        $canonized=trim($_POST['_canonized_']??'');
        $patronage=trim($_POST['_patronage_']??''); 
        $veneration_site=trim($_POST['_veneration_site_']??'');
        $text_content=trim($_POST['_text_content_']??''); 
        $iconography=trim($_POST['_iconography_']??''); 
        
        try{
            $pdo->beginTransaction();
    
            $stmt=$pdo->prepare("UPDATE products SET _available_ = :available,
                 _stock_ = :stock WHERE _id_ = :id");
            $stmt->execute([':available'=>$available,':stock'=>$stock,':id'=>$product_id]);

            if($table_used==='saints'){
                if($details){
                    $stmt=$pdo->prepare(" UPDATE saints SET _years_ = :years, 
                        _feast_day_ = :feast_day, _beatified_ = :beatified, 
                        _canonized_ = :canonized, _patronage_ = :patronage, 
                        _veneration_site_ = :veneration_site, _life_ = :life, 
                        _iconography_ = :iconography WHERE _product_id_ = :product_id "); 
                    $stmt->execute([ ':years'=>$years,':feast_day'=>$feast_day,
                        ':beatified'=>$beatified,':canonized'=>$canonized, 
                        ':patronage'=>$patronage,':veneration_site'=>$veneration_site, 
                        ':life'=>$text_content,':iconography'=>$iconography, 
                        ':product_id'=>$product_id ]); 
                }else{
                    $stmt=$pdo->prepare(" INSERT INTO saints ( _product_id_, 
                        _saint_name_, _years_, _feast_day_, _beatified_, 
                        _canonized_, _patronage_, _veneration_site_, 
                        _life_, _iconography_ ) VALUES ( :product_id, 
                        :saint_name, :years, :feast_day, :beatified, 
                        :canonized, :patronage, :veneration_site, 
                        :life, :iconography ) "); 
                    $stmt->execute([ ':product_id'=>$product_id,
                        ':saint_name'=>$product_name,':years'=>$years,
                        ':feast_day'=>$feast_day,':beatified'=>$beatified,
                        ':canonized'=>$canonized,':patronage'=>$patronage, 
                        ':veneration_site'=>$veneration_site,':life'=>$text_content,
                        ':iconography'=>$iconography]);
                }

                $success_msg='Saint details saved successfully.'; 
            }elseif($table_used==='blesseds'){
                if($details){
                    $stmt=$pdo->prepare(" UPDATE blesseds SET _years_ = :years,
                        _feast_day_ = :feast_day, _beatified_ = :beatified, 
                        _patronage_ = :patronage, _veneration_site_ = :veneration_site,
                        _life_ = :life, _iconography_ = :iconography WHERE 
                        _product_id_ = :product_id "); 
                    $stmt->execute([ ':years'=>$years,':feast_day'=>$feast_day,
                        ':beatified'=>$beatified,':patronage'=>$patronage,
                        ':veneration_site'=>$veneration_site,':life'=>$text_content, 
                        ':iconography'=>$iconography,':product_id'=>$product_id
                    ]);
                }else{
                    $stmt=$pdo->prepare(" INSERT INTO blesseds ( _product_id_, 
                        _blessed_name_, _years_, _feast_day_, _beatified_, _patronage_, 
                        _veneration_site_, _life_, _iconography_ ) VALUES ( :product_id, 
                        :blessed_name, :years, :feast_day, :beatified, :patronage, 
                        :veneration_site, :life, :iconography ) "); 
                    $stmt->execute([ ':product_id'=>$product_id, ':blessed_name'=>$product_name, 
                        ':years'=>$years,':feast_day'=>$feast_day,':beatified'=>$beatified, 
                        ':patronage'=>$patronage,':veneration_site'=>$veneration_site, 
                        ':life'=>$text_content,':iconography'=>$iconography]);
                } 
                
                $success_msg='Blessed details saved successfully.'; 
            }elseif($table_used==='accessories'){
                if($details){
                    $stmt=$pdo->prepare(" UPDATE accessories SET _symbolism_ = :symbolism WHERE 
                    _product_id_ = :product_id "); 
                    $stmt->execute([ ':symbolism'=>$text_content,':product_id'=>$product_id]); 
                }else{ 
                    $stmt=$pdo->prepare(" INSERT INTO accessories ( _product_id_, _product_name_, _symbolism_ ) 
                        VALUES ( :product_id, :product_name, :symbolism ) "); 
                    $stmt->execute([ ':product_id'=>$product_id, ':product_name'=>$product_name, 
                        ':symbolism'=>$text_content ]); 
                } 
                    
                $success_msg='Accessory symbolism saved successfully.'; 
            }else{
                $error_msg='No details table is assigned to this product.'; 
            }

            $pdo->commit();

            $stmt=$pdo->prepare("SELECT * FROM products WHERE _id_ = :id LIMIT 1");
            $stmt->execute([':id' => $product_id]);
            $product=$stmt->fetch();

            if($error_msg===''&&$table_used!==''){
                $stmt=$pdo->prepare( "SELECT * FROM {$table_used} WHERE 
                    _product_id_ = :product_id LIMIT 1" ); 
                $stmt->execute([ ':product_id'=>$product_id ]); 
                $details=$stmt->fetch(); 
            }            
        }catch(Throwable $e){
            if ($pdo->inTransaction()){
                $pdo->rollBack();
            }

            $error_msg='Unable to save the product details.'; 
            $error_msg='Database error: '.$e->getMessage(); 
        }
    } 
}

$displayProductName=htmlspecialchars($product['_product_name_'],ENT_QUOTES,'UTF-8');
$displayTitle=htmlspecialchars($product['_title_'],ENT_QUOTES,'UTF-8');
$displayImage=htmlspecialchars($image_path,ENT_QUOTES,'UTF-8');
?>