<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 05.06.2018
 * Time: 23:24
 */

namespace App\Providers\Models\ThingModels;



class Thing
{

    private $id;
    private $name;
    private $type;
    private $brand;
    private $price;
    private $color;
    private $size;
    private $description;

    public function __construct($id, $name, $type, $brand, $price, $color, $size, $description)
    {
        $this->id = $id;
        $this->name = $name;
        $this->type = $type;
        $this->brand = $brand;
        $this->price = $price;
        $this->color = $color;
        $this->size = $size;
        $this->description = $description;
    }
    public function getId()
    {
        return $this->id;
    }
    public function getName()
    {
        return $this->name;
    }
    public function getType()
    {
        return $this->type;
    }
    public function getBrand()
    {
        return $this->brand;
    }
    public function getPrice()
    {
        return $this->price;
    }
    public function getColor()
    {
        return $this->color;
    }
    public function getSize()
    {
        return $this->size;
    }
    public function getDescription()
    {
        return $this->description;
    }







}