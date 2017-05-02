<?php

/**
 * Created by PhpStorm.
 * User: user
 * Date: 4/28/2017
 * Time: 0:00 AM
 */
// function my_autoloader($className) {
//     require_once "../model/" . $className . '.php';
// }

// spl_autoload_register('my_autoloader');
class ProductDAO
{
    private $db;
    public $id;
    public $productName;
    public $productPicture;
    public $productSubCatName;
    public $productCatName;
    public $productId;

    const SHOW_ALL_PRODUCTS_SQL = "SELECT p.* ,s.name,c.name as cname,m.name as mname FROM products p
                                    INNER JOIN subcategories s ON p.subcategory_id = subcategories_id
                                    INNER JOIN categories c ON s.category_id = c.category_id
                                    INNER JOIN manufacturers m ON p.manufacturer_id = m.manufacturer_id";

    const SHOW_CATEGORY_SQL =		"SELECT p.* ,c.name as cname,s.name as sname FROM products p
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
                                    WHERE  c.category_id= ? AND subcategories_id = ?";
    
    const GE_PRODUCT_DATA_SQL = "SELECT p.* ,c.name as cname,s.name as sname FROM products p
                                    INNER JOIN subcategories s ON p.subcategory_id = subcategories_id
                                    INNER JOIN categories c ON s.category_id = c.category_id
                                    WHERE p.id = ?";

    const PRODUCT_WHIT_VAL_SQL = "  SELECT p.* ,psnv.* ,c.name as cname FROM products p
                                    INNER JOIN subcategories s ON p.subcategory_id = subcategories_id
                                    INNER JOIN categories c ON s.category_id = c.category_id
                                    INNER JOIN product_specification_name_values psnv ON psnv.product_id = p.id
                                    WHERE psnv.product_id=1";
    const VALUES_SQL = "SELECT  specification_name,specification_values FROM elbag.product_specification_name_values 
                        WHERE product_id =?";
    
    const UPDATE_QUANTITY_SQL = "UPDATE products SET quantity=? WHERE id=?;";



    public function __construct() {
        $this->db = DBConnection::getDb ();
    }



    public function showAllProducts($product){


        $stmt = $this->db->prepare(self::SHOW_ALL_PRODUCTS_SQL);
        $stmt->execute(array($this->productCatName));

        $arr = $stmt->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode($arr);
        return $arr;
    }
    
    public function showSubCatProducts($product){
    
    	$stmt = $this->db->prepare(self::SHOW_SUB_CATEGORY_SQL);
    	$stmt->execute(array($this->productCatName,$this->productSubCatName));
    
    	$arr = $stmt->fetchAll(PDO::FETCH_ASSOC);
    	echo json_encode($arr);
    	return $arr;
    }
    
    public function getProductData ($product) {
    	$stmt = $this->db->prepare(self::GE_PRODUCT_DATA_SQL);
    	$stmt->execute(array($this->productId));
    	
    	$arr = $stmt->fetchAll(PDO::FETCH_ASSOC);
    	return $arr;
    
    }

    public function getProductValue ($product) {
        $stmt = $this->db->prepare(self::VALUES_SQL);
        $stmt->execute(array($this->productId));

        $mod = $stmt->fetchAll(PDO::FETCH_NUM);

        return $mod;

    }
    
    public function setNewProductQuantity ($newQuantity,$productId) {
    	$stmt = $this->db->prepare(self::UPDATE_QUANTITY_SQL);
    	$stmt->execute(array($newQuantity,$productId));
    
    	return true;
    
    }
}
