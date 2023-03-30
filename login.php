<?php include "db_connection.php"; ?>
<?php 
  echo "<h2>This is external form submission form</h2>";
    //form submission
    // $_POST is a supper global variable. it is a associative array.
    if(isset($_POST['submit'])){ // check click submit
      $username = $_POST['userName'];
      $password = $_POST['password'];

      echo "<h3> Form submission result</h3>";
      if($username && $password){
        echo "your user name is ". $username ."<br>";
        echo "your password is ". $password ."<br>";
      }
      
    }
    
    ?>