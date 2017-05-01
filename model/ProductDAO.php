<?php

/**
 * Created by PhpStorm.
 * User: user
 * Date: 4/28/2017
 * Time: 0:00 AM
 */
function my_autoloader($className) {
    require_once "../model/" . $className . '.php';
}

spl_autoload_register('my_autoloader');
class ProductDAO
{
    private $db;
    public $id;
    public $productName;
    public $productPicture;
    public $productCatName;

    const SHOW_ALL_PRODUCTS_SQL = "SELECT p.* ,s.name,c.name as cname,m.name as mname FROM products p
                                    INNER JOIN subcategories s ON p.subcategory_id = subcategories_id
                                    INNER JOIN categories c ON s.category_id = c.category_id
                                    INNER JOIN manufacturers m ON p.manufacturer_id = m.manufacturer_id";

    const SHOW_CATEGORY_SQL ="SELECT p.* ,c.name as cname,s.name as sname FROM products p
                                    INNER JOIN subcategories s ON p.subcategory_id = subcategories_id
                                    INNER JOIN categories c ON s.category_id = c.category_id
                                    WHERE c.category_id = ?";

    const SHOW_CATEGORY_LAPTOP_SQL ="SELECT p.* ,c.name as cname,s.name as sname FROM products p
                                     INNER JOIN subcategories s ON p.subcategory_id = subcategories_id
                                     INNER JOIN categories c ON s.category_id = c.category_id
                                     WHERE c.category_id = ?";


    const SHOW_SUB_CATEGORY_SQL = "SELECT p.* ,c.name as cname,s.name as sname FROM products p
                                    INNER JOIN subcategories s ON p.subcategory_id = subcategories_id
                                    INNER JOIN categories c ON s.category_id = c.category_id
                                    WHERE  c.category_id= 1 AND subcategories_id = ?";

    public function __construct() {
        $this->db = DBConnection::getDb ();
    }



    public function showAllProducts($product){

//        $pstmt = $this->db->prepare(self::SHOW_CATEGORY_INDEX_SQL);
//        $pstmt= $this->db->exec(array($this->productCatName));

        $stmt = $this->db->prepare(self::SHOW_CATEGORY_SQL);
        $stmt->execute(array($this->productCatName));

        $arr = $stmt->fetchAll(PDO::FETCH_ASSOC);
       echo json_encode($arr);
        return $arr;
    }


//    function showCategories($product){
//        $pstmt = $this->db->query(self::SHOW_CATEGORY_SQL);
//        $arr = $pstmt->fetchAll(PDO::FETCH_ASSOC);
//        echo json_encode($arr);
//        return $arr;
//    }
//
//    function showSubCat($product){
//        $pstmt = $this->db->query(self::SHOW_SUB_CATEGORY_SQL);
//        $arr = $pstmt->fetchAll(PDO::FETCH_ASSOC);
//        echo json_encode($arr);
//        return $arr;
//    }






}
