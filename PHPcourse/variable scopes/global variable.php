<?php
$num=20;
$a=100;
$name1="ram kumar";
$name="Abiral Kunwar";
function fun(){
    global $num ,$name;  //global variable
    echo "Num is $num";  //globle variabal
    echo "<br>";
    echo "My name is $name";
    echo "<br>";

 echo $GLOBALS['name1'];
 echo "<br>";
echo $GLOBALS['a'];

}
fun();

?>