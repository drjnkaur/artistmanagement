<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Website</title>
    <link rel="stylesheet" href="style.css">


    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    
    <link rel="icon" href="./favicon.ico" type="image/x-icon">
  </head>
  <body>
    <div class="container lol">
  <!-- Content here -->
    <p class="h1 text-center mt-5 mb-5">Artist Management</p>
    <p class="h2 text-center mt-5 mb-5">USERS</p>
    <p class="h6  text-end mt-5 mb-5 text-primary text-end w-100">logout</p>
    <div class="text-end ">
   
  
    <button name="sign_up_submit" type="submit" class="btn btn-primary"> Approve </button>
    <button name="sign_up_submit" type="submit" class="btn btn-primary"> Decline </button>

  </div>


    <div class="row">

    <div class="mb-3 w-45 text-center  col-5">
    <label class="form-label ">Department </label>
    <select class="form-select" aria-label="Default select example">
        <option selected>All</option>
        <option value="pianist">Pianist</option>
        <option value="guitarist">Guitarist</option>
        <option value="violinst">violinst</option>
        <option value="singer">singer</option>
    </select>
    
  </div>



  <div class="w-55  text-end  col-5">
    <div class="row ">
 
  <form class="form-inline border-2  ">
  <button class="btn btn-outline-success text-end my-2 my-sm-0" type="submit">Search</button>
    <input class="form-control mr-sm-2 text-left mr-2" type="search" placeholder="Search" aria-label="Search">
    
  </form>

</div>

</div>

</div>
    <table class="table caption-top">
  <caption>List of users</caption>
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">User ID</th>
      <th scope="col">First Name </th>
      <th scope="col">Last Name</th>
      <th scope="col">Access Type</th>
      <th scope="col">Department</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>U001</td>
      <td>Jones</td>
      <td>Mike</td>
      <td>Artist</td>
      <td>Theatre Artist</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>U002</td>
      <td>Alyssa</td>
      <td>Drake</td>
      <td>Manager</td>
      <td>pianist</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>U003</td>
      <td>Krish</td>
      <td>Raj</td>
      <td>Administrator</td>
      <td>Technology</td>
    </tr>
  </tbody>
</table>

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
error_reporting(0);
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