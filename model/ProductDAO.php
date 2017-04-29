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
//   private $db;

    const SHOW_ALL_PRODUCTS_SQL = "SELECT p.* ,s.name,c.name as cname,m.name as mname FROM products p
                                    INNER JOIN subcategories s ON p.subcategory_id = subcategories_id
                                    INNER JOIN categories c ON s.category_id = c.category_id
                                    INNER JOIN manufacturers m ON p.manufacturer_id = m.manufacturer_id";

    const SHOW_CATEGORY_SQL ="SELECT p.* ,c.name as cname FROM products p
                                    INNER JOIN subcategories s ON p.subcategory_id = subcategories_id
                                    INNER JOIN categories c ON s.category_id = c.category_id
                                    WHERE c.category_id = ?";


    public function showAllProducts(){

        $db = DBConnection::getDb();


        $pstmt = $db->prepare(self::SHOW_CATEGORY_SQL);
        if ($pstmt->execute(array(1))){

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


