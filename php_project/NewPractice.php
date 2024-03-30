<?php
//include("connection1.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylessheet" href="C:\xampp\htdocs\php_project\css\style1.css">
</head>
<body>
     <div class="box">
        <div class="menu" style="background-color: blue; width=60%;
        min-height=100px; padding=30px; ">

<a href="" style="color: black;
        padding:10px;
         font-family: Arial, Helvetica, sans-serif; 
         text-decoration: none;">Register Form</a> 

        <a href="" style="color: white;
         padding:10px;
          font-family: Arial, Helvetica, sans-serif;
          text-decoration: none;">Display Data</a>
          </div>

        <div class="heading">
            <h1>Registration Page</h1>
          </div>

          <div class="data">
            <from action="NewPractice.php" method ="post">
                <table>

                <tr>
                    <td> <label for="fname">First Name</label></td>
                    <td><input type="text" name="fname" id="fname" autocomplete="off" required></td>
                </tr> 
                    <tr>
                    <td> <label for="lname">Last Name</label></td>
                    <td><input type="text" name="lname" id="lname" autocomplete="off" required></td>
                </tr> 
                    
                <tr>
                    <td> <label for="mobno"> mobail no</label></td>
                    <td><input type="text" name="mobno" id="mobno" autocomplete="off" required></td>
                </tr> 
                <tr>
                    <td> <label for="email"> Email</label></td>
                    <td><input type="text" name="email" id="email" autocomplete="off" required></td>
                </tr> 

                <tr>
                    <td> <label for="pass"> Password</label></td>
                    <td><input type="password" name="pass" id="pass" autocomplete="off" required></td>
                </tr> 
                <tr>
                    <td> <label for="cpass"> Confirm Password</label></td>
                    <td><input type="text" name="cpass" id="cpass" autocomplete="off" required></td>
                </tr> 
                <td>
                    <input type="submit" value="register" name="register">
                </td>

                </table>
          </div>
            
     </div>
</body>
</html>

<?php

if ($_POST['register'])
{
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $mobno = $_POST['mobno'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $cpass = $_POST['cpass'];

    $query = "insert into emp('First Name','Last Name','mobail no','Email','Password','Confirm Password')
              values('$fname','$lname','$mobno','$email','$pass','$cpass')";
         
              $data = mysqli_query($conn.$query);

    if($data)
    {
    echo"<script> alert('Data inserted')</script>";
    }  
    else
    {
    echo "<script> alert('Data not inserted')</script>".mysqli_connect_error();
    }
}
?> 
