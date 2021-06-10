<?php 
if(isset($_SESSION['id_kamera'])){
    $id_kamera = $_SESSION['id_kamera'];
    $id_jenis_kamera = $_POST['jenis_kamera'];
    $nama_produk = $_POST['kamera'];
    $id_merk = $_POST['merk'];
    $tag = $_POST['tag'];
    // Spefikasi Kamera
    $bat_life = $_POST['bat_life'];
    $frame_rates = $_POST['frame_rate'];
    $img_sensor = $_POST['img_sensor'];
    $asp_ratio = $_POST['asp_ratio'];
    $pixels = $_POST['pixels'];
    $resolution = $_POST['res'];
    $iso = $_POST['iso'];
    $shut_speed = $_POST['shut_speed'];
    $weight = $_POST['weight'];
    $harga = $_POST['harga'];
    // foto 
    $lokasi_file = $_FILES['foto']['tmp_name'];
    $nama_file = $_FILES['foto']['name'];
    $direktori = 'produk/kamera/'.$nama_file;
    //get foto 
    $sql_f = "SELECT `foto` FROM `kamera` WHERE `id_kamera`='$id_kamera'";
    $query_f = mysqli_query($koneksi,$sql_f);
    while($data_f = mysqli_fetch_row($query_f)){
        $foto = $data_f[0];
        //echo $foto;
    }
    if(empty($id_jenis_kamera)){
        header("Location:edit-kamera-data-".$id_kamera."_notif-editkosong-jenis-jeniskamera");
    }else if(empty($nama_produk)){
        header("Location:edit-kamera-data-".$id_kamera."_notif-editkosong-jenis-namaproduk");
    }else if(empty($id_merk)){
        header("Location:edit-kamera-data-".$id_kamera."_notif-editkosong-jenis-merk");
    }else if($_POST['tag']==""){
        header("Location:edit-kamera-data-".$id_kamera."_notif-editkosong-jenis-tag");
    }
    // Spesifikasi Kamera
    else if(empty($bat_life)){
        header("Location:edit-kamera-data-".$id_kamera."_notif-editkosong-jenis-batterylife");
    }else if(empty($frame_rates)){
        header("Location:edit-kamera-data-".$id_kamera."_notif-editkosong-jenis-framerate");
    }else if(empty($img_sensor)){
        header("Location:edit-kamera-data-".$id_kamera."_notif-editkosong-jenis-imagesensor");
    }else if(empty($asp_ratio)){
        header("Location:edit-kamera-data-".$id_kamera."_notif-editkosong-jenis-aspectratio");
    }else if(empty($pixels)){
        header("Location:edit-kamera-data-".$id_kamera."_notif-editkosong-jenis-pixels");
    }else if(empty($resolution)){
        header("Location:edit-kamera-data-".$id_kamera."_notif-editkosong-jenis-resolution");
    }else if(empty($iso)){
        header("Location:edit-kamera-data-".$id_kamera."_notif-editkosong-jenis-iso");
    }else if(empty($shut_speed)){
        header("Location:edit-kamera-data-".$id_kamera."_notif-editkosong-jenis-shutterspeed");
    }else if(empty($weight)){
        header("Location:edit-kamera-data-".$id_kamera."_notif-editkosong-jenis-weight");
    }else if(empty($harga)){
        header("Location:edit-kamera-data-".$id_kamera."_notif-editkosong-jenis-harga");
    }else{
        $lokasi_file = $_FILES['foto']['tmp_name'];
        $nama_file = $_FILES['foto']['name'];
        $direktori = 'produk/kamera/'.$nama_file;
        if(move_uploaded_file($lokasi_file,$direktori)){
            if(!empty($foto)){ 
                unlink("produk/kamera/$foto");
            }
            $sql = "UPDATE `kamera` set 
            `nama`='$nama_produk',`id_jenis`='$id_jenis_kamera',`id_merk`='$id_merk',`battery_life`='$bat_life',`frame_rates`='$frame_rates',`image_sensor`='$img_sensor',`aspect_ratio`='$asp_ratio',`pixels`='$pixels',`resolution`='$resolution',`iso`='$iso',`shuter_speed`='$shut_speed',`weight`='$weight',`harga`='$harga',`foto`='$foto' WHERE `id_kamera`='$id_kamera'";
            mysqli_query($koneksi,$sql);
        }else{
            $sql = "UPDATE `kamera` set 
            `nama`='$nama_produk',`id_jenis`='$id_jenis_kamera',`id_merk`='$id_merk',`battery_life`='$bat_life',`frame_rates`='$frame_rates',`image_sensor`='$img_sensor',`aspect_ratio`='$asp_ratio',`pixels`='$pixels',`resolution`='$resolution',`iso`='$iso',`shuter_speed`='$shut_speed',`weight`='$weight',`harga`='$harga' WHERE `id_kamera`='$id_kamera'";
            mysqli_query($koneksi,$sql);
        }
        //hapus tag
        $sql_d = "delete from `tag_kamera` where `id_kamera`='$id_kamera'";
        mysqli_query($koneksi,$sql_d);
        //tambah tag
        if(!empty($_POST['tag'])){
            foreach($_POST['tag'] as $id_tag){
                $sql_i = "insert into `tag_kamera` (`id_kamera`, `id_tag`) 
                values ('$id_kamera', '$id_tag')";
                mysqli_query($koneksi,$sql_i);
            }
        }
        header("Location:kamera-notif-editberhasil");
    }
}
?>