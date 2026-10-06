<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student details</title>
</head>
<body>
    <form method="POST">
    <h1>Students details</h1>
    <br></br>
    <input type="submit" name="btnShowAllData" value="Show all">
     <input type="submit" name="btnUpdataData" value="Update Data">

</form>
</body>
</html>

<?php
include("databaseConnection.php");
if(isset($_POST["btnShowAllData"]))
{
    $sql_selectAllData="SELECT *FROM tbl_students";
    $result=$conn->query($sql_selectAllData);

    if($result->num_rows>0)
        {
            echo "<br/><br/>";
            echo "Record Found";
             echo "<br/><br/>";
            ?>
  <table border="1">
        <tr>
            <td> student id</td>
             <td> student Name</td>
              <td> Email</td>
               <td> Gender</td>
                <td>hobbies</td>
                 <td>country</td>
                 <td>joining data</td>
                 <td> Status</td>
        </tr>
        <?php

        while($rows=$result->fetch_assoc())
            {
                ?>
                <tr>
                    <td><?php echo $rows["id"]; ?> </td>
                    <td><?php echo $rows["name"]; ?> </td>
                    <td><?php echo $rows["email"]; ?> </td>
                    <td><?php echo $rows["gender"]; ?> </td>
                    <td><?php echo $rows["hobbies"]; ?> </td>
                    <td><?php echo $rows["country"]; ?> </td>
                    <td><?php echo $rows["register_at"]; ?> </td>
                    <td><?php echo $rows["is_active"]; ?> </td>
</tr>
                   
                   <?php
            }
            ?>
            </table>
            <?php



        }
        else
            {
                echo "No record Found";
            }
}
?>