<?php
//Project Oop


class Vehicle{
    public $strCompany;
    public $strOwner;
    public $strType;


    function __construct(string $company,string $owner, string $type){
        $this->strCompany = $company;
        $this->strOwner = $owner;
        $this->strType = $type;

    }

    public function getVehicleData(){
        $vehicleData = "
            <h2>Vehicle data</h2>
            <p>
                COMPANY:{$this->strCompany}
                <br>
                OWNER:{$this->strOwner}
                <br>
                VEHICLE TYPE:{$this->strType}
                <br>
        ";
    }
}                     



abstract class Rocket extends Vehicle{

    public $strModel;
    public $location;

    function __construct(string $company,string $owner, string $type, string $model){
        parent::__construct($company, $owner, $type);
   
        $this->strModel = $model;
    }
    public function getModel():string {
        return $this->strModel;
    }

    abstract public function setLocation(string $location);
    abstract public function getLocation():string;

   
}

interface Companies {
    public function companiesW(string $companies):string;
}

class Falcon9 extends Rocket implements Companies{
    public $strFuel;
    static $intYearOfConstruction = 2009;
    static $intMoney = 62;
    public $strBuilItFor;

    function __construct(string $company,string $owner, string $type, string $model, int $yearOfConstruction,string $builItFor, int $money,string $fuel){
        parent::__construct($company, $owner, $type, $model);
   
        $this-> strFuel = $fuel;
        
        $this-> strBuilItFor = $builItFor;
    }
   
    
    public function getFalcon9Data() {

        echo "<h2>Falcon 9 data</h2> <br>"; 
        echo "company: ". $this->strCompany . "<br>";
        echo "Model: " . $this->strModel . "<br>";
        echo "year of construction: ". self::$intYearOfConstruction . "<br>";
        echo "builded for: " . $this->strBuilItFor ."<br>";
        echo "money spended: " . self::$intMoney . "<br>";
        echo "fuel: ". $this-> strFuel . "<br>";
    }


    public function setLocation(string $location){
        $this->location = $location;
    }
    public function getLocation():string{
        return "Location: " . $this->location . "<br>";
    }
    public function companiesW(string $companies):string{
        $companies = "Nasa, Blue Origin";

        return "Companies that helped to build this rocked" . $companies . "<br>";
    }

}

$objVehicle1 = new Falcon9( "spacex","privateC", "liquid fuel","Falcon 9",2009, "transportation", 62, "xerocen");
$objVehicle1->setLocation("California");
echo $objVehicle1->getLocation();

echo $objVehicle1->getFalcon9Data();
echo $objVehicle1->companiesW();


