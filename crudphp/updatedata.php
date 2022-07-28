<?php

// Update data in database

 include "connection.php";
 $id=$_POST['id'];
 $name=$_POST['name'];
 $rollno=$_POST['rollno'];
 $password=$_POST['password'];
 

 $sql="UPDATE scrud SET name='{$name}' ,rollno='{$rollno}',password='{$password}' WHERE id='{$id}'";

 $result=mysqli_query($connection, $sql) or die("Query not successful$");

 header("location: crud.php");



?>