<?php

echo "Наследование это механизм языка ООП, который позволяет избегать дублирование кода при написании классов, а также прописывать общие свойства и методы для всех объектов дочерных классов. <br>
Полиморфизм это механизм языка ООП, который позволяет с помощью иинтерфейса описать любое количество методов, которые затем реализовываются в классах. <br><br>";

 echo "Главное различие между интерфейсом и астрактным классом состоит в том что в интерфейсе полностью отсутствует реализация методов. Абстрактные классы нужны для описания общих методов, которые используются в классовых семьях. Интерфейс нужен для описания общих методов, которые реализуются в конкретном классе. <br><br>";

class Company
{
  public $name;
  public $color;
  public $type;

  function __construct(
    $name,
    $color,
    $type)
  {
    $this->name = $name;
    $this->color = $color;
    $this->type = $type;
  }
}

interface IntfaceCar
{
 public function getCar();
}

 class Car extends Company implements IntfaceCar
 {
   public function getCar()
   {
     if ($this->color == 'black')
     {
       return  $color = 'blue';
     }
     else
     {
       return $this->color;
     }
   }
 }

 $lada = new Car('LadaNine', 'black', 'sedan');
 $lada->getCar() . '<br>';

 $reno = new Car('Renault_Megane', 'gray', 'sedan');

 echo $lada->name . '<br>';
 echo $lada->type . '<br>';
 echo $lada->getCar() . '<br>';
 echo $lada->color . '<br>';

 echo $reno->name . '<br>';
 echo $reno->type . '<br>';
 echo $reno->color . '<br><br>';

 interface IntfaceTv
 {
   public function getTelevision();
 }


 class Television extends Company implements IntfaceTv
 {
   public $diagonal = 28;
   public function getTelevision()
   {
     $this->diagonal = 32;
   }
 }

 $tv1 = new Television('gray', 'Samsung_bw265739', '');
 $tv1->diagonal;

 $tv2 = new Television('black', 'LG_hc6811387', '');
 $tv2->getTelevision();
 $tv2->diagonal;

 echo $tv1->name . '<br>';
 echo $tv1->color . '<br>';
 echo $tv1->diagonal . '<br>';
 echo $tv2->name . '<br>';
 echo $tv2->color . '<br>';
 echo $tv2->diagonal . '<br><br>';

 interface IntfacePen
 {
   public function getPen();
 }

 class Pen extends Company implements IntfacePen
 {
   public function getPen()
   {
     if ($this->color == 'black')
     {
     return  $color = 'multicolor';
     }
     else
     {
       return $color = 'green';
     }
   }
 }

 $pen1 = new Pen('', 'black', '');
 $pen2 = new Pen('', 'red', '');
 $pen1->getPen();
 $pen2->getPen();

 echo $pen1->color . '<br>';
 echo $pen1->getPen() . '<br>';
 echo $pen2->color . '<br>';
 echo $pen2->getPen() . '<br><br>';

 class Duck extends Company
 {
 }

 $duck1 = new Duck('', '', 'Wood');
 $duck1->type;
 $duck2 = new Duck('', '', 'Domestic');
 $duck2->type;

 echo $duck1->type . '<br>';
 echo $duck2->type . '<br><br>';

 interface IntfaceProd
{
  public function getProduct();
}

 class Product extends Company implements IntfaceProd
 {
   private $price = 500;
   public function getProduct()
   {
     if ($this->name == 'Gigabyte_Geforce_GTX980')
     {
       return $name = 'Asus_Geforce_GTX1060';
     }
   }
 }
 $product1 = new Product('Intel_4770', '', 'CPU');
 $product2 = new Product('Gigabyte_Geforce_GTX980', '', 'GPU');
 $product2->getProduct();


 echo $product1->name . '<br>';
 echo $product1->type . '<br>';
 echo $product2->name . '<br>';
 echo $product2->type . '<br>';
 echo $product2->getProduct();
