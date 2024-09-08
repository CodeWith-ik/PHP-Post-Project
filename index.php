<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js
"></script>
    <title>PHP (Post Method)</title>
</head>
<body>
    <!-- Navbar -->
    
    <nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
  <div class="container-fluid">

  <!-- image bootstrap classes width and height

  class="w-25 h-25"
-->

    <a class="navbar-brand" href="#"><img style="width:80px; height:40px;" src="php.png" alt="php" ></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="#">About</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="#">Contact</a>
        </li>
       
      
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-warning" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>



<!-- PHP Start -->
<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $email = $_POST['email'];
        $password = $_POST['password'];
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Success!</strong> Your email ' . $email.' and password '. $password.' has been submitted successfully!
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
      
    }

    
    
?>



<!-- Form -->

<div class="container mt-5">
    <h1 class="text-center">PHP (Post Method)</h1>
<form action="index.php" method="post">
  <div class="mb-3">
    <label for="email" class="form-label">Email address</label>
    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" required>
    
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input type="password" class="form-control" id="password" name="password" required>
  </div>
 
  <button type="submit" class="btn btn-warning">Submit</button>
</form>
</div>



>


</body>
</html>