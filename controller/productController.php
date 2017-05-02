<?php
 function __autoload($class){
     require_once '../model/'.$class.'.php';
 }
$product = new ProductDAO();
//$product->showAllProducts($product);
