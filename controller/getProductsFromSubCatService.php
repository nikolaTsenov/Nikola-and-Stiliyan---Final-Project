<?php
function __autoload($class){
	require_once '../model/'.$class.'.php';
}

$allSubCatsArr = array (
		"tele-phones",
		"smartWatches",
		"tablets",
		"bateries",
		"accessories",
		"smartHome",
		"laptopsAndAcc",
		"computers",
		"pcComponents",
		"software",
		"perifery",
		"printers"
		
);
$currentSubCat = $_GET['sc'];
$subId = '';



for ($index = 0; $index < count($allSubCatsArr); $index++) {
	if ($currentSubCat == $allSubCatsArr[$index]) {
		$subId = ($index+1);
	}
}
//echo $subId; - for testing

$product = new ProductDAO();
$product->productCatName=$subId;
$product->showSubCatProducts($product);
?>