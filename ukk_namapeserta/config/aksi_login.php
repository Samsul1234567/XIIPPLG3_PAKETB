<?php
session_start();
include 'koneksi.php';

$username = $_POST['username'];
$password = md5($_POST['password']);

$sql = mysqli_query($koneksi, "SELECT * FROM user WHERE username='$username' AND password='$password'");

$cek = mysqli_num_rows($sql);

if ($cek > 0) {
   $_SESSION['username'] = $username;
   $_SESSION['status'] = 'login';
   echo "<script>
   alert('Login Berhasil');
   location.href='../admin/index.php';
   </script>";
   
}else{
   echo "<script>
   alert('Username atau Password Salah!');
   location.href='../admin/login.php';
   </script>";
}

  ?>