<?php
$hostName="localhost";
$userName="root";
$userPassword="";
$conn=new mysqli($hostName,$userName,$userPassword);
if($conn->connect_error)
    {
        die ("MYSQL connection fail");
    }
    else{
        echo "MYSQL connect..";
    }


?>