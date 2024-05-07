<?php

class bicycle {
    public $Brand;
    public $Model;
    public $Year;
    public $Category;
    public $Gender;
    public $Color;
    public $Weight;
    public $Condition;
    public $Price;

    public const CATEGORIES = ['Road', 'Mountain', 'Hybrid', 'Cruiser', 'City', 'BMX'];
    public const GENDERS=['Mens', 'Womens', 'Unisex'];
    public const CONDITIONS =[1=>'Beat up', 2=>'Decent', 3=>'Good', 4=>'Great', 5=>'Like New'];
    
    public function __construct()
    {
        // read the csv file
        //echo "Bicycle class is construct";
    }
}

?>