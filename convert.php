<?php
/*
	// requires php5
	define('UPLOAD_DIR', 'images/');
	$img = $_POST['img'];
	$img = str_replace('data:image/png;base64,', '', $img);
	$img = str_replace(' ', '+', $img);
	$data = base64_decode($img);
	$file = UPLOAD_DIR . uniqid() . '.png';
	$success = file_put_contents($file, $data);
	print $success ? $file : 'Unable to save the file.';
	*/
	
	$hewan = array ("kucing", "anjing", "ayam", "sapi", "kambing");
    $tanaman = array("padi","jagung","kedelai","kelapa","rumput");
	
	echo $hewan[array_rand($hewan)]." makan ".$tanaman[array_rand($tanaman)]."<br>";
	/*
	for($i = 0; $i < 5; $i++){
	echo $abjad[array_rand($abjad)];
	echo mt_rand ( 1 , 5 );
	
	if($i < 4 ){
		echo " -- ";
	}
	else{
		echo " ";
	}
	}*/
?>