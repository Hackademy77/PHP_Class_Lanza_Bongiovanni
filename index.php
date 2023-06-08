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

$car1 = new Car ("BMW" , "X5");
$car2 = new Car ("Fiat" , "Panda");
$car3 = new Car ("Audi" , "r8");


print_r($car1);
print_r($car2);
print_r($car3);



class Description extends Car {
    public $category;
    public $doors;
    public $horsepower;
    public $fuel;
    public $price;
    public static $counter = 0;

    public function __construct($brand , $model , $category , $doors , $horsepower , $fuel , $price){
        parent::__construct($brand ,$model);
        $this-> category = $category;
        $this-> doors = $doors;
        $this-> horsepower = $horsepower;
        $this-> fuel = $fuel;
        $this-> price = $price;
        self::$counter++ ;
    }
    public static function countCars(){
        return self::$counter;

    }

   }
$car1 = new Description ("BMW" , "X5" , "SUV" , 5 , 175 , "diesel", 55.000);
$car2 = new Description("Fiat" , "Panda","utilitaria" , 5 , 60 , "gpl", 10.000);
$car3 = new Description ("Audi" , "r8","sportiva" , 3 , 350 , "benzina", 150.000);

print_r($car1);
print_r($car2);
print_r($car3);
print_r(Car::countCars() . "\n");
print_r(Description::countCars());