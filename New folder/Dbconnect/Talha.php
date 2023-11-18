<?php

class product{
    public $a;
    public $b;

    function __construct($a,$b){

            $this->a = $a;
            $this->b = $b;
    }

     function add(){
        echo "Add a Record";
     }

    function delete(){
        echo "Delete a Record";

    }
    function edit(){
        echo "Edit Record";
    }
    function getall(){
        echo "Get All Record";
    }
    function get(){
        echo "Get a Record";
    }

}

$product = new product(1,2);
$product->a = 12;
echo $product->a;
$product->add();
$product->delete();

$pro1 = new product(1,2);
$pro1->a = 1;
$pro1->add();
