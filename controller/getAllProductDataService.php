<?php
function __autoload($className) {
	require_once "../model/" . $className . '.php';
}

$product = new ProductDAO();
//session_start();
//$productSess = $_SESSION['product_id'];

$product->productId='1';
$arr = $product->getProductData($product);


$name =$arr[0]['products_name'];