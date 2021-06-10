<?php 
    $id_jenis_lensa = $_POST['jenis_lensa'];
    $nama_produk = $_POST['lensa'];
    $id_merk = $_POST['merk'];
    // Spefikasi lensa
    $focal_length = $_POST['focal_length'];
    $max_aperture = $_POST['max_aperture'];
    $mount_type = $_POST['mount_type'];
    $format = $_POST['format'];
    $harga = $_POST['harga'];
    if(empty($id_jenis_lensa)){
        header("Location:tambah-lensa_notif-tambahkosong-jenis-jenislensa");
    }else if(empty($nama_produk)){
        header("Location:tambah-lensa_notif-tambahkosong-jenis-namaproduk");
    }else if(empty($id_merk)){
        header("Location:tambah-lensa_notif-tambahkosong-jenis-merk");
    }else if($_POST['tag']==""){
        header("Location:tambah-lensa_notif-tambahkosong-jenis-tag");
    }else if($_FILES['foto']['name'] == ""){
        header("Location:tambah-lensa_notif-tambahkosong-jenis-foto");
    }
    // Spesifikasi lensa
    else if(empty($focal_length)){
        header("Location:tambah-lensa_notif-tambahkosong-jenis-batterylife");
    }else if(empty($max_aperture)){
        header("Location:tambah-lensa_notif-tambahkosong-jenis-framerate");
    }else if(empty($mount_type)){
        header("Location:tambah-lensa_notif-tambahkosong-jenis-imagesensor");
    }else if(empty($format)){
        header("Location:tambah-lensa_notif-tambahkosong-jenis-format");
    }else if(empty($harga)){
        header("Location:tambah-lensa_notif-tambahkosong-jenis-harga");
    }else{
        $lokasi_file = $_FILES['foto']['tmp_name'];
        $nama_file = $_FILES['foto']['name'];
        $direktori = 'produk/lensa/'.$nama_file;
        $tag = $_POST['tag'];
        if(move_uploaded_file($lokasi_file, $direktori)){
            $sql = "INSERT INTO `lensa` 
            (`id_jenis`,`nama`,`id_merk`,`focal_length`,`maximum_aperture`,`mount_type`,`format`,`harga`,`foto`) VALUES ('$id_jenis_lensa','$nama_produk','$id_merk','$focal_length','$max_aperture','$mount_type','$format','$harga','$nama_file')";
            mysqli_query($koneksi, $sql);
            $id_lensa = mysqli_insert_id($koneksi);
        }
        if(!empty($_POST['tag'])){
            foreach($_POST['tag'] as $id_tag){
                $sql_i = "INSERT INTO `tag_lensa` (`id_lensa`,`id_tag`) VALUES ('$id_lensa','$id_tag')";
                mysqli_query($koneksi, $sql_i);
            } 
        }
        header("Location:lensa_notif-tambahberhasil");
    }
?>