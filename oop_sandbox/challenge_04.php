<?php

class bicycle{
    public $brand;
    public $model;
    public $year;
    public $description;
    private $weight_kg;
    protected static $wheels=2;

    public static $instance_count;

    public const CATEGORIES = ['Road', 'Mountain', 'Hybrid', 'Cruiser', 'City', 'BMX'];

    public $category;


    public function get_category()
    {
        return $this->category;
    }

    public function create()
    {
        self::$instance_count++;
        //echo get_class($this)."<br />";
        //echo get_called_class()."<br />";
        return new $this;
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

    public static function wheel_details()
    {
        return static::$wheels;
    }


}

class Unicycle extends Bicycle {
    protected static $wheels=1;

    public function name()
    {
        return "Unicycle - ".parent::name()."U";
    }

    public function get_category()
    {
        if ($this->category=="BMX")
        {
            return "this is unicycle";
        }
        else
        {
            return parent::get_category();
        }

    }

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
//echo $bike1->weight_kg."<br />";

$bike3=$bike1->create();
echo get_class($bike3)."<br />";
echo $bike3->name()."<br />";
$bike3->category=Bicycle::CATEGORIES[5];
echo $bike3->get_category()."<br />";
echo Bicycle::$instance_count."<br />";
//get_called_class();
?>