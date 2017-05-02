<?php

class BasketDAO
{
    public $quantity;

    const GET_ALL_PRODUCT_IN_BASKET = "SELECT p.id, p.picture, p.products_name, m.name AS 'manufacturers', p.model, b.quantity, p.price
			                            FROM basket b JOIN products p
		                            	ON (b.product_id = p.id)
			                             JOIN manufacturers m ON (p.manufacturer_id= m.manufacturer_id) 
			                            WHERE b.user_id = 1 AND 1 < p.quantity";

    const GET_SUM_PRODUCTS = "SELECT SUM(b.quantity*p.price) FROM baskets b JOIN products p
                                ON (b.product_id=p.id)
                                WHERE b.users_id = ?";

    const ADD_PRODUCT_TO_BASKET_SQL = "INSERT INTO basket(quantity,user_id,product_id)
			                            VALUES (?,?,?)";

    const GET_QUANTITY_SQL = "SELECT quantity  FROM products
                              WHERE id=?";

    const REMOVE_FK_CHECKS = "SET foreign_key_checks = 0";

    const RETURN_FK_CHECKS = "SET foreign_key_checks = 1";

    public function __construct() {
        $this->db = DBConnection::getDb ();
    }




    function getProductInBasket($userId, $quantity){
            $pstmt =$this->db->prepare(GET_ALL_PRODUCT_IN_BASKET);
            $pstmt->execute(array($userId, $quantity));
            return $res = $pstmt ->fetchAll(PDO::FETCH_ASSOC);
    }

    public function addToBasket($quantity,$userId,$productId)
    {
        try {
            $this->db->beginTransaction();

            $stmt = $this->db->exec(self::REMOVE_FK_CHECK);

            $stmt = $this->db->prepare(self::ADD_PRODUCT_TO_BASKET_SQL);
            $stmt->execute(array($quantity,$userId,$productId));

            $stmt = $this->db->exec(self::RETURN_FK_CHECK);

            $this->db->commit();

            return true;
        } catch(Exception $ex) {
            //Something went wrong rollback!
            $this->db->rollBack();
            echo $ex->getMessage();
        }
        
    }




    public function showQuantity($quant)
    {

        $stmt = $this->db->prepare(self::GET_QUANTITY_SQL);
        $stmt->execute(array($quant));
        $arr = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $arr[0];

    }

}