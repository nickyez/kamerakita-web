<?php 
    $id_jenis_kamera = $_POST['jenis_kamera'];
    $nama_produk = $_POST['kamera'];
    $id_merk = $_POST['merk'];
    // Spefikasi Kamera
    $bat_life = $_POST['bat_life'];
    $frame_rates = $_POST['frame_rate'];
    $img_sensor = $_POST['img_sensor'];
    $asp_ratio = $_POST['asp_ratio'];
    $pixels = $_POST['pixels'];
    $resolution = $_POST['res'];
    $iso = $_POST['iso'];
    $shut_speed = $_POST['shutter_speed'];
    $weight = $_POST['weight'];
    $harga = $_POST['harga'];
    if(empty($id_jenis_kamera)){
        header("Location:tambah-kamera_notif-tambahkosong-jenis-jeniskamera");
    }else if(empty($nama_produk)){
        header("Location:tambah-kamera_notif-tambahkosong-jenis-namaproduk");
    }else if(empty($id_merk)){
        header("Location:tambah-kamera_notif-tambahkosong-jenis-merk");
    }else if($_POST['tag']==""){
        header("Location:tambah-kamera_notif-tambahkosong-jenis-tag");
    }else if($_FILES['foto']['name'] == ""){
        header("Location:tambah-kamera_notif-tambahkosong-jenis-foto");
    }
    // Spesifikasi Kamera
    else if(empty($bat_life)){
        header("Location:tambah-kamera_notif-tambahkosong-jenis-batterylife");
    }else if(empty($frame_rates)){
        header("Location:tambah-kamera_notif-tambahkosong-jenis-framerate");
    }else if(empty($img_sensor)){
        header("Location:tambah-kamera_notif-tambahkosong-jenis-imagesensor");
    }else if(empty($asp_ratio)){
        header("Location:tambah-kamera_notif-tambahkosong-jenis-aspectratio");
    }else if(empty($pixels)){
        header("Location:tambah-kamera_notif-tambahkosong-jenis-pixels");
    }else if(empty($resolution)){
        header("Location:tambah-kamera_notif-tambahkosong-jenis-resolution");
    }else if(empty($iso)){
        header("Location:tambah-kamera_notif-tambahkosong-jenis-iso");
    }else if(empty($shut_speed)){
        header("Location:tambah-kamera_notif-tambahkosong-jenis-shutterspeed");
    }else if(empty($weight)){
        header("Location:tambah-kamera_notif-tambahkosong-jenis-weight");
    }else if(empty($harga)){
        header("Location:tambah-kamera_notif-tambahkosong-jenis-harga");
    }else{
        $lokasi_file = $_FILES['foto']['tmp_name'];
        $nama_file = $_FILES['foto']['name'];
        $direktori = 'produk/kamera/'.$nama_file;
        $tag = $_POST['tag'];
        if(move_uploaded_file($lokasi_file, $direktori)){
            $sql = "INSERT INTO `kamera` 
            (`id_jenis`,`nama`,`id_merk`,`battery_life`,`frame_rates`,`image_sensor`,`aspect_ratio`,`pixels`,`resolution`,`iso`,`shuter_speed`,`weight`,`harga`,`foto`) VALUES ('$id_jenis_kamera','$nama_produk','$id_merk','$bat_life','$frame_rates','$img_sensor','$asp_ratio','$pixels','$resolution','$iso','$shut_speed','$weight','$harga','$nama_file')";
            mysqli_query($koneksi, $sql);
            echo $sql;
            
            $id_kamera = mysqli_insert_id($koneksi);
        }
        if(!empty($_POST['tag'])){
            foreach($_POST['tag'] as $id_tag){
                $sql_i = "INSERT INTO `tag_kamera` (`id_kamera`,`id_tag`) VALUES ('$id_kamera','$id_tag')";
                mysqli_query($koneksi, $sql_i);
            } 
        }
        // header("Location:kamera_notif-tambahberhasil");
    }
?>