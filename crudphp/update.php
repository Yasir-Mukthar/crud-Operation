<!DOCTYPE html>

<head>
    
    <title>Update</title>
    <link rel="stylesheet" href="crud.css">

</head>
<body>

<?php 
    include "connection.php"; 

    $id=$_POST['id'];
    $name=$_POST['name'];
    $rollno=$_POST['rollno'];
    $password=$_POST['password'];


?>              
    <h1 class="text-center">Update Data</h1>


   
    <form action='updatedata.php' method='post' class="form">

        
            <input type="hidden" name='id' value='<?php echo $id; ?>'>
            <input type="text" class="form-control" name='name' required placeholder="Enter Your Name" value='<?php echo $name; ?>'>
        

        
            <input type="text" class="form-control" name='rollno' required placeholder="Enter Your Roll No" value='<?php echo $rollno; ?>'> 
        

        
            <input type="text" class="form-control" name='password' required placeholder="Enter Your Password" value='<?php echo $password; ?>'>
            <button type="submit" class="btn-1" name="submit" >Update</button>
    </form>



    
</body>
</html>