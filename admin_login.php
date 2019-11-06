<?php 
include "connection.php";
 include "navbar.php";


?>
<!DOCTYPE html>
<html>

<head>
    <title>Admin Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">

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
   
   <!--   
        <nav class="navbar navbar-inverse">
           <div>
          <div>
       <a class="navbar-brand active"> ONLINE LIBARARY MANAGEMENT SYSTEM</a>
       </div>
            <ul class="nav navbar-nav">
                <li><a href="index.php">HOME</a></li>
                <li><a href="">BOOKS</a></li>
                <li><a href="feedback.php">FEEDBACK</a></li>
                  </ul>
                <ul class="nav navbar-nav navbar-right">
                <li><a href="student_login.php"><span class="glyphicon glyphicon-log-in"> LOGIN</span></a></li>
                 <li><a href="student_login.php"><span class="glyphicon glyphicon-log-out"> LOGOUT</span></a></li> 
                 <li><a href="registation.php"><span class="glyphicon glyphicon-user"> SIGN UP</span></a></li>
                <li><a href="student_login.php">STUDENT-LOGIN</a></li>
                <li><a href="">ADMIN-LOGIN</a></li>
              
            </ul>
            </div>
        </nav>
-->
  
  
    <section>
        <div class="reg_img">
            <br><br><br>
            <div class="box1">
                <h1 style="text-align: center; font-size: 35px;">Library Management System</h1><br><br>
                <h1 style="text-align: center; font-size: 25px;">User Login Form</h1><br><br>
                <form name="registration" action="" method="post">
                    <div class="login">
                          <input class="form-control" type="text" name="id" placeholder="AdminId" required=""><br>
                        <input class="form-control" type="text" name="username" placeholder="AdminName" required=""><br>
                        <input class="form-control"  type="text" name="password" placeholder="Password" required=""><br>
                      
                    <input class="btn btn-default" type="submit" name="submit" value="Login" style="color: black;
                       width: 70px; height: 30px;"><br></div>
                </form>
                <p >
                    <br><br><br>
                        <a style="color: white;" href="">Forgot Password?</a>&nbsp &nbsp &nbsp &nbsp &nbsp
                    New to this Website?<a style="color: white;" href="registation.php">Sign Up</a>
                </p>

            </div>
        </div>

    </section>
    <?php
    if(isset($_POST['submit']))
    {    $count=0;
        $res=mysqli_query($db,"SELECT * FROM admin WHERE  id ='$_POST[id]' && username ='$_POST[username]'  && password = '$_POST[password]';");
      $row = mysqli_fetch_assoc($res);
        $count =mysqli_num_rows($res);
     
       
     
         if($count==0){
             ?>
          <!--  <script type=text/javascript>
                alert("The username and password doesn't match ");
    
           </script>
-->
          <div class="alert alert-danger" style="width: 600px; margin-top:150px; margin-left:350px;">
              <strong>The username and password doesn't match</strong>
          </div>
             <?php
             
         }
     
     else{
         $_SESSION['login_user'] = $_POST['username'];
         $_SESSION['pic'] = $row['pic'];
         ?>
    <script type=text/javascript>
    window.location="index.php";
    
    </script>
    <?php
         
        }
    }
    
   ?>


</body>

</html>
