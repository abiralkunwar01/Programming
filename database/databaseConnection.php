<?php
$hostName="localhost";
$userName="root";
$userPasswprd="";
$databaseName="db_Abiral";
$conn=new mysqli($hostName,$userName,$userPasswprd,$databaseName);
if($conn->connect_error)
    {
        die9("Database not connect...");

    }
    else
        {
            echo "Database connect...";
        }
        ?>