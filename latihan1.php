<?php 

	// $mahasiswa= [
	// 	[
	// 		"nama" => "Sandhika Galih",
	// 		"nrp" => "043040023",
	// 		"email" => "sandhikagalih@unpas.ac.id"
	// 	],
	// 	[
	// 		"nama" => "Echo",
	// 		"nrp" => "043040023",
	// 		"email" => "Echo@unpas.ac.id"
	// 	]
	// ]; 

	// call connection
	$sdb = new PDO('mysql:host=localhost;dbname=phpdasar','root','sumendra');
	// select all from mahasiswa
	$db= $sdb->prepare('SELECT * FROM mahasiswa'); 
	// execute the query 
	$db->execute(); 
	// tampung data ke dalam suatu array 
	$mahasiswa= $db->fetchAll(PDO::FETCH_ASSOC);
	
	//menampilkan output dalam bentuk data
	//var_dump($mahasiswa); 
	
	// membuat suatu data menjadi format json 
	$data= json_encode($mahasiswa); 
	echo $data;
	

?>