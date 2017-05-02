<?php
// Load all classes, abstract classes, traits and interfaces:
function my_autoloader($className) {
    require_once "../model/" . $className . '.php';
}

spl_autoload_register('my_autoloader');
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
if (isset($_POST['submitForBasket'])) {
   try {
            $id = trim ( htmlentities ( $_POST ['idto'] ) );
           echo $id; //- for testing
            $user = json_decode($_SESSION['user']);
           // echo $user->id."<br />"; -for testing
            $quantityAdded = trim ( htmlentities ( $_POST ['quantity'] ) );
			
            $previousQantity = trim(htmlentities($_POST['previusQuantity']));
            
            $newStorageQuantity = ($previousQantity-$quantityAdded);
            
			echo $quantityAdded;
            $add = new BasketDAO();
            $set = new ProductDAO();
            
            $set->setNewProductQuantity($newStorageQuantity, $id);
            
            $add->addToBasket($quantityAdded, $user->id, $id);
            header('Location:../view/product.php?id='.$id);
    } catch (Exception $e) {
           echo $errorMessage = $e->getMessage();

            include "../view/index.php";
}

} else {
header('Location:../view/index.php');
}

?>