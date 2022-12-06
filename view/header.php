<?php
    session_start();
	require_once "fungsi/koneksi.php";
    if(isset($_SESSION['user'])) {
        echo "<script>window.location.replace('user/')</script>";
    }
    else {
        unset($_SESSION['user']);
    }
?>

<!DOCTYPE html>
<html>
<head>
	<title>Sistem Informasi Pemesanan Kamar </title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<link rel = "icon" href = "Gambar/logoMP.png"  type = "image/x-icon">
	<script type="text/javascript" src="lib/sweet.js"></script>
	<style type="text/css">
		
		
	</style>
</head>
<body>

	<nav>
		<img src="gambar/logobaru.png" width="40px">
		<ul>
			<li><a href="index">Beranda</a></li>
			<li><a href="kamar">Kamar</a></li>
			<li><a href="fasilitas">Fasilitas</a></li>
			<li><a href="daftar">Daftar</a></li>
			<li><a href="login">Login</a></li>
			
		</ul>
	</nav>

	<main>
		<center>
</body>
</html>

			