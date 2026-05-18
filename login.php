<?php
session_start();
include "koneksi.php";

$username = $_POST['username'];
$password = $_POST['password'];

if (empty($username) || empty($password)){
    echo "Username dan password wajib diisi";
    exit;
}

$query = mysqli_query($conn, "SELECT * FROM users WHERE username='$username' AND password='$password'"); //jalankan perintah

$cek= mysqli_num_rows($query);

if($cek>0){ //jika dapat 1 yang sama
    $data=mysqli_fetch_assoc($query); //mengambil data berupa array assosiatif = kunci-value ->string/label unik = kunci

    $_SESSION['id']= $data['id'];
    $_SESSION['username']= $data['username'];

    header("Location: dashboard.php");
}else{
    echo "Login gagal. Username atau password salah";
}