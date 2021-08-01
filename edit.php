
<?php

require 'function.php';

// ambil data di URL
$id =$_GET["id"];
// query data karyawan berdasarkan idnya
$kry = ambil_data("SELECT * FROM  tb_karyawan WHERE id=$id" )[0];


$karyawan = ambil_data("SELECT * FROM  tb_karyawan");


// cek apakah tombol submit sudah di tekan apa belum
if (isset($_POST["submit"])){
  




// cek apakah data berhasil di edit atau tidak
if (edit($_POST)>0){
 echo"<script>
 alert('data berhasil di edit!');
 document.location.href = 'karyawan.php';

 </script>";
}else{
 echo"<script>
 alert('data gagal  di edit!');
 document.location.href = 'karyawan.php';

 </script>";
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

   <title>edit</title>

     <link rel="stylesheet" type="text/css" href="style.css">
 </head>
 <body>


<div class="container">

<div class="modal-body alert alert-primary mx-auto" style="width:500px">
     <form action="" method="POST">
         <input type="hidden" name="id" value="<?= $kry  ["id"];?> ">
 <div class="form-group">
   <label for="nama">Nama</label>
   <input type="text" class="form-control" id="nama" name="nama" placeholder="Enter nama" required value="<?=$kry ["nama"]; ?>">
   
 </div>
 <div class="form-group">
   <label for="nisn">NISN</label>
   <input type="text" class="form-control" id="nisn" name="nisn" placeholder="Enter NISN" required value="<?=$kry ["nisn"]; ?>">
   
 </div>
 <div class="form-group">
   <label for="jabatan">Jabatan</label>
   <input type="text" class="form-control" id="jabatan" name="jabatan" placeholder="Enter jabatan" required value="<?=$kry ["jabatan"]; ?>">
   
 </div>
 <div class="form-group">
   <label for="alamat">Alamat</label>
   <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Enter alamat" required value="<?=$kry ["alamat"]; ?>">
   
 </div>
 <div class="form-group">
   <label for="ttl">Ttl</label>
   <input type="text" class="form-control" id="ttl" name="ttl" placeholder="Enter ttl" required value="<?=$kry ["ttl"]; ?>">
   
 </div>
 <div class="modal-footer ">
       
       <button type="submit" name="submit" class="btn btn-primary">edit data</button>
     </div>

</form>
       
     </div> 

</div>



  
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

   <!-- Option 2: Separate Popper and Bootstrap JS -->
   <!--
   <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
   -->
 </body>
</html>




