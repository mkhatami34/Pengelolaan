<?php 

include 'koneksi.php';

$username =($_POST['username']);
$password =($_POST['password']);

$login = mysqli_query($koneksi,"SELECT * FROM tb_admin WHERE username='$username' and password='$password'");

$cek = mysqli_num_rows($login);

// cek apakah username dan password di temukan pada database
if($cek > 0){
 $data = mysqli_fetch_assoc($login);
  // alihkan ke halaman dashboard admin
  header("location: admin/dashboard.php");
}
?>