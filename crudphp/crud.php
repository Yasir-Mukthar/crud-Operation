<!DOCTYPE html>
<html lang="en">
<head>
    <title>CRUD Operation</title>
    

<link rel="stylesheet" href="crud.css">
</head>
<body>
                <?php         include "connection.php";  ?>
                         

                <h1>CRUD OPERATION</h1>
                <h3>(Developed-By Yasir)</h3>

                <div class="form">
                    <form action='insert.php' method='post'>

                        <input type="text" class="form-control" name='name' required placeholder="Enter Your Name">  
                        <input type="text" class="form-control" name='rollno' required placeholder="Enter Your Roll No">
                        <input type="password" class="form-control" name='password' required placeholder="Enter Your Password">
                        <button type="submit" name="submit"  class="btn-1">Submit</button>
                    </form>
                </div>

            

    <?php
        // Read data from database
        

        $sql1= "SELECT `id`, `name`,`rollno`,`password` FROM `scrud` WHERE 1";
        $result1=mysqli_query($connection, $sql1) or die("Query not successful");

        if(mysqli_num_rows($result1) > 0) {

      
    ?>
             <br><br><br>
            <table>
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Roll No</th>
                            <th>Password</th>
                            <th>Delete</th>
                            <th>Update</th>
                        </tr>
                        
                    </thead> 
                    <tbody>
                        <?php while($row=mysqli_fetch_assoc($result1)){ ?>

                            <tr >
                                <td ><?php echo $row['id']?></td>
                                <td><?php echo $row['name']?></td>
                                <td><?php echo $row['rollno']?></td>
                                <td><?php echo $row['password']?></td>

                                
                                
                                <form action="delete.php" method="post">
                                    <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
                                    <td><button type='submit' name="submit" class="btn btn-1 btn-3" onclick="return confirm('Are you Sure, you want to Delete?');">Delete</button></td>
                                </form>

                                <form action="update.php" method="post">
                                    <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
                                    <input type="hidden" name="name" value="<?php echo $row['name'] ?>">
                                    <input type="hidden" name="rollno" value="<?php echo $row['rollno'] ?>">
                                    <input type="hidden" name="password" value="<?php echo $row['password'] ?>">
                                    <td><button type='submit' name="submit" class="btn btn-1 btn-2">Update</button></td>
                                </form>
                                
                            </tr>
                    </tbody>
                        <?php } ?>
            </table>
                  

       <?php } else{      ?>



          <table>
           <thead>
               <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Roll No</th>
                            <th>Password</th>
                            <th>Delete</th>
                            <th>Update</th>
               </tr>
               
           </thead> 

   </table>
   <?php echo '<br><h1> No record found</h1>';
                    }  
   
   $connection->close();
                    
        ?>
    
</body>
</html>

