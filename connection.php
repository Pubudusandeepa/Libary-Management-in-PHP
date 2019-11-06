<?php
$db= mysqli_connect("localhost","root","","library");

if(!$db){
    die("Connection faild:" .mysqli_connection_error());
}


?>