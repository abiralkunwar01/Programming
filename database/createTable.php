<?php
include("databaseConnection.php");

$sql_createTable="CREATE TABLE IF NOT EXISTS tbl_students(
id INT PRIMARY KEY AUTO_INCREMENT, 
name VARCHAR(50) NOT NULL,
email VARCHAR(100) NOT NULL UNIQUE,
password VARCHAR(50) NOT NULL,
gender VARCHAR(50) NOT NULL,
hobbies VARCHAR(50) NOT NULL,
country VARCHAR(50) NOT NULL,
register_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
is_active BIT DEFAULT (1)
)";

if($conn->query($sql_createTable)===TRUE)
    {
        echo "Table Create....";
    }
else
    {
        die("Table not created..");
    }
    ?>