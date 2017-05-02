<?php
function __autoload($className) {
	require_once "../model/" . $className . '.php';
}

if (isset($_GET['id'])) {
//    echo $_GET['id'];
    
    $product = new ProductDAO();
    $product->productId = $_GET['id'];
    $arr = $product->getProductData($product);

//var_dump($arr);
    $name = $arr[0]['products_name'];
    $model = $arr[0]['model'];
    $cena = $arr[0]['price'];
    $picture = $arr[0]['picture'];
    $waranty = $arr[0]['warranty'];
    $quantity = $arr[0]['quantity'];

    $modification = new ProductDAO();

}
//$value = $product->getProductValue($product);
