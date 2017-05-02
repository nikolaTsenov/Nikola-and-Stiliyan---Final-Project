<?php

class BasketDAO
{


    public function __construct() {
        $this->db = DBConnection::getDb ();
    }




    function getProductInBasket($userId, $quantity){
        try{
            $pstmt =$this->db->prepare(GET_ALL_PRODUCT_IN_BASKET);
            $pstmt->execute(array($userId, $quantity));
            return $res = $pstmt ->fetchAll(PDO::FETCH_ASSOC);
        }catch (PDOException $e) {
            throw new Exception('Bad user ID provided!');
        }
    }

    public function showComments()
    {
        $stmt = $this->db->prepare(self::SELECT_COMMENTS_SQL);
        $stmt->execute(array($this->id));
        $arr = $stmt->fetchAll(PDO::FETCH_ASSOC);
        echo  json_encode($arr);
        return $arr;

    }



}