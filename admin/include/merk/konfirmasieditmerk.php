<?php 
    if(isset($_SESSION['id_merk'])){
        $id_merk = $_SESSION['id_merk'];
        $merk = $_POST['merk'];
        if(empty($merk)){
            header("Location:edit-merk-data-".$id_merk."_notif-editkosong");
        }else{
            $sql = "UPDATE `merk` SET `merk`='$merk' WHERE `id_merk`='$id_merk'";
            mysqli_query($koneksi, $sql);
            header("Location:merk_notif-editberhasil");
        }
    }
?>