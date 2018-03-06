<?php

class Goods
{
    public $name;
    public $img;
    public $author;
    public $year;
    public $price;
    public $status;

    public function __construct($name, $img, $author, $year, $price, $status)
    {
        $this->name = $name;
        $this->img = $img;
        $this->author = $author;
        $this->year = $year;
        $this->price = $price;
        $this->status = $status;
    }

}