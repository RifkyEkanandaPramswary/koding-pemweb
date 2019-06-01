<?php

include 'config.php';


$Nama_Awal = $_POST["Nama Awal"];
$Nama_Akhir = $_POST["Nama Akhir"];
$Alamat = $_POST["Alamat"];
$Kota = $_POST["Kota"];
$pin = $_POST["Kode pos"];
$email = $_POST["email"];
$password = $_POST["password"];

if($mysqli->query("INSERT INTO users (Nama_Awal, Nama_Akhir, Alamat, Kota, pin, email, password) VALUES('$Nama Awal', '$Nama Akhir', '$Alamat', '$Kota', $pin, '$email', '$password')")){
	echo 'Data inserted';
	echo '<br/>';
}

header ("location:login.php");

?>
