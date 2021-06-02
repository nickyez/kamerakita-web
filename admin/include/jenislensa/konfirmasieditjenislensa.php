<?php
    if(isset($_SESSION['id_jenis'])){
        $id_jenis = $_SESSION['id_jenis'];
        $jenis = $_POST['jenis'];
        if(empty($jenis)){
            header("Location:index.php?include=jenis-lensa/edit&data=".$id_jenis."&notif=editkosong&jenis=Jenis Lensa");
        }else{
            $sql = "UPDATE `jenis_lensa` 
                    SET `jenis`='$jenis'
                    WHERE `id_jenis`='$id_jenis'";
            mysqli_query($koneksi,$sql);
            header("Location:index.php?include=jenis-lensa&notif=editberhasil");
        }
    }
?>