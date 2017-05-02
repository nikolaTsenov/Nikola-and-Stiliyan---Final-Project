<?php

/**
 * Created by PhpStorm.
 * User: user
 * Date: 5/2/2017
 * Time: 14:03 PM
 */
class FavoriteDAO
{



    const  ADD_FAV_SQL = 'INSERT INTO `favorits`(`fav_id`, `user_id`, `product_id`) 
                              VALUES (null,?,?)';


    const REMOVE_FK_CHECKS = "SET foreign_key_checks = 0";

    const RETURN_FK_CHECKS = "SET foreign_key_checks = 1";


     public function __construct() {
         $this->db = DBConnection::getDb ();
     }

    public function addToBasket($userId,$productId)
    {
        try {
            $this->db->beginTransaction();

            $stmt = $this->db->exec(self::REMOVE_FK_CHECK);

            $stmt = $this->db->prepare(self::ADD_FAV_SQL);
            $stmt->execute(array( $userId, $productId));

            $stmt = $this->db->exec(self::RETURN_FK_CHECK);

            $this->db->commit();

            return true;
        } catch (Exception $ex) {
            //Something went wrong rollback!
            $this->db->rollBack();
            echo $ex->getMessage();
        }
    }


    }