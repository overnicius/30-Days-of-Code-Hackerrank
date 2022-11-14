<?php

//Write MyBook class

class Mybook extends Book 
{
    protected $price;
    function __construct($title, $author, $price) {
    parent::__construct(trim($title), trim($author));
    $this->price = $price;
    }

    function Display() {
        echo 'Title: ' . $this->title . "\n";
        echo 'Author: ' . $this->author . "\n";
        echo 'Price: ' . $this->price;
    }
    
}

?>