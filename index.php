
<?php

echo "Наследование это механизм языка ООП, который позволяет избегать дублирование кода при написании классов, а также прописывать общие свойства и методы для всех объектов дочерных классов. <br>
Полиморфизм это механизм языка ООП, который позволяет с помощью иинтерфейса описать любое количество методов, которые затем реализовываются в классах. <br><br>";

 echo "Главное различие между интерфейсом и астрактным классом состоит в том что в интерфейсе полностью отсутствует реализация методов. Абстрактные классы нужны для описания общих методов, которые используются в классовых семьях. Интерфейс нужен для описания общих методов, которые реализуются в конкретном классе. <br><br>";

class Transport {
  public $name;
  public $color;
  public $type;
}

interface IntfaceCar
{
 public function getCar();
}

class Car extends Transport implements IntfaceCar {
  public $color = 'black';
  public $type = 'sedan';
  public function getCar() {
    if ($this->color) {
      return  $color = 'blue';
    }
    else {
      return $color;
    }
  }
}

$lada = new Car();
$lada->name = 'LadaNine';
$lada->getCar() . '<br>';
$lada->color;

$reno = new Car();
$reno->name = 'Renault_Megane';
$reno->color ='gray';

echo $lada->name . '<br>';
echo $lada->type . '<br>';
echo $lada->getCar() . '<br>';
echo $lada->color . '<br>';

echo $reno->name . '<br>';
echo $reno->type . '<br>';
echo $reno->color . '<br><br>';


class Equipment
{
  public $color;
  public $name;
  public $diagonal;
}

interface IntfaceTv
{
  public function getTelevision();
}

class Television extends Equipment implements IntfaceTv {
  public $diagonal = 28;
  public function getTelevision() {
    $this->diagonal = 32;
  }
}

$tv1 = new Television();
$tv1->name = 'Samsung_bw265739';
$tv1->color = 'gray';
$tv1->diagonal;

$tv2 = new Television();
$tv2->getTelevision();
$tv2->name = 'LG_hc6811387';
$tv2->color = 'black';
$tv2->diagonal;

echo $tv1->name . '<br>';
echo $tv1->color . '<br>';
echo $tv1->diagonal . '<br>';
echo $tv2->name . '<br>';
echo $tv2->color . '<br>';
echo $tv2->diagonal . '<br><br>';

class Instrument {
  public $type;
}
interface IntfacePen
{
  public function getPen();
}

class Pen extends Instrument implements IntfacePen {
  public $color;
  public $type = 'Pen';
  public function getPen() {
    if ($this->color == 'black') {
    return  $color = 'multicolor';
    }
    else {
      return $color = 'green';
    }
  }
}

$pen1 = new Pen();
$pen2 = new Pen();
$pen1->color = 'black';
$pen1->getPen();
$pen2->color = 'red';
$pen2->getPen();

echo $pen1->color . '<br>';
echo $pen2->color . '<br>';
echo $pen1->getPen() . '<br>';
echo $pen2->getPen() . '<br><br>';

class Bird {
public $class;
public $type;
}
interface IntfaceDuck
{
  public function getDuck();
}

class Duck extends Bird implements IntfaceDuck {
  public $class = 'Duck';
  public $type = 'Domestic';
  public function getDuck() {
    $this->type = 'Wood';
  }
}

$duck1 = new Duck();
$duck1->getDuck();
$duck1->type;
$duck2 = new Duck();
$duck2->type;

echo $duck1->type . '<br>';
echo $duck2->type . '<br><br>';

class Resource {
  public $name;
  public $type;
}

interface IntfaceProd
{
  public function getProduct();
}

class Product extends Resource implements IntfaceProd {
  private $price = 500;
  public function getProduct() {
    $this->name = 'Asus_Geforce_GTX1060' ;
  }
}
$product1 = new Product();
$product2 = new Product();
$product1->name = 'Intel_4770';
$product2->name = 'Gigabyte_Geforce_GTX980';
$product2->getProduct();
$product1->type = CPU;
$product2->type = GPU;

echo $product1->name . '<br>';
echo $product1->type . '<br>';
echo $product2->name . '<br>';
echo $product2->type . '<br>';
 ?>
