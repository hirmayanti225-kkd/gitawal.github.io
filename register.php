<?php
require 'function.php';
if (isset($_POST['submit'])){
  if (registrasi($_POST)>0){
    
    echo"<script>
    alert('user baru berhasil ditambahkan!');
    document.location.href = 'login.php';
 
    </script>";
    
  
  }
  
  
  else{
    echo mysqli_error($conn);
  }
}

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>Halaman Register</title>

      <link rel="stylesheet" href="style.css">
  </head>
   <style>
      body{
        background-image: url("1.jpg");
        background-size: cover;
      }.container .btn{

          margin-right: 250px;
          margin-left: 190px;
      }

   </style>
  <body>


  <div style="width: 500px; height:400px;" class=" container  alert alert-primary">

  <form  action="" method="POST" >
      <h3 style="text-align: center;">Register</h3>
  <div class="mb-3">
    <label for="username" class="form-label">Username</label>
    <input type="username" class="form-control" id="username" name="username" placeholder="Enter username" required >
 
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input type="password" class="form-control" id="password" name="password" placeholder="Enter password" required>
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Konfirmasi password</label>
    <input type="password" class="form-control" id="password2" name="password2" placeholder="Enter password" required>
  </div>
  <button  type="submit" name="submit" class="btn btn-primary mr-5 ">Register</button>
 
  </div>
  
 
 
</form>

  </div>
 
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
  </body>
</html>