<?php
class Car{
public $brand="BMW";
public $color;
public $price;

public function setPrice($price){
    $this->price=$price;
    echo "<br>";
echo $this->brand;
  echo "<br>";
    
}



public function drive()
{
echo "The car is driving";

}
}
$Car=new Car();
//$Car->brand="BMW";
$Car->color="Red";
$Car->setPrice(20000);
$Car->drive();
echo "<br>";
//echo "$Car->brand";
echo "<br>";
echo "$Car->color";
echo "<br>";
echo "<br>";
echo "$Car->price";
echo "<br>";

?>
