<?php 
	$kendaraan = array(
		"nama" => "maji",
		"jurusan" => "Teknik Informatika",
		"gender"=>"laki-laki",
	);

	$kendaraan_2 = array("maji","teknik Informatika","laki-laki");

	$merge = array_merge($kendaraan,$kendaraan_2);

	echo "<pre>";
	print_r($kendaraan);
	echo "<br>";
	print_r($kendaraan_2);
	echo "<br>";
	print_r($merge);
 ?>