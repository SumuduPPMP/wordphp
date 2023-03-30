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
            echo $username ;
        }
      }
      
 //create an array
        // $usersarray = array();
        // while($row =mysqli_fetch_assoc($result)){
        //      $usersarray[] = $row;
        // }
 
        // echo json_encode($mysqli_fetch_assoc($usersarray));
        //$data =mysqli_fetch_assoc($result);
    ?>
