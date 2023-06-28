<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Website</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Captcha Generator</title>
    <!-- Font Awesome Icons -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    />
    <!-- Google Fonts -->
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@500&display=swap"
      rel="stylesheet"
    />
    <!-- Stylesheet -->
    <link rel="stylesheet" href="style.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    />
    <!-- Google Fonts -->
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@500&display=swap"
      rel="stylesheet"
    />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    
    <link rel="icon" href="./favicon.ico" type="image/x-icon">
   
  </head>
  <body>
    
  <div class="container lol">
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Welcome</a>
        </li>
        <li class="nav-item">
          <a class="nav-link "  href="#">My Profile</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Users</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="#" >Requests</a>
        </li>
      </ul>
      
    </div>
  </div>
</nav>

  <!-- Content here -->
    <p class="h1 text-center mt-5 mb-5">Artist Management</p>
    <p class="h4 text-center mt-5 mb-5">USER PROFILES</p>
    <form class=" w-50 mx-auto mt-5">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label ">Email Address</label>
    <input type="email" class="form-control " id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control   text-left" id="exampleInputPassword1">
  </div>
  
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label ">First Name</label>
    <input type="text" class="form-control " id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label ">Last Name</label>
    <input type="text" class="form-control " id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label ">Date</label>
    <input type="date" class="form-control " >
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label ">Access Type</label>
    <select class="form-select" aria-label="Default select example">
        <option selected>Open this select menu</option>
        <option value="artist">Artist</option>
        <option value="2">Two</option>
        <option value="3">Three</option>
    </select>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label ">Phone Number</label>
    <input type="text" class="form-control " >
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label ">Department </label>
    <select class="form-select" aria-label="Default select example">
        <option selected>Open this select menu</option>
        <option value="pianist">Pianist</option>
        <option value="guitarist">Guitarist</option>
        <option value="violinst">violinst</option>
        <option value="singer">singer</option>
    </select>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label ">Address</label>
    <input type="text" class="form-control " >
  </div>
  <div class="mb-3">
    <input type="text" class="form-control " >
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  


      <div class="text-center mt-5">
    <button name="sign_up_submit" type="submit" class="btn btn-primary"> Edit </button>
  </div>
  <div class="text-center mt-5">
  <p class="h4 text-center mt-5 mb-5">Access Request is pending Approved</p>
  <p class="h4 text-center mt-5 mb-5">Access Request Declined</p>
  <p class="h4 text-center mt-5 mb-5">Access Request Approved</p>
  </div>
    
    <!-- Script -->
    <script src="script.js"></script>
    </form>

    </div>


	
  </body>
</html>

<?php
  include("connection.php");
  if(isset($_POST['sign_up_submit'])){  
    echo "inside  submit";
  }
?>