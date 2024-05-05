<?php
class bicycle{
    public $brand;
    public $model;
    public $year;
    public $description;
    private $weight_kg;
    protected $wheels=2;

    public function __construct()
    {
        echo 'Bicycle is created<br />';
    }

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



?>