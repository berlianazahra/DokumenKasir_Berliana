<?php 
//coding dibawah digunakan untuk mengkoneksikan ke database

$koneksi = mysqli_connect("localhost","root","","ukk_zahra");

// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}

?>