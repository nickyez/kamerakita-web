<?php 
    if(isset($_SESSION['id_jenis_lensa'])){
        $id_jenis_lensa = $_SESSION['id_jenis_lensa'];
        $jenis_lensa = $_POST['jenis_lensa'];
        if(empty($jenis_lensa)){
            header("Location:edit-jenis-lensa-data-".$id_jenis_lensa."_notif-editkosong");
        }else{
            $sql = "UPDATE `jenis_lensa` SET `jenis`='$jenis_lensa' WHERE `id_jenis`='$id_jenis_lensa'";
            mysqli_query($koneksi, $sql);
            header("Location:jenis-lensa_notif-editberhasil");
        }
    }
?>