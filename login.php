
<?php
require 'function.php';
if (isset ($_POST["login"])){

    $username = $_POST["username"];
    $password = $_POST["password"];

   $result = mysqli_query($conn, "SELECT * FROM tb_user WHERE username ='$username'");

   //cek username
   if(mysqli_num_rows($result)===1){

    // cek password
    $row = mysqli_fetch_assoc($result);
    if(password_verify($password,$row["password"])){

        header("location: karyawan.php");
        exit;
    }
   
   }
   $error = true;
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

    <title>Login</title>

      <link rel="stylesheet" href="style.css">
  </head>

  <style>
    .container .btn{

        margin-right: 250px;
          margin-left: 190px;
}
  </style>
  <body>


  <div style="width: 500px; height:300px;" class=" container  alert alert-primary">

  <form  action=" " method="POST" >
      <h3 style="text-align: center;">Login Page</h3>
      <?php if(isset($error)): ?>
        <p style="color: red; font-style:italic ">username dan password anda salah</p>

      <?php endif;?>
  <div class="mb-3">
    <label for="username" class="form-label">Username</label>
    <input type="username" class="form-control" id="username" name="username" placeholder="Enter username" required >
 
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input type="password" class="form-control" id="password" name="password" placeholder="Enter password" required>
  </div>
 
  <button  type="submit" name="login" class="btn btn-primary ">Login</button>

</form>
<a href="<?php echo "register.php" ?>">Create acount!</a>

  </div>
 
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
  </body>
</html>