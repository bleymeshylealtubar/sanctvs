<?php
require '../database/config.php';

$theme='Gold Key';

if(!empty($_SESSION['user_id'])){
    $themeStmt=$pdo->prepare("SELECT _theme_ FROM users WHERE _id_ = :id LIMIT 1");
    $themeStmt->execute([':id'=>(int)$_SESSION['user_id']]);
    $theme=$themeStmt->fetchColumn() ?: 'Gold Key';
}

$themePerson=($theme==='Silver Key')?'Blessed':'Saint';
$search_query=trim($_GET['q']??'');
$filter_class=trim($_GET['class']??'');
$filter_style=trim($_GET['style']??'');
$filter_type=trim($_GET['type']??'');
$filter_person=trim($_GET['person']??'');

if($filter_person==='Saint'||$filter_person==='Blessed'){
    $filter_person=$themePerson;
}

$sql="SELECT * FROM products WHERE _available_ = 'Yes'";
$params=[];

if($search_query!==''){
    $sql.=" AND (_product_name_ LIKE ? OR _title_ LIKE ? OR _product_class_ LIKE ?
            OR _style_ LIKE ? OR _type_ LIKE ? OR _person_ = ?)";
    $searchTerm='%'.$search_query.'%';
    $params=[$searchTerm,$searchTerm,$searchTerm,$searchTerm,$searchTerm,$searchTerm];
    $sql.=" AND NOT (_person_ IN ('Saint', 'Blessed') AND _person_ <> ?)";
    $params[]=$themePerson;
}else{
    if($filter_class!==''){
        $sql.=" AND _product_class_ = ?";
        $params[]=$filter_class;
    }
    if($filter_style!==''){
        $sql.=" AND _style_ = ?";
        $params[]=$filter_style;
    }
    if($filter_type!==''){
        $sql.=" AND _type_ = ?";
        $params[]=$filter_type;
    }
    if($filter_person!==''){
        $sql.=" AND _person_ = ?";
        $params[]=$filter_person;
    }elseif($filter_class==='Portraits'||$filter_class==='Statues'){
        $sql.=" AND _person_ = ?";
        $params[]=$themePerson;
    }
}

$sql.=" ORDER BY _product_name_ ASC";
$products = [];

if(isset($pdo)){
    $stmt=$pdo->prepare($sql);
    $stmt->execute($params);
    $products=$stmt->fetchAll();
}

$heading_text='QVAERE PRODVCTA';

if($search_query!==''){
    $heading_text='RESVLTATVS QVAESTIONIS PRO: '.$search_query;
}else{
    if($filter_class==='Portraits'){
        if($filter_style==='Western'){
            if($filter_person==='Jesus Christ'){
                $heading_text='IMAGINES OCCIDENTALIS PICTAE: IESVS CHRISTVS';
            }elseif($filter_person==='Virgin Mary'){
                $heading_text='IMAGINES OCCIDENTALIS PICTAE: VIRGO MARIA';
            }elseif($filter_person==='St. Joseph'){
                $heading_text='IMAGINES OCCIDENTALIS PICTAE: ST. IOSEPHVS';
            }elseif($filter_person===$themePerson){
                $heading_text=$theme==='Silver Key'?'IMAGINES OCCIDENTALIS PICTAE: BEATI':'IMAGINES OCCIDENTALIS PICTAE: SANCTI';
            }
        }elseif($filter_style==='Eastern'){
            if($filter_person==='Jesus Christ'){
                $heading_text='IMAGINES ORIENTALIS PICTAE: IESVS CHRISTVS';
            }elseif($filter_person==='Virgin Mary'){
                $heading_text='IMAGINES ORIENTALIS PICTAE: VIRGO MARIA';
            }elseif($filter_person==='St. Joseph'){
                $heading_text='IMAGINES ORIENTALIS PICTAE: ST. IOSEPHVS';
            }elseif($filter_person===$themePerson){
                $heading_text=$theme==='Silver Key'?'IMAGINES ORIENTALIS PICTAE: BEATI':'IMAGINES ORIENTALIS PICTAE: SANCTI';
            }
        }
    }elseif($filter_class==='Statues'){
        if($filter_style==='Plain'){
            if($filter_person==='Jesus Christ'){
                $heading_text='STATVAE MARMORAE PLANAE: IESVS CHRISTVS';
            }elseif($filter_person==='Virgin Mary'){
                $heading_text='STATVAE MARMORAE PLANAE: VIRGO MARIA';
            }elseif($filter_person==='St. Joseph'){
                $heading_text='STATVAE MARMORAE PLANAE: ST. IOSEPHVS';
            }elseif($filter_person===$themePerson){
                $heading_text=$theme==='Silver Key'?'STATVAE MARMORAE PLANAE: BEATI':'STATVAE MARMORAE PLANAE: SANCTI';
            }
        }elseif($filter_style==='Painted'){
            if($filter_person==='Jesus Christ'){
                $heading_text='STATVAE MARMORAE PICTAE: IESVS CHRISTVS';
            }elseif($filter_person==='Virgin Mary'){
                $heading_text='STATVAE MARMORAE PICTAE: VIRGO MARIA';
            }elseif($filter_person==='St. Joseph'){
                $heading_text='STATVAE MARMORAE PICTAE: ST. IOSEPHVS';
            }elseif($filter_person===$themePerson){
                $heading_text=$theme==='Silver Key'?'STATVAE MARMORAE PICTAE: BEATI':'STATVAE MARMORAE PICTAE: SANCTI';
            }
        }
    }elseif($filter_class==='Accessories'){
        if($filter_type==='Crucifixes'){
            $heading_text='ACCESSORIA: CRVCIFIXA';
        }elseif($filter_type==='Rosaries'){
            $heading_text='ACCESSORIA: ROSARIA';
        }elseif($filter_type==='Scapulars'){
            $heading_text='ACCESSORIA: SCAPVLARIA';
        }elseif($filter_type==='Novenas'){
            $heading_text='ACCESSORIA: NOVENAE';
        }
    }
}

?>