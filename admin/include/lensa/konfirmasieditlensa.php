<?php 
if(isset($_SESSION['id_lensa'])){
    $id_lensa = $_SESSION['id_lensa'];
    $id_jenis_lensa = $_POST['jenis_lensa'];
    $nama_produk = $_POST['lensa'];
    $id_merk = $_POST['merk'];
    // Spefikasi lensa
    $focal_length = $_POST['focal_length'];
    $max_aperture = $_POST['max_aperture'];
    $mount_type = $_POST['mount_type'];
    $format = $_POST['format'];
    $harga = $_POST['harga'];
    // foto 
    $lokasi_file = $_FILES['foto']['tmp_name'];
    $nama_file = $_FILES['foto']['name'];
    $direktori = 'produk/lensa/'.$nama_file;
    //get foto 
    $sql_f = "SELECT `foto` FROM `lensa` WHERE `id_lensa`='$id_lensa'";
    $query_f = mysqli_query($koneksi,$sql_f);
    while($data_f = mysqli_fetch_row($query_f)){
        $foto = $data_f[0];
        //echo $foto;
    }
    if(empty($id_jenis_lensa)){
        header("Location:edit-lensa-data-$id_lensa"."_notif-editkosong-jenis-jenislensa");
    }else if(empty($nama_produk)){
        header("Location:edit-lensa-data-$id_lensa"."_notif-editkosong-jenis-namaproduk");
    }else if(empty($id_merk)){
        header("Location:edit-lensa-data-$id_lensa"."_notif-editkosong-jenis-merk");
    }else if($_POST['tag']==""){
        header("Location:edit-lensa-data-$id_lensa"."_notif-editkosong-jenis-tag");
    }
    // Spesifikasi lensa
    else if(empty($focal_length)){
        header("Location:edit-lensa-data-$id_lensa"."_notif-editkosong-jenis-focallength");
    }else if(empty($max_aperture)){
        header("Location:edit-lensa-data-$id_lensa"."_notif-editkosong-jenis-maximumaperture");
    }else if(empty($mount_type)){
        header("Location:edit-lensa-data-$id_lensa"."_notif-editkosong-jenis-mounttype");
    }else if(empty($format)){
        header("Location:edit-lensa-data-$id_lensa"."_notif-editkosong-jenis-format");
    }else if(empty($harga)){
        header("Location:edit-lensa-data-$id_lensa"."_notif-editkosong-jenis-harga");
    }else{
        $lokasi_file = $_FILES['foto']['tmp_name'];
        $nama_file = $_FILES['foto']['name'];
        $direktori = 'produk/lensa/'.$nama_file;
        if(move_uploaded_file($lokasi_file,$direktori)){
            if(!empty($foto)){ 
                unlink("produk/lensa/$foto");
            }
            $sql = "UPDATE `lensa` set 
            `nama`='$nama_produk',`id_jenis`='$id_jenis_lensa',`id_merk`='$id_merk',`focal_length`='$focal_length',`maximum_aperture`='$max_aperture',`mount_type`='$mount_type',`format`='$format',`harga`='$harga',`foto`='$foto' WHERE `id_lensa`='$id_lensa'";
            mysqli_query($koneksi,$sql);
        }else{
            $sql = "UPDATE `lensa` set 
            `nama`='$nama_produk',`id_jenis`='$id_jenis_lensa',`id_merk`='$id_merk',`focal_length`='$focal_length',`maximum_aperture`='$max_aperture',`mount_type`='$mount_type',`format`='$format',`harga`='$harga' WHERE `id_lensa`='$id_lensa'";
            mysqli_query($koneksi,$sql);
        }
        //hapus tag
        $sql_d = "delete from `tag_lensa` where `id_lensa`='$id_lensa'";
        mysqli_query($koneksi,$sql_d);
        //tambah tag
        if(!empty($_POST['tag'])){
            foreach($_POST['tag'] as $id_tag){
                $sql_i = "insert into `tag_lensa` (`id_lensa`, `id_tag`) 
                values ('$id_lensa', '$id_tag')";
                mysqli_query($koneksi,$sql_i);
            }
        }
        header("Location:lensa_notif=editberhasil");
    }
}
?>