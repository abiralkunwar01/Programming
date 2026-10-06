<?php
include("mysqlConnection.php");
$sqlCreateDB="CREATE DATABASE IF NOT EXISTS db_Abiral";
if($conn->query($sqlCreateDB)===TRUE)
    {
        echo " Database create successfully";
    }
    else
        {
        die ("Database not create");
    }

?>