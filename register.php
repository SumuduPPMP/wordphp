<?php include "db_connection.php"; ?>
<?php 
    //form submission
    // $_POST is a supper global variable. it is a associative array.
      $username = $_POST['name'];
      $password = $_POST['password'];

      if($username && $password){
        $query = "INSERT INTO users(username,password) ";
        $query .= "VALUES('$username','$password')"; 

        $result = mysqli_query($connection, $query);
        if(!$result){ 
            die('Query failed'. mysqli_error($connection));
        }else{
            //echo $username ;
            $getallquery = "SELECT * FROM users ";
            $returnResult = mysqli_query($connection, $getallquery);
            if(!$result){ 
                die('Query failed'. mysqli_error($connection));
            }             
        }
      }
      
    ?>

<?php while($data = $returnResult->fetch_assoc()):?>
    <tr>
        <td><?php echo $data['id']; ?></td>
        <td><?php echo $data['username']; ?></td>
        <td><?php echo $data['password']; ?></td>
    </tr>
<?php endwhile; ?>
