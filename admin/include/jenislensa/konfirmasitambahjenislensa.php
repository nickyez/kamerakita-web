<?php 
    $jenis_lensa = $_POST['jenis_lensa'];
    if(empty($jenis_lensa)){
        header("Location:tambah-jenis-lensa_notif-tambahkosong");
    }else{
        $sql = "INSERT INTO `jenis_lensa` (`jenis`) values ('$jenis_lensa')";
        mysqli_query($koneksi, $sql);
        header("Location:jenis-lensa_notif-tambahberhasil");
    }
?>