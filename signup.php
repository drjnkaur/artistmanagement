<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Website</title>
    <link rel="stylesheet" href="./style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    
    <link rel="icon" href="./favicon.ico" type="image/x-icon">
  </head>
  <body>
    <div class="container lol">
  <!-- Content here -->
    <p class="h1 text-center mt-5 mb-5">Artist Management</p>
    <form class=" w-50 mx-auto mt-5"  method="POST" action="#">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label ">Email address</label>
    <input type="email" class="form-control " id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
  </div>
  
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input name="password" type="password" class="form-control  text-left" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
    <input name="cpassword" type="password" class="form-control   text-left" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label ">First Name</label>
    <input name="fname" type="text" class="form-control " id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label ">Last Name</label>
    <input name="lname" type="text" class="form-control " id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
    
 
  <div class="mb-3 form-check">
    <input name="checkme" type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <div class="text-center mt-5">
    <button name="signup" type="submit" class="btn btn-primary">sign up</button>
  </div>
</form>
    </div>
	<script src="index.js"></script>
  </body>
</html>
<?php
  include("connection.php");
      if(isset($_POST['signup'])){  

      $email = $_POST['email'];
      $password =  $_POST['password'];
      $cpassword =  $_POST['cpassword'];
      $fname =  $_POST['fname'];
      $lname =  $_POST['lname'];
      $checkme =  $_POST['checkme'];

      echo $email;

      $query = "INSERT INTO `users`(`id`, `email`, `password`, `confirmpassword`, `firstname`, `lastname`) VALUES ('','$email','$password','$cpassword','$fname', '$lname')";

      $data = mysqli_query($conn, $query);
      if($data){  
        echo "sucess";
      }else{
        echo "fialed";
      }
      

  }else{
    echo "not isset";
  }
?>