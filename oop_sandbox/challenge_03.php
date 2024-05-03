<?php

class bicycle{
    public $brand;
    public $model;
    public $year;
    public $description;
    private $weight_kg;
    protected $wheels=2;

    public function name()
    {
        return $this->brand." ".$this->model."(".$this->year.")";
    }

    public function weight_lbs()
    {
        return floatval($this->weight_kg) *2.2046226218;
    }

    public function weight_kg()
    {
        return floatval($this->weight_kg).'kg';
    }

    public function set_weight_kg($w_kg){
        // echo $w_lbs."<br />";
        $this->weight_kg=floatval($w_kg);
    }

    public function set_weight_lbs($w_lbs){
        // echo $w_lbs."<br />";
        $this->weight_kg=floatval($w_lbs)/2.2046226218;
    }

    public function wheel_details()
    {
        return $this->wheels;
    }


}

class Unicycle extends Bicycle {
    protected $wheels=1;
}

$bike1=new Unicycle; //bicycle;
$bike1->brand='BMW';
$bike1->model='C3';
$bike1->year='2021';

echo $bike1->name()."<br />";
echo $bike1->wheel_details()."<br />";

$bike1->set_weight_kg(20);
//$bike1->weight_kg=100;

echo $bike1->weight_kg()."<br />";
echo $bike1->weight_lbs()."<br />";
echo $bike1->weight_kg."<br />";


?>