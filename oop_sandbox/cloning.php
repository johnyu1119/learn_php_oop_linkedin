<?php

class Beverage {

    public $name;

    public function __construct() {
        echo "New beverage was created.<br />";
    }

    public function __clone() {
        echo "Existing beverage was copied.<br />";
    }

}

$a =new Beverage;
$a->name="coffee";
echo $a->name.'<br />';
$b =clone $a;  
$b->name='tea';
echo $a->name.'<br />';
echo $b->name.'<br />';
echo '<hr />';
$c =$a; //byref
$c->name='cappuino';
echo $a->name.'<br />';
echo $c->name.'<br />';
?>