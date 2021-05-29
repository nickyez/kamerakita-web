<?php 

    if(isset($_SESSION['id_merk'])){
        $id_merk = $_SESSION['id_merk'];
        $merk = $_POST['merk'];
        if(empty($merk)){
            header("Location:index.php?include=edit-merk&data=".$id_merk."&notif=editkosong");
        }else{
            $sql = "UPDATE `merk` SET `merk`='$merk' WHERE `id_merk`='$id_merk'";
            mysqli_query($koneksi, $sql);
            header("Location:index.php?include=merk&notif=editberhasil");
        }
    }
?>