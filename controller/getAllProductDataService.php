<?php
function __autoload($className) {
	require_once "../model/" . $className . '.php';
}

if (isset($_GET['id'])) {


    $product = new ProductDAO();
    $product->productId = $_GET['id'];
    $arr = $product->getProductData($product);



    $name = $arr[0]['products_name'];
    $model = $arr[0]['model'];
    $cena = $arr[0]['price'];
    $picture = $arr[0]['picture'];
    $waranty = $arr[0]['warranty'];
    $quantity = $arr[0]['quantity'];
    $mod = $product->getProductValue($product);

}
//    for ($tr = 0; $tr< count($mod);$tr++){
//        echo "<tr>";
//        for($td=0; $td<count($mod[$tr]); $td++) {
//
//            echo"<td class='col-xs-4 text-muted'>".$mod[$tr][$td]."</td>";
//            echo"<td class='col-xs-8'>".$mod[$tr][$td]."</td>";
//        }
//        echo "<tr>";
//    }




//$specificaciq1 = $mod[0]['specification_name'];
//$value1 = $mod[0]['specification_values'];




//    $modification = new ProductDAO();
//
//    $modification->getProductValue()
//}
//$value = $product->getProductValue($product);
