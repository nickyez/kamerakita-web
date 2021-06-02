<?php
    $id_jenis = $_POST['id_jenis'];
    $jenis = $_POST['jenis'];
    
    if(empty($jenis)){
        header("Location:index.php?include=jenis-lensa/tambah&notif=tambahkosong&jenis=Jenis Lensa");
    }else{
        $sql = "INSERT INTO `jenis_lensa` (`id_jenis`,`jenis`)
                VALUES ('$id_jenis', '$jenis')";
        mysqli_query($koneksi,$sql);
        header("Location:index.php?include=jenis-lensa&notif=tambahberhasil");
    }
?>