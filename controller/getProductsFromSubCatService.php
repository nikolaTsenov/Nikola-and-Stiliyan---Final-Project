<?php
function __autoload($class){
	require_once '../model/'.$class.'.php';
}

$allSubCatsArr = array (
		"telephones",
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
		"printers",
		"wirelessNetWorking",
		"televisions",
		"videosScreens",
		"homeKinoAndAudio",
		"electronica",
		"consolsAndGames",
		"photos",
		"videoCameras",
		"photoAndVideoCameras",
		"refrigerators",
		"washingMachines",
		"dishWashers",
		"insertingDevices",
		"ovens",
		"airConditioners",
		"hoovers",
		"preparingDrinks",
		"kitchenAppliances"
);
$currentSubCat = $_GET['sc'];
$subId = '';
$prId = '1';


for ($index = 0; $index < count($allSubCatsArr); $index++) {
	if ($index > 5) {
		$prId = 2;
	} 
	if($index > 12) {
		$prId = 3;
	} 
	if($index > 20) {
		$prId = 4;
	} 
	if($index > 26) {
		$prId = 5;
	}
	if ($currentSubCat == $allSubCatsArr[$index]) {
		$subId = ($index+1);
		break;
	}
}
//echo $subId; - for testing

$product = new ProductDAO();
$product->productCatName=$prId;
$product->productSubCatName=$subId;
$product->showSubCatProducts($product);
?>