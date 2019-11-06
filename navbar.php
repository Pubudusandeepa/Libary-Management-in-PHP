<?php  
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <title>Student Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
   
</head>


<body>
          <nav class="navbar navbar-inverse">
           <div>
          <div>
       <a class="navbar-brand active"> ONLINE LIBARARY MANAGEMENT SYSTEM</a>
       </div>
            <ul class="nav navbar-nav">
                <li><a href="index.php">HOME</a></li>
                <li><a href="books.php">BOOKS</a></li>
                <li><a href="feedback.php">FEEDBACK</a></li>
                <li> </li>
                <li></li>
                <li></li>
                  </ul>
               <?php
               if(isset($_SESSION['login_user']))
                   
               {?>  
                <ul class="nav navbar-nav">
                 <li><a href="student.php">Student-Infromation</a></li>
               </ul>
              <ul class="nav navbar-nav navbar-right">
                     <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"> LOGOUT</span></a></li> 
                  
                   <div style="color:white ">
               <?php
                     
                        echo "<img class='img-circle profile_img'
                        height= 30 width=30 margin-left=-250px src='images/".$_SESSION['pic']." '>";
                   echo $_SESSION['login_user'];
                   
                   ?>
                     </div> 
               </ul>
                   <?php  
              
               }
               else{
                   ?>
                      <ul class="nav navbar-nav navbar-right">
                <li><a href="student_login.php"><span class="glyphicon glyphicon-log-in"> LOGIN</span></a></li>
                 <li><a href="student_login.php"><span class="glyphicon glyphicon-log-out"> LOGOUT</span></a></li> 
                 <li><a href="registation.php"><span class="glyphicon glyphicon-user"> SIGN UP</span></a></li>
                         
            
              
            </ul>
               <?php
               }
               ?>
             
            </div>
        </nav>

</body>

</html>
