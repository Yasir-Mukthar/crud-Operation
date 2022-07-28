<?php

//Insert data into database
    include "connection.php";
    $name=$_POST['name'];
    $rollno=$_POST['rollno'];
    $password=$_POST['password'];
    
    
    if(isset($_POST['submit'])){
        
        $sqli="INSERT INTO `scrud`(`name`,`rollno`,`password`) VALUES ('{$name}','{$rollno}','{$password}')";
        $result=mysqli_query($connection, $sqli);

    }

    header("location: crud.php");

?>