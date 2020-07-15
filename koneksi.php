<?php
	$namaserver = 'localhost';
	$userdb = 'admin_abkd';
	$passdb = '1sampaiabkd';
	$namadb = 'admin_abkd';

	$conn = mysqli_connect($namaserver, $userdb, $passdb, $namadb);

	if ($conn == FALSE) {
		die('Koneksi gagal' .mysqli_connect_error());
	}

?>
