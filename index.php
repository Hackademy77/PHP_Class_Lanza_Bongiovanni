<?php 

// - Riprodurre una concessionaria di automobili in OOP seguendo questa gerarchia di classi, con caratteristiche a scelta (Marchio, Modello, Numero porte, Prezzo….e altri a vostra scelta)
//  - Automobile
//    - SUV
//    - Utilitaria
//    - Sportiva

// - Tenere il conto degli oggetti creati per ogni classe

class Car {
    public $brand;
    public $model;
    public static $counter = 0;
    public function __construct($brand , $model){
        $this-> brand = $brand;
        $this-> model = $model;
        self::$counter++ ;
    }
    public static function countCars(){
        return self::$counter;

    }


}






class Suv extends Car {
    public $height;
    public $doors;
    
    
    public static $counter = 0;

    public function __construct($brand , $model , $height , $doors){
        parent::__construct($brand ,$model);
        
        $this-> height = $height;
        $this-> doors = $doors;
       
        self::$counter++ ;
    }
    public static function countCars(){
        return self::$counter;

    }

   }


   class Utilitary extends Car {
    public $baggageDimension;
    public $seat;
   
    
    public static $counter = 0;

    public function __construct($brand , $model , $baggageDimension , $seat){
        parent::__construct($brand ,$model);
        
        $this-> baggageDimension = $baggageDimension;
        $this-> seat = $seat;
        
        self::$counter++ ;
    }
    public static function countCars(){
        return self::$counter;

    }

   }

   class Sportcar extends Car {
    
    public $horsepower;
    public $fuel;
    
    public static $counter = 0;

    public function __construct($brand , $model , $horsepower , $fuel){
        parent::__construct($brand ,$model);
        
        $this-> horsepower = $horsepower;
        $this-> fuel = $fuel;
        
        self::$counter++ ;
    }
    public static function countCars(){
        return self::$counter;

    }

   }
$car1 = new Suv ("BMW" , "X5" , 1.90, 5);
$car2 = new Utilitary("Fiat" , "Panda", 300, 4);
$car3 = new Sportcar ("Audi" , "r8", 500 , "gasoline");

print_r($car1);
print_r($car2);
print_r($car3);
print_r("All cars " . Car::countCars() . "\n");
print_r("Number of Suv " . Suv::countCars() . "\n");
print_r("Number of Utilitary " .Utilitary::countCars() . "\n");
print_r("Number of Sportcar " .Sportcar::countCars() . "\n");

echo "Car 1: " . $car1->brand . " " . $car1->model . " " . "Height:" . $car1->height . "  " . "Doors:"  . $car1->doors . "\n"; 

echo "Car 2: " . $car2->brand . " " . $car2->model . " " . "baggageDimension:" . $car2->baggageDimension . "  " . "seat:"  . $car2->seat . "\n"; 


echo "Car 3: " . $car3->brand . " " . $car3->model . " " . "horsepower:" . $car3->horsepower . "  " . "fuel:"  . $car3->fuel . "\n"; 

