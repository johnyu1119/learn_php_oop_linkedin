<?php

class bicycles {
    public $bicycles;
    public const CONDITIONS = [1=>'Beat up', 2=>'Decent', 3=>'Good', 4=>'Great', 5=>'Like New'];

    
    public function __construct()
    {
        // read the csv file
        //echo "Bicycles class is construct";
        //$this->readCSVfile($file);
    }

    public function readCSVfile($file)
    {
        //echo "Bicycles class is reading CSV file";
        $f=fopen($file,"r");
        // Get header
        fgetcsv($f);
        while (!feof($f))
        {
            //print_r(fgetcsv($f));
            $csv_data=(fgetcsv($f));
            $bike=new Bicycle;
            if (isset($csv_data[0]))
            {
                //echo $csv_data[0]."<br />";
                // brand,model,year,category,gender,color,weight_kg,condition_id,price
                $bike->Brand=$csv_data[0];
                $bike->Model=$csv_data[1];
                $bike->Year=$csv_data[2];
                $bike->Category=$csv_data[3];
                $bike->Gender=$csv_data[4];
                $bike->Color=$csv_data[5];
                $bike->Weight=$csv_data[6];
                $bike->Condition=self::CONDITIONS[$csv_data[7]];
                $bike->Price=$csv_data[8];
                $this->bicycles[]=$bike;
            }


        }
        fclose($f);
        echo "<hr />"; 
        for ($i=0;$i<count($this->bicycles);$i++)
        {
           // echo $this->bicycles[$i]->Brand."<br />";
           // echo $this->bicycles[$i]->Condition."<br />";              
        }
    }

    public function printAllBicycle()
    {
        echo "<hr />"; 
        for ($i=0;$i<count($this->bicycles);$i++)
        {
            echo $this->bicycles[$i]->Brand."<br />";
            echo $this->bicycles[$i]->Condition."<br />";              
        }
    }
}

?>