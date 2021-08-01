<?php


$conn = mysqli_connect("localhost","root","","db_toni");


function ambil_data($query){

    global $conn;
    $result = mysqli_query($conn,$query);
    $row = [];
    while($row = mysqli_fetch_assoc($result)){
        $rows[ ]= $row;
    }
    return$rows;

}

function tambah($data){
     global $conn;
    $nama =htmlspecialchars( $data["nama"]);
    $nisn =htmlspecialchars( $data["nisn"]);
    $jabatan =htmlspecialchars( $data["jabatan"]);
    $alamat =htmlspecialchars( $data["alamat"]);
    $ttl =htmlspecialchars( $data["ttl"]);
    
    
    $query ="INSERT INTO tb_karyawan
    VALUES
    ('','$nama','$nisn','$jabatan','$alamat','$ttl')
    
    ";
    mysqli_query($conn,$query);
    return mysqli_affected_rows($conn);
    }
    

function registrasi($data){

    global $conn;
    
    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($conn,$data["password"]);
    $password2 = mysqli_real_escape_string($conn,$data["password2"]);
    
    // cek username sudah ada apa belum
    $result = mysqli_query($conn , " SELECT username FROM tb_user WHERE username = '$username'");
    if(mysqli_fetch_assoc($result)){
        echo "<script>
        alert('username sudah terdaftar!')
        </script>";
        return false;
       
    }

    // cek kompirmasi password
    if($password !== $password2){
        echo "<script>
        alert('kompirmasi password tidak sesuai');
        </script>";
        return false;
    }

    //enskripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    //tambahkan user baru ke database

   mysqli_query($conn, "INSERT INTO tb_user VALUES('','$username','$password')");
   return mysqli_affected_rows($conn);
}

function delete($id){

    global $conn;
    mysqli_query($conn,"DELETE FROM tb_karyawan WHERE id= $id");
    return mysqli_affected_rows($conn);
}

function edit ($data){

    global $conn;
    $id =$data["id"];
    $nama =htmlspecialchars( $data["nama"]);
    $nisn =htmlspecialchars( $data["nisn"]);
    $jabatan =htmlspecialchars( $data["jabatan"]);
    $alamat =htmlspecialchars( $data["alamat"]);
    $ttl =htmlspecialchars( $data["ttl"]);
    
    
    $query ="UPDATE tb_karyawan SET nama= '$nama',nisn= '$nisn',jabatan= '$jabatan',alamat= '$alamat',ttl= '$ttl'WHERE id=$id ";
    mysqli_query($conn,$query);
    return mysqli_affected_rows($conn);

}

?>
