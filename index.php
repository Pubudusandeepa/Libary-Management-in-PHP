<?php
session_start();

?>



<!DOCTYPE html>
<html>

<head>
    <titel>

    </titel>
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <style type="text/css">
        nav {
            float: right;
            word-spacing: 30px;
            padding: 20px;
            margin-top: -85px;
        }

        nav li {
            display: inline-block;
            line-height: 50px;

        }

    </style>
</head>

<body>
    <div class="wrapper">
        <header>
            <div id="logo"><img src="images/8.jpg"></div>
            <div>
                <h1 style="color: white;margin-top:-5px; ">ONLINE LIBARARY MANAGEMENT SYSTEM</h1>
            </div>
            <?php 
            if(isset($_SESSION['login_user']))
            {
                ?>
              <nav>
                <ul>
                    <li><a href="">HOME</a></li>
                    <li><a href="books.php">BOOKS</a></li>
                    <li><a href="logout.php">LOGOUT</a></li>
                  
                    <li><a href="">FEEDBACK</a></li>
                </ul>
            </nav>
                
            <?php    
            }
            else{
                ?>
                <nav>
                <ul>
                    <li><a href="">HOME</a></li>
                    <li><a href="index.php">BOOKS</a></li>
                    <li><a href="admin_login.php">LOGIN</a></li>
                    
                    <li><a href="">FEEDBACK</a></li>
                </ul>
            </nav>
            <?php
            }
            

            ?>
 

        </header>
        <section class="img">
                 

               
                <br><br><br>
                <div class="box">
                    <br><br>
                    <h1 style="text-align: center; font-size:35px;">Welcome to Library</h1><br><br>
                    <h1 style="text-align: center; font-size: 25px;">Opens at: 09.00</h1><br>
                    <h1 style="text-align: center; font-size: 25px;">Close at: 15.00</h1><br>

                </div>
     
        </section>
        <footer>
            <br><br>
            <p> Email:&nbsp; Online.Library@gmail.com<br><br>
                Mobile:&nbsp; 0110000000
            </p>
        </footer>
    </div>
    <?php
    include "footer.php";
        
    
    ?>

</body>

</html>
