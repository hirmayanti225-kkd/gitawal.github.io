
<?php

 require 'function.php';

 $karyawan = ambil_data("SELECT * FROM  tb_karyawan ORDER BY id DESC");


 // cek apakah tombol submit sudah di tekan apa belum
 if (isset($_POST["submit"])){
   
 



// cek apakah data berhasil di tambahkan atau tidak
if (tambah($_POST)>0){
  echo"<script>
  alert('data berhasil ditambahkan!');
  document.location.href = 'karyawan.php';

  </script>";
}else{
  echo"<script>
  alert('data gagal berhasil ditambahkan!');
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

    <title>Karyawan</title>

      <link rel="stylesheet" type="text/css" href="style.css">
  </head>

    <style>
    body{
      background-image: url('2.jpg');
    }

          .container{
            border: 1px solid blue ;
            height: 500px;
            background-image: url('3.jpg');
          }h1{
            color: blue;
          }
    </style>

  <style>
    
  </style>
  
  <body>



<div class="container badge-danger">
<h1 >DAFTAR KARYAWAN </h1>
 
 <!-- Button trigger modal -->
 <button id="bawah" type="button" class="btn btn-primary  " data-bs-toggle="modal" data-bs-target="#exampleModal">
  Tambah data karyawan
</button>
<br><br>
<a style=" "  class="btn btn-danger  " href="<?php echo "login.php"; ?>">Logout</a> 
<br><br>

<from action="" method="post">
  <input type="text" name="keyword" size="40" autofocus>
  <button type="submit" name="cari">cari!</button>
</from>





<table border="1px" class="table table-hover alert alert-success">
     <tr>
         <th>No</th>
         <th>Nama</th>
         <th>NISN</th>
         <th>Jabatan</th>
         <th>Alamat</th>
         <th>Ttl</th>
         <th>Aksi</th>

     </tr>
     <tr>
         <?php $no=1; 
         foreach($karyawan as $karya): ?>
         <td> <?= $no++; ?> </td>
         <td> <?= $karya['nama']; ?> </td>
         <td> <?= $karya['nisn']; ?></td>
         <td> <?= $karya['jabatan']; ?></td>
         <td> <?= $karya['alamat']; ?></td>
         <td> <?= $karya['ttl']; ?></td>
         <td>
            <a href="edit.php?id=<?=$karya ["id"];?>"><span class="badge bg-success">Edit</span></a>
            <a href="delete.php?id=<?=$karya ["id"];?>"onclick="return confirm('yakin?');"><span class="badge bg-danger">Delete</span></a>
            </td>
     </tr>
     <?php endforeach; ?>
</table>

 

</div>


 
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
  </body>
</html>



<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Form data karyawan</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="" method="POST">
  <div class="form-group">
    <label for="nama">Nama</label>
    <input type="text" class="form-control" id="nama" name="nama" placeholder="Enter nama" required>
    
  </div>
  <div class="form-group">
    <label for="nisn">NISN</label>
    <input type="text" class="form-control" id="nisn" name="nisn" placeholder="Enter NISN" required >
    
  </div>
  <div class="form-group">
    <label for="jabatan">Jabatan</label>
    <input type="text" class="form-control" id="jabatan" name="jabatan" placeholder="Enter jabatan" required>
    
  </div>
  <div class="form-group">
    <label for="alamat">Alamat</label>
    <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Enter alamat" required >
    
  </div>
  <div class="form-group">
    <label for="ttl">Ttl</label>
    <input type="text" class="form-control" id="ttl" name="ttl" placeholder="Enter ttl" required>
    
  </div>
  <div class="modal-footer ">
        
        <button type="submit" name="submit" class="btn btn-primary">Save</button>
      </div>
 
</form>
        
      </div>
     
    </div>
  </div>
</div>

