<?php 
include "navbar.php";
?>
<?PHP
include "connection.php";
?>
<!DOCTYPE html>
<html>

<head>
    <title>Admin Registration</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <style type="text/css">
        section{
            margin-top: -30px;
        }  
    </style>
</head>


<body>


    <section>
        <div class="reg_img">
            <br><br><br>
            <div class="box2">
                <h1 style="text-align: center; font-size: 35px;">Library Management System</h1><br>
                <h1 style="text-align: center; font-size: 25px;">User Registration Form</h1><br>
                <form name="registration" action="" method="post">
                    <div class="login">
                         <input class="form-control" type="text" name="id" placeholder="Id" required=""><br>
                        <input class="form-control" type="text" name="firstName" placeholder="FirstName" required=""><br>
                        <input class="form-control"  type="text" name="lastName" placeholder="LastName" required=""><br>
                        <input class="form-control" type="text" name="userName" placeholder="Username" required=""><br>
                        <input class="form-control" type="password" name="password" placeholder="Password" required=""><br>
                        <input class="form-control" type="text" name="email" placeholder="Email" required=""><br>
                         <input class="form-control" type="text" name="contact" placeholder="Phone" required=""><br>
                        <input class="btn btn-default" type="submit" name="submit" value="Sign Up" style="color: black;
                       width: 70px; height: 30px;"><br></div>
                </form>

            </div>
        </div>

    </section>
    </body>
</html>

    <?php 
     if(isset($_POST['submit'])){
         
         $count=0;
         $sql="SELECT userName FROM admin ";
         $res=mysqli_query($db,$sql);
         while($row=mysqli_fetch_assoc($res)){
             if($row['userName']==$_POST['userName'])
             {
                 $count=$count+1;
                 
             }
             
         }
         if($count==0)
         {
             mysqli_query($db,"INSERT INTO `admin` VALUES ('$_POST[id]','$_POST[firstName]', '$_POST[lastName]', '$_POST[userName]', '$_POST[password]',  '$_POST[email]', '$_POST[contact]','pl.jpg');");
         
         
    ?>
     <script type="text/javascript">
     alert("Registation is Successful");

  </script>

    <?php
     }
         else{
             ?>
      <script type="text/javascript">
      alert("The username is already exist.");

  </script>
   <?php
             
     }
     }
    
    ?>
 
 



    
    
    
    
    
    
    
    
