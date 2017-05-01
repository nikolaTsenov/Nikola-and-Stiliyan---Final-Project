<?php

/**
 * Created by PhpStorm.
 * User: user
 * Date: 5/1/2017
 * Time: 18:04 PM
 */
class Comment implements JsonSerializable
{
    private $name;
    private $comments;

    function __construct($name=null,$comments= null) {

        if (empty($name)) {
            throw new Exception ( 'Няма име на Коментатора!' );
        }

        if (empty($comments)){
            throw new Exception('Няма въведено съобщение!');
        }

        $this->name = $name;
        $this->comments = $comments;

    }

    public function jsonSerialize() {
        $result = get_object_vars($this);
        unset($result['password']);
        return $result;
    }

    public function __get($prop) {
        return $this->$prop;
    }



}

