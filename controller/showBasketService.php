<?php
// Load all classes, abstract classes, traits and interfaces:
function my_autoloader($className) {
	require_once "../model/" . $className . '.php';
}

spl_autoload_register('my_autoloader');

$productite = new BasketDAO();
$arr = $productite->getProductInBasket($user->id);

//var_dump($arr);
echo "<br />";

for ($index = 0; $index < count($arr); $index++) {
    echo "<div class='products'><a href='../view/product.php?id='>";
    echo "<img src='" . $arr[$index]['picture'] . "' alt=''>";
	echo "<p>".$arr[$index]['products_name']."</p>";
    echo "<p>".$arr[$index]['manufacturers']."</p>";
    echo "<p>".$arr[$index]['price'].".лв</p>";

	echo "</div>";
}

