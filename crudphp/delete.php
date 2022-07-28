<?php
    include "connection.php";
    $id=$_POST['id'];

    if(isset($_POST['submit'])){

        
        $sql="DELETE FROM scrud WHERE id={$id}";

        $result=mysqli_query($connection, $sql) or die("Query not successful");

        header("location: crud.php");

    }

?>