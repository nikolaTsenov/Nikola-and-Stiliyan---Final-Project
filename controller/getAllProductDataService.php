<?php
function __autoload($className) {
	require_once "../model/" . $className . '.php';
}

$product = new ProductDAO();
//session_start();
//$productSess = $_SESSION['product_id'];

$product->productId='1';
$arr = $product->getProductData($product);

//var_dump($arr);
$name =$arr[0]['products_name'];
$model =$arr[0]['model'];
$cena = $arr[0]['price'];
$picture=$arr[0]['picture'];
$waranty= $arr[0]['warranty'];
$quantity = $arr[0]['quantity'];


//$value = $product->getProductValue($product);
