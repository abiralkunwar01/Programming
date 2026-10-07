<?php
include("databaseConnection.php");
if(isset($_POST["btn_signup"]))
    {
        $getFullName=$_POST["txtFullName"];
        $getEmail=$_POST["txtEmail"];
        $getPassword=$_POST["txtPassword"];
        $getGender=$_POST["rbGender"];
        $getCountry=$_POST["cbCountry"];

        $getHobbies=implode(",",$_POST["hobbies"]);
        $sql_insertdata="INSERT INTO tbl_students
        (name,email, password, gender,hobbies,country)
        VALUES
        ('$getFullName','$getEmail','$getPassword', '$getGender','$getHobbies','$getCountry')";
        if($conn->query($sql_insertdata)===TRUE)
            {
                echo "Data inserted successfully";

            }
            else
                {
                    die("Data not insesrted");
                }


    }
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Signup form</title>
    </head>
    <body>
        <form method="POST">
            <label>FullName:</label>
            <input type="text" name= "txtFullName">
            <br></br>
            <label>Email:</label>
            <input type="Email" name="txtEmail">
            <br></br>
            <label>Password:</label>
            <input type="Password" name="txtPassword">
            <br></br>
            <label>Gender:</label>
            <input type="radio" name="rbGender" value="Male">Male
            <input type="radio" name="rbGender" value="female">Female
            <input type="radio" name="rbGender" value="others">Other
            <br></br>
            <label>Hobbies:</label>
            <input type="checkbox" name="hobbies[]" value="Reading">Reading
            <input type="checkbox" name="hobbies[]" value="Writing">Writing
            <input type="checkbox" name="hobbies[]" value="Gaming">Gaming
            <input type="checkbox" name="hobbies[]" value="cooking">Cooking
            <input type="checkbox" name="hobbies[]" value="Cycling">Cycling
            <input type="checkbox" name="hobbies[]" value="working">Working
            <input type="checkbox" name="hobbies[]" value="Sporting">Sporting
                  <br></br>
                  <label>Country:</label>
                  <select name="cbCountry">
                    <option >---select country</option>
                    <option value="Nepal">Nepal</option>
                    <option value="India">India</option>
                    <option value="Pakistan">Pakistan</option>
                    <option value="UK">UK</option>
                    <option value="USA">USA</option>
</select>
<br></br>
<input type="submit" name="btn_signup" value="sign up">
</form>       
    </body>
    </html>