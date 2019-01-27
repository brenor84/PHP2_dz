<?
class GiroScooter {
    private $name;
    private $price;
    private $maxSpeed;
    private $distance;

    public function setName($name){
        $this->name=$name;
    }
    public function setPrice($price){
        $this->price=$price;
    }
    public function setMaxSpeed($maxSpeed){
        $this->maxSpeed=$maxSpeed;
    }
    public function setDistance($distance){
        $this->distance=$distance;
    }
    public function getName($name){
        return $this->$name;
    }
    public function getPrice($price){
        return $this-$price;
    }
   
    public function getMaxSpeed($maxSpeed){
        return $this->$maxSpeed;
    }
    public function getDistance($distance){
        return $this-$distance;
    }

    function __construct($name,$price,$maxSpeed,$distance){
        $this->setName($name);
        $this->setPrice($price);
        $this->setMaxSpeed($maxSpeed);
        $this->setDistance($distance);
        $this->drive();
        $this->inf();
    }
    
    function drive(){
        echo " Гироскутер ".$this->name." стоит ".$this->price."</br>";
    }
    function inf(){
        echo "Максимальная скорость ".$this->maxSpeed."км/ч".";"." запас хода на одном заряде ".$this->distance."км."."<br>";
    }
}   

new GiroScooter(HOVERBOT,8500,15,10);
new GiroScooter(POLARIS,6300,15,15);


class GiroScooterHig extends GiroScooter{
    public $maxWeight;

    function __construct($name, $price, $maxSpeed, $distance,$maxWeight){
        parent::__construct($name,$price,$maxSpeed,$distance);
        $this->maxWeight=$maxWeight;
    }
    function drive(){
        parent::drive();
    }

    function inf(){
        parent::inf();
        echo "Максимальный вес ".$this->maxWeight."кг";
    }
}

$object=new GiroScooterHig("POLARIS PBS",9900,15,20,120);
// $object->drive();
// $object->inf();

///// не получается сделать валидным клас наследника

// class A {
//     public function foo() {
//         static $x = 0;
//         echo ++$x;
//     }
// }
// $a1 = new A();
// $a2 = new A();
// $a1->foo();
// $a2->foo();
// $a1->foo();
// $a2->foo();

// итерация переменной на каждом шаге

// class A {
//     public function foo() {
//         static $x = 0;
//         echo ++$x;
//     }
// }
// class B extends A {
// }
// $a1 = new A();
// $b1 = new B();
// $a1->foo(); 
// $b1->foo(); 
// $a1->foo(); 
// $b1->foo();

// тут наследование и итерация происходит только при вызове класса по отдельности

class A {
    public function foo() {
        static $x = 0;
        echo ++$x;
    }
}
class B extends A {
}
$a1 = new A;
$b1 = new B;
$a1->foo(); 
$b1->foo(); 
$a1->foo(); 
$b1->foo(); 