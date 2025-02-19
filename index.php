<?php

class Fruit
{
   //property
   public $name;
   public $color;

   public function set_name($name){
      return $this->name = $name;
   }
   public function get_name(){
    return $this->name;
 }

 public function set_color($color){
    return $this->color = $color;
 }

 public function get_color(){
    return $this->color;
 }
}
 $apple = new Fruit();
$apple->set_name("Apple");
$apple->set_color("Green");

$banana = new Fruit();
$banana->set_name("Banana");
$banana->set_color("Yellow");

echo $banana->get_name();
echo"<br>";
echo $banana->get_color();
echo"<br><br>";
echo $apple->get_name();
echo"<br>";
echo $apple->get_color();

