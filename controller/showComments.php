<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 5/1/2017
 * Time: 18:06 PM
 */
function __autoload($className) {
    require_once "../model/" . $className . '.php';
}



//if (isset ( $_SESSION ['productId'] )) {

//    $name = $_REQUEST['name'];
//    $comments = $_REQUEST['comments'];
//    $productId = $_SESSION ['productId'];

$id = new ProductDAO();
$id->productId = '1';
$c = new CommentDAO();
$c->showComments();
    var_dump($c);

// if (isset($_GET['id'])) {
//
// }else {
//   http_response_code ( 401 );
//   echo '{"error": "not logged in"}';
//}



//    if ($_SERVER ['REQUEST_METHOD'] === 'POST') {
//        // add new contact
//        $dao = new CommentDAO();
//        $userId = json_decode ( $_SESSION ['user'] )->id;
//
//        $tuiOtJavaScripta = json_decode($_POST ['data']);
//        $id = isset($tuiOtJavaScripta->id) ? $tuiOtJavaScripta->id : null;
//
//
//        $bashContact = new Comment($tuiOtJavaScripta->name,
//            $tuiOtJavaScripta->phone,
//            $tuiOtJavaScripta->email,
//            $userId, $id);
//        $dao->addContact($bashContact);
//    } elseif ($_SERVER ['REQUEST_METHOD'] === 'GET') {
//        // list all contacts
//        echo json_encode($dao->listAllContacts($userId));
//    }
//}else {
//    http_response_code ( 401 );
//    echo '{"error": "not logged in"}';
//}



