<?php

function fun()
{
static $count=0;
$count++;
echo $count;
}

fun();
fun();
fun();
fun();

?>