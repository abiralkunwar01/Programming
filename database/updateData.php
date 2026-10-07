<?php
include("databaseConnection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>updata Data</title>
</head>
<body>
    <h1> updata Data Here</h1>
    <hr/>
    <form method="POST">
        <label>Search By ID : </label>
        <input type="text"
        name="txtSearchById"
        placeholder="Search By Id..."
        value="<?php echo isset($_POST["txtBySearchById"]); ?>">
       <label>Id:</label>
                    <input type="text"
        name="txtId"
        value="<?php echo $rows["Id"]; ?>">
        <br/><br/>
        <input type="submit" name="btnSearchData" value="Search">
        <br/><br/><hr/>
</form>

<br/><br/>
</body>
</html>
<?php
if(isset($_POST["btnSearchData"]))
    {
        $getId=$_POST["txtSearchById"];
        $sql_SearchById="SELECT * FROM tbl_students WHERE id =$getId";

        $result=$conn->query($sql_SearchById);
        if($result->num_rows>0)
            {
                $rows=$result->fetch_assoc();
                
                ?>
                <form method="POST">
                   
        <br/><br/>
        <label>Name:</label>
                    <input type="text"
        name="txtFullName"
        value="<?php echo $rows["name"]; ?>">

        <label>Email:</label>
                    <input type="Email"
        name="txtemail"
        value="<?php echo $rows["email"]; ?>"> 
        <br/><br/>
        <label>Password:</label>
                    <input type="Password"
        name="txtPassword"
        value="<?php echo $rows["Password"]; ?>"> 
        <br/><br/>
        <label>Gender:</label>
            <input type="radio" name="rbGender" value="Male"
        <?php if ($rows['gender']=='Male') echo "checked" ?> Male> 
        <br/><br/>
        <input type="radio" name="rbGender" value="Female"
        <?php if ($rows['gender']=='Female') echo "checked" ?> Female> 
        <br/><br/>
            <input type="radio" name="rbGender" value="Other"
        <?php if ($rows['gender']=='Other') echo "checked" ?> Other> 
        <br/><br/>
            
            <br/></br>
            <label>Hobbies:</label>
            <input type="checkbox" name="hobbies[]" value="Reading">Reading
     <?php
     if(in_array("Reading", explode(",",$rows["hobbies"])))
            {
                echo "checked";
            } ?>
            <input type="checkbox" name="hobbies[]" value="Writing">Writing
            <?php if(in_array("Writing", explode(",",$rows["hobbies"])))
            {
                echo "checked";
            } ?>
            <input type="checkbox" name="hobbies[]" value="Gaming">Gaming
             <?php if(in_array("Gaming", explode(",",$rows["hobbies"])))
            {
                echo "checked";
            } ?>
            <input type="checkbox" name="hobbies[]" value="cooking">Cooking
             <?php if(in_array("cooking", explode(",",$rows["hobbies"])))
            {
                echo "checked";
            } ?>
            <input type="checkbox" name="hobbies[]" value="Cycling">Cycling
             <?php if(in_array("cycling", explode(",",$rows["hobbies"])))
            {
                echo "checked";
            } ?>

            <input type="checkbox" name="hobbies[]" value="working">Working
            <?php if(in_array("working", explode(",",$rows["hobbies"])))
            {
                echo "checked";
            } ?>
            <input type="checkbox" name="hobbies[]" value="Sporting">Sporting
            <?php if(in_array("Sporting", explode(",",$rows["hobbies"])))
            {
                echo "checked";
            } ?>
                  <br></br>
                  <label>Country:</label>
                  <select name="cbCountry">
                    <option >---select country</option>
                   
                    <option value="Nepal"  <?php if($rows['country']=='Nepal') echo "selected" ?>>Nepal</option>
                    <option value="India"  <?php if($rows['country']=='India') echo "selected" ?>>India</option>
                    <option value="Pakistan"  <?php if($rows['country']=='pakistan') echo "selected" ?>>Pakistan</option>
                    <option value="UK"  <?php if($rows['country']=='UK') echo "selected" ?>>UK</option>
                    <option value="USA"  <?php if($rows['country']=='USA') echo "selected" ?>>USA</option>
        </select>
        <br/></br>
        
        <input type="submit" name="btnUpdateData" value="Updata Data">
</form>
<?php
            }
            else
                {
                    echo "No record Found..";
            }
    }
    ?>

<?php
if(isset($_POST["btnUpdateDate"]))
    {
        $getId=$_POST["txtId"];
        $updataFullName=$_POST["txtFullName"];
        $updataEmail=$_POST["txtemail"];
        $updataPassword=$_POST["txtpassword"];
        $updataGender=$_POST["rbGender"];
        $updataCountry=$_POST["cbCountry"];

        $updateHobbies=implode(",",$_POST["hobbies"]);
        $sql_updateData="UPDATE tbl_students SET
        name='$updataFullName', email='$updataEmail', password='$updataPassword',gender='$updataGender',hobbies='$updateHobbies',country='$updataCountry'
        WHERE id=$getId
        ";
        if($conn->query($sql_updateData)===TRUE)
            {
                echo "data Update Successfully...";
            }
            else{
            echo "Data Not Update...";
            }

    }    

            
    
    ?>