<?php 
// mengaktifkan session php
session_start();
 
// menghubungkan dengan koneksi
include 'database.php';
 
// menangkap data yang dikirim dari form
$name = $_POST['username'];
$password = $_POST['password'];
 
// menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query($data,"select * from login where name='$name' and password='$password'");
 
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);
 
if($cek > 0){
	$_SESSION['username'] = $name;
	$_SESSION['password'] = "login";
	header("location:ad1/index.html");
}else{
	header("location:index.php?pesan=gagal");
}
?>