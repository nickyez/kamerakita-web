<?php 
    $jenis_kamera = $_POST['jenis_kamera'];
    if(empty($jenis_kamera)){
        header("Location:tambah-jenis-kamera_notif-tambahkosong");
    }else{
        $sql = "INSERT INTO `jenis_kamera` (`jenis`) values ('$jenis_kamera')";
        mysqli_query($koneksi, $sql);
        header("Location:jenis-kamera_notif-tambahberhasil");
    }
?>