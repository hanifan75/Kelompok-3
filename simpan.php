<?php
	$user = $_POST['username'];
	$password = $_POST['password'];

	if($user=="dokter" && $password=="dokter") {
		header("location:home-dokter");
	}
	else if($user="perawat" && $user=="perawat") {
		header("location:datapasien");
	}
	else {
		header("location:Home-pasien");
	}
?>