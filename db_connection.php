<?php 

    $server = "localhost";
    $username = "root";
    $password = "";
    $dbname = "loginapp";

    $connection = mysqli_connect($server,$username,$password,$dbname);
    if(!$connection){
        die("not connected");
      }
   
?>