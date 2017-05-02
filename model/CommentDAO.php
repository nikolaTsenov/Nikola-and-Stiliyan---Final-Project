<?php

/**
 * Created by PhpStorm.
 * User: user
 * Date: 5/1/2017
 * Time: 18:09 PM
 */
class CommentDAO
{

    public $id='1';

    const ADD_COMENT_SQL = "INSERT INTO comments(`id_comm`, `product_id`, `person_name`, `comments`)
                                          VALUES (null,'?','?','?','?')";


    const SELECT_COMMENTS_SQL = "SELECT *, p.products_name FROM comments c
                                  JOIN products p ON c.product_id = p.id
                                  WHERE p.id =1";

    const PRODUCT_ID_SQL = "SELECT id FROM products
                            WHERE id = ?";


    public function __construct() {
        $this->db = DBConnection::getDb ();
    }


    public function showComments()
    {
        $stmt = $this->db->prepare(self::SELECT_COMMENTS_SQL);
        $stmt->execute(array($this->id));
        $arr = $stmt->fetchAll(PDO::FETCH_ASSOC);
          echo  json_encode($arr);
        return $arr;

    }


    public function addComment(Comment $comments)
    {

            $pstmt = $this->db->prepare(self::ADD_COMENT_SQL);
            $pstmt->execute(array(
                1,$comments->name,$comments->comments,
            ));
    }



}

