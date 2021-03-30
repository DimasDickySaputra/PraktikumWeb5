<?php 
	if (empty($_POST['nama'] && $_POST['email'])) {
		header("location:redirectlatihan2.php");
	} 

	else {
		echo "nama : ".$_POST['nama']." <br>";
		echo "email : ".$_POST['email']." <br>";	
		date_default_timezone_set ('Asia/Jakarta');
		echo date('d-m-Y H:i:s');
	}

 ?>