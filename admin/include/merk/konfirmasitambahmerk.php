<?php 
    $merk = $_POST['merk'];
    if(empty($merk)){
        header("Location:tambah-merk_notif-tambahkosong");
    }else{
        $sql = "INSERT INTO `merk` (`merk`) values ('$merk')";
        mysqli_query($koneksi, $sql);
        header("Location:merk_notif-tambahberhasil");
    }
?>