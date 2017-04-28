<?php

/**
 * Created by PhpStorm.
 * User: user
 * Date: 4/28/2017
 * Time: 0:00 AM
 */
class Product implements JsonSerializable
{
    private $id;
    private $name;
    private $model;
    private $price;
    private $picture;
    private $warranty;
    private $quantity;


//    public function __construct($name,$model,$price,$picture,$warranty,$quantity)
//    {
//        $this->name = $name;
//        $this->model= $model;
//        $this->price= $price;
//        $this->picture = $picture;
//        $this->warranty = $warranty;
//        $this->quantity = $quantity;
//    }

    public  function jsonSerialize()
    {
        // TODO: Implement jsonSerialize() method.
        return get_object_vars($this);
    }

    public function __get($name)
    {
        // TODO: Implement __get() method.
    }

    public function __set($name, $value)
    {
        // TODO: Implement __set() method.
    }

    public function show()
    {
        // TODO: Implement show() method.
    }
}
