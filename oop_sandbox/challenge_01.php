<?php

class bicycle{
    var $brand;
    var $model;
    var $year;
    var $description;
    var $weight_kg;

    function name()
    {
        return $this->brand." ".$this->model."(".$this->year.")";
    }

    function weight_lbs()
    {
        return floatval($this->weight_kg) *2.2046226218;
    }

    function set_weight_lbs($w_lbs){
        // echo $w_lbs."<br />";
        $this->weight_kg=floatval($w_lbs)/2.2046226218;
    }


}

$bike1=new bicycle;
$bike1->brand='BMW';
$bike1->model='C3';
$bike1->year='2021';

echo $bike1->name()."<br />";

$bike1->set_weight_lbs(30);
echo $bike1->weight_kg."<br />";
echo $bike1->weight_lbs()."<br />";


?>