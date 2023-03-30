<?php include "db_connection.php"; ?>
<?php 
  $query = "SELECT * FROM users ";

  $result = mysqli_query($connection, $query);
  if(!$result){ 
      die('Query failed'. mysqli_error($connection));
  }else{
    
  }
    
?>
<?php while($data = $result->fetch_assoc()):?>
    <tr>
        <td><?php echo $data['id']; ?></td>
        <td><?php echo $data['username']; ?></td>
        <td><?php echo $data['password']; ?></td>
    </tr>
<?php endwhile; ?>