<?php
    $id_jenis = $_POST['jenis'];
    $id_merk = $_POST['merk'];
    $nama = $_POST['nama'];
    $focal_length = $_POST['focal_length'];
    $maximum_aperture = $_POST['maximum_aperture'];
    $mount_type = $_POST['mount_type'];
    $format = $_POST['format'];
    $harga = $_POST['harga'];
    $lokasi_file = $_FILES['foto']['tmp_name'];
    $nama_file = $_FILES['foto']['name'];
    $direktori = 'produk/lensa/'.$nama_file;
    if(empty($id_jenis)){
        header("Location:index.php?include=lensa/tambah&data=$id_lensa&notif=tambahkosong&jenis=Jenis Lensa");
    }else if(empty($id_merk)){
        header("Location:index.php?include=lensa/tambah&data=$id_lensa&notif=tambahkosong&jenis=Merk");
    }else if(empty($nama)){
        header("Location:index.php?include=lensa/tambah&data=$id_lensa&notif=tambahkosong&jenis=Nama");
    }else if(empty($focal_length)){
        header("Location:index.php?include=lensa/tambah&data=$id_lensa&notif=tambahkosong&jenis=Focal Length");
    }else if(empty($maximum_aperture)){
        header("Location:index.php?include=lensa/tambah&data=$id_lensa&notif=tambahkosong&jenis=Max Apperture");
    }else if(empty($mount_type)){
        header("Location:index.php?include=lensa/tambah&data=$id_lensa&notif=tambahkosong&jenis=Mount Type");
    }else if(empty($format)){
        header("Location:index.php?include=lensa/tambah&data=$id_lensa&notif=tambahkosong&jenis=Format");
    }else if(empty($harga)){
        header("Location:index.php?include=lensa/tambah&data=$id_lensa&notif=tambahkosong&jenis=Harga");
    }else if(!move_uploaded_file($lokasi_file,$direktori)){
        header("Location:index.php?include=lensa/tambah&data=$id_lensa&notif=tambahkosong&jenis=Foto");
    }else{
        $sql = "INSERT INTO `lensa` (`id_jenis`,`id_merk`,`nama`,`focal_length`,`maximum_aperture`,`mount_type`,`format`,`harga`,`foto`)
                VALUES ('$id_jenis','$id_merk','$nama','$focal_length','$maximum_aperture','$mount_type','$format','$harga','$nama_file')";
        
        //echo $sql;
        mysqli_query($koneksi,$sql);
        header("Location:index.php?include=lensa&notif=tambahberhasil");
    }
?>