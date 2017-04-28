<?php

/**
 * Created by PhpStorm.
 * User: user
 * Date: 4/28/2017
 * Time: 0:00 AM
 */
include_once 'DBConnection.php';
class ProductDAO
{
//    private $db;

    const SHOW_ALL_PRODUCTS_SQL = "SELECT p.* ,s.name,c.name as cname,m.name as mname FROM products p
                                    INNER JOIN subcategories s ON p.subcategory_id = subcategories_id
                                    INNER JOIN categories c ON s.category_id = c.category_id
                                    INNER JOIN manufacturers m ON p.manufacturer_id = m.manufacturer_id";

    const SHOW_TEL_TAB_SMART_SQL =4;


    public function showAllProducts(){

        $db = DBConnection::getDb();


        $pstmt = $db->prepare(self::SHOW_ALL_PRODUCTS_SQL);
        if ($pstmt->execute()){

//        $product = $pstmt->fetchAll(PDO::FETCH_ASSOC);

        $result = array();
            while ($row = $pstmt->fetch(PDO::FETCH_ASSOC)) {
//                "<p>".print_r($row)."</p>";
                 $result[]= json_encode($row);
            }
            var_dump($result);
            return $result;
        }

    }

}
$product = new ProductDAO();
$product->showAllProducts();

//    public function showAllProduct()
//    {
//        $db = DBConnection::getDb();
//
//        $pstmt = $db->prepare(self::SHOW_ALL_PRODUCTS_SQL);
//        $pstmt->execute ( array () );
//
//        $product = $pstmt->fetchAll ( PDO::FETCH_ASSOC );
//        $result = array ();
//
//        foreach ( $product as $product ) {
//            $result [] = new ProductDAO ( $product ['products_name'], $product ['model'],$product ['id'] );
//        }
//        var_dump($result);
//        return $result;
//
//    }
//
//}
//
//$result =new ProductDAO();
//$result->showAllProduct();

