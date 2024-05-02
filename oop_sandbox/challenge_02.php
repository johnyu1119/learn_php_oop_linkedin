<?php

class Animal {
    var $name;
    var $skin_color;
    var $legs;

    function full_name() {
        return $this->name.", ".$this->skin_color." have ".$this->legs." legs";
    }

}

class Mammal extends Animal {
    var $body_temp;
}

$human1=new Mammal;
$human1->name='John';
$human1->skin_color='Yellow';
echo $human1->full_name()."<br />";


?>