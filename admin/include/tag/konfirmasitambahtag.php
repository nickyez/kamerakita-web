<?php 
    $tag = $_POST['tag'];
    if(empty($tag)){
        header("Location:tambah-tag_notif-tambahkosong");
    }else{
        $sql = "INSERT INTO `tag` (`tag`) values ('$tag')";
        mysqli_query($koneksi, $sql);
        header("Location:tag_notif-tambahberhasil");
    }
?>