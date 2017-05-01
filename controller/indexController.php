<?php
 function __autoload($class){
     require_once '../model/'.$class.'.php';
 }

$product = new ProductDAO();
$product->productCatName='1';
$product->showAllProducts($product);










//$product->showSubCat($product);
//$currentDir = $_SERVER['PHP_SELF'];


//if (strpos($_SERVER['REQUEST_URI'], "laptops") !== false){
//    $product = new ProductDAO();
//    $product->showAllProducts($product);
//}



//if (isset($_GET['page'])){
//    $file = "./".$_GET['page'].".php";
//    if (file_exists($file)){
//        echo $file;
//        include $file;
//        if($file =='laptops.php'){
//            $product = new ProductDAO();
//            $product->showAllProducts($product);
//        }
//
//    }else{
//        include "../notfound.php";
//    }
//}else{
////    include "../view/index.php";
//}

?>