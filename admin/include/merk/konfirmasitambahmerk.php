<?php
	$merk = $_POST['merk'];
	if(empty($merk)){
		header("Location:index.php?include=tambah-merk&notif=tambahkosong");
	}else{
		$sql = "INSERT INTO `merk` (`merk`) VALUES ('$merk')";
		mysqli_query($koneksi, $sql);
		header("Location:index.php?include=merk&notif=tambahberhasil");
	}
?>