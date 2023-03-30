<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Word PHP App</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <!-- Google Font -->
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins&display=swap"
      rel="stylesheet"
    />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  </head>
  <body>

    <?php 
    /*$title = "this is sumudus first php for word php";
    echo ($title);*/

   // $title = "this is sumudu first php for word php";

    // $title = "this is sumudus first php for word php";
    // $number = 100;
    // $h3Number = "<h3 style='display:inline;color:red;'>number</h3>";

    // $sampleArray = array(1,3,44,'55','<h4>hello</h4>');

    // $associativeArray = array('fistName'=>'Sumudu','lastName'=>'Siri');
    // echo ($title);
    // echo $number;
    // echo $sampleArray[4];
    // print_r($sampleArray);// to see whole structure
    // print_r($associativeArray);// to see whole structure

    // // function examples
    // echo '<br>';
    // callFunction();
    // echo '<br>';
    // calculator(24,6);


    // function callFunction(){
    //   echo " this is my first php function";
    // }

    // function calculator($num1, $num2){
    //   echo $num1+$num2;
    // }

    // echo '<br>';
    // // global variable
    // $x = 10;

    // function convert(){
    //   global $x; 
    //   $x = 20;
    // }

    // echo $x;
    // convert();
    // echo '<br>';
    // echo $x;


    // echo '<br>';
    // //constant
    // // we can't change constant values
    // define("fixedValue",300);
    // echo fixedValue;
    // echo '<br>';
    // const constant = 450;
    // echo constant."<br>";

    // // array function
    // $string="uggoda Sumudu";
    // $array = [4,66,'name1',$string];

    // $isFound = in_array($string, $array);

    // if($isFound){
    //   echo 'you did it';
    // }else{
    //   echo "you couldn't do it";
    // }
    ?> 

    <!-- <p><?php echo $title;?></p>
    <p style='display:inline'>number is : <?php echo $h3Number. " ". $number;?></p>
    <p><?php echo $associativeArray['fistName']." ".$associativeArray['lastName'];?></p> -->
    
    <h1 class="text-center my-3">Testing php, Ajax, JQuery</h1>
    <div class="col-8 mx-auto">
      <div class="row">
      <div class="col-6 py-3">
        <div class="p-3" style="border:1px solid #a7a7a7; border-radius:10px">
          <form action="login.php" method="post">
            <h2 class="text-muted text-center"> Login Form</h2>
            <input class="form-control" type="text" name="userName" placeholder="User Name"><br>
            <input class="form-control"  type="password" name="password" placeholder="Password"><br>
            <input class="btn btn-block btn-primary"  type="submit" name ="submit" value="Login">
          </form>
        </div>
      </div>
      <div class="col-6 py-3">
        <div class="p-3" style="border:1px solid #a7a7a7; border-radius:10px">
          <form action="register.php" method="post" id="registerForm">
            <h2 class="text-muted text-center"> Registration Form</h2>
            <input class="form-control" type="text" name="userName" id="name" placeholder="User Name"><br>
            <input class="form-control"  type="password" name="password" id="password" placeholder="Password"><br>
            <input class="btn btn-block btn-primary"  type="button" name ="submit" value="Save" id="registerBtn">
          </form>
        </div>
      </div>
      </div>
      <div class="row px-3">
        <div class="col p-3" style="border:1px solid #a7a7a7; border-radius:10px">
          <h3 class="text-muted text-center"> User data</h3>

          <table class="table" id="test_table">
            <tr>
              <th>ID</th>
              <th>Name</th>
              <th>Password</th>
            </tr>
            <tbody id="user_data">
            </tbody>
          </table>
        </div>
      </div>
    </div>

    <script>
      $(document).ready(function () {
        $.ajax({
          type:"GET",
          url:"fetch_data.php",
          dataType:"html",
          success:function(data){
            $('#user_data').html(data);
          }

        });

        $("#registerBtn").click(function(){     

            var u_name = $("#name").val();
            var u_password = $("#password").val();
          $.ajax({
           type: "POST",
           url: 'register.php',
           data:{"name":u_name,"password":u_password},
           success: function (data) {
           // $('#user_data').append(data);
           console.log(data);
            }
           
          });
        });

      });
    </script>
  </body>
</html>