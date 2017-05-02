<?php
// Load all classes, abstract classes, traits and interfaces:
function my_autoloader($className) {
    require_once "../model/" . $className . '.php';
}

spl_autoload_register('my_autoloader');
if (session_status() == PHP_SESSION_NONE) {
    session_start();
    if (isset($_SESSION['user']) && $_POST['submitForBasket']) {
        try {
            $id = trim(htmlentities($_POST['idto']));
            echo $id;
            $user = json_decode($_SESSION['user']);
            //echo $user->id;
            $quantity = trim(htmlentities($_POST['quantity']));

            if ($quantity < 1 && !is_numeric($quantity)) {
                throw New Exception("Invalid quantity");
            }

            $add = new BasketDAO();
            $add->addToBasket($quantity, $user->id, 1);
        } catch (Exception $e) {
            $errorMessage = $e->getMessage();
            include "../view/product.php";
        }

        // } else {
        //header('Location:../view/index.php');
        //}

    }
}
?>