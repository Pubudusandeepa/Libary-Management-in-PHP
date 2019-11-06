<?php 
include "connection.php";
include "navbar.php";
?>

<!DOCTYPE html>
<html><head>
    <title>BOOKS
    </title>
    <style type="text/css">
        .srch{
            
            padding-left: 1000px;
        }
        h2{
            font-family: fantasy;
            font-size: 50px;
        }
    
    </style>
    </head>
    <body>
        <!-----------------Search bar------------>
        <div class="srch">
        <form class="navbar-form" method="post" name="from1">
            <input class="form-control" type="text" name="search" placeholder="Search Books" required="">
            <button style="background-color:yellow" type="submit" name="submit" class="btn btn-default">
                <span class="glyphicon glyphicon-search"></span>
            
        </form>
        </div>
        
        <form style="background-color:#d1e7f3">
        <h2>List Of Student</h2>
        <?php
           
            if(isset($_POST['submit'])){
                
                $q=mysqli_query($db,"SELECT * FROM student where username like '%$_POST[search]%'");
                
                if(mysqli_num_rows($q)==0){
                    
                    echo "Sorry! No Any Student found Try again";
                }
                
                else{
                    
                        echo "<table class= 'table table-bordered table-hover'>";
                        echo "<tr style='background-color:#f7e313'>";
        
                   echo "<th>";  echo"First-Name"; echo "</th>";
                   echo "<th>";  echo"Last-Name"; echo "</th>";
                   echo "<th>";  echo"User-Name"; echo "</th>";
                   echo "<th>";  echo"Roll-No"; echo "</th>";         
                   echo "<th>";  echo"Emil"; echo "</th>";
                   echo "<th>";  echo"Contact"; echo "</th>";
                    
                     echo "</tr>";
        
        while($row=mysqli_fetch_assoc($q))
          {
            echo "<tr>";
            echo "<td>"; echo $row['first']; echo "</td>";
            echo "<td>"; echo $row['last']; echo "</td>";
            echo "<td>"; echo $row['username']; echo "</td>";
            echo "<td>"; echo $row['roll']; echo "</td>";
            echo "<td>"; echo $row['email']; echo "</td>";
            echo "<td>"; echo $row['contact']; echo "</td>";
            
        
            echo "</tr>";   
        }
        
        echo "</table>";
                    
                }
                
              
            }
            
         else{
             
         $res= mysqli_query($db,"SELECT first,last,username,roll,email,contact FROM `student` ORDER BY `student`.`first` ASC;");
        echo "<table class= 'table table-bordered table-hover'>";
        echo "<tr style='background-color:#f7e313'>";
        
        echo "<th>";  echo"First-Name"; echo "</th>";
        echo "<th>";  echo"Last-Name"; echo "</th>";
        echo "<th>";  echo"User-Name"; echo "</th>";
          echo "<th>";  echo"Roll-No"; echo "</th>";         
        echo "<th>";  echo"Emil"; echo "</th>";
        echo "<th>";  echo"Contact"; echo "</th>";
       
        echo "</tr>";
        
        while($row=mysqli_fetch_assoc($res))
        {
            echo "<tr>";
            echo "<td>"; echo $row['first']; echo "</td>";
            echo "<td>"; echo $row['last']; echo "</td>";
            echo "<td>"; echo $row['username']; echo "</td>";
            echo "<td>"; echo $row['roll']; echo "</td>";
            echo "<td>"; echo $row['email']; echo "</td>";
            echo "<td>"; echo $row['contact']; echo "</td>";
          
            
            
            
            
            
            echo "</tr>";
            
            
        }
        
        echo "</table>";
                    
                }
            
            
            
     
        ?>
            </form>
    </body>
</html>