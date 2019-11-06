<?php 
include "navbar.php";
include "connection.php";
?>
<!DOCTYPE html>
<html>
<head>
<title>Feedback</title>  
    <link rel="stylesheet" type="text/css" href="style.css">
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
     
       
        
        body{
            
            background-image: url("images/mm.jpg"); 
        }
        
        .wrapper{
      
            width: 900px;
            height: 540px;
            margin: -20px auto;
            background-color: black;
            opacity: .6;
            color: white;
          
           
        }
        
        h4{
                  margin-top: -20px;
        }
        
        .form-control{
            margin-top: 10px;
            height: 70px;
            width: 60%;
        }
      
        </style>
</head>
<body>
  
       
    <div class="wrapper"><br><br>
    <h4>If You Have any Suggesions or Question Pleace Comment below</h4>
        <form style="" action="" method="post" >
            <input class="form-control" type="text" name="comment" placeholder="Write Something"><br><br>
            <input class="btn btn-default" type="submit" name="submit" value="comment" style="width:100px; height:35px;">
                   
            
        </form>
  
       
    
   <div>
    <?php
       
       if(isset($_POST['submit'])){
             $sql="INSERT INTO `comments` VALUES('','$_POST[comment]');";
             if( mysqli_query($db,$sql))
             {
                 $q="SELECT * FROM `comments` ORDER BY `comments`.`id` DESC";
                 $res=mysqli_query($db,$q);
                 
                 echo "<table class='table table-bordered'>";
                 while($row=mysqli_fetch_assoc($res)){
                     
                     echo "<tr>";
                     echo "<td>"; echo $row['comment']; echo "</td>";
                     echo "</tr>";
                     
                 }
             }
       }
   
    
    ?>
    
   </div>
     </div>

    
</body>
</html>