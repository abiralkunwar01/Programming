<?php
include("databaseConnection.php");

if(isset($_POST["btnDeleteData"]))
{
    $getId=$_POST["txtId"];

    $sql_deleteData="DELETE FROM tbl_students WHERE id=$getId";

    if($conn->query($sql_deleteData)===TRUE)
    {
        echo "Data Deleted Successfully...";
    }
    else
    {
        echo "Data Not Deleted...";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Data</title>
</head>
<body>

<form method="POST">

    <label>Enter Student ID:</label>
    <input type="text" name="txtId">

    <br><br>

    <input type="submit" name="btnDeleteData" value="Delete">

</form>

</body>
</html>