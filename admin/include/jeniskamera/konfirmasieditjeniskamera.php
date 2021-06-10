<?php 
    if(isset($_SESSION['id_jenis_kamera'])){
        $id_jenis_kamera = $_SESSION['id_jenis_kamera'];
        $jenis_kamera = $_POST['jenis_kamera'];
        if(empty($jenis_kamera)){
            header("Location:edit-jenis-kamera-data-".$id_jenis_kamera."_notif-editkosong");
        }else{
            $sql = "UPDATE `jenis_kamera` SET `jenis`='$jenis_kamera' WHERE `id_jenis`='$id_jenis_kamera'";
            mysqli_query($koneksi, $sql);
            header("Location:jenis-kamera_notif-editberhasil");
        }
    }
?>