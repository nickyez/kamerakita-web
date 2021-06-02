<?php
    if(isset($_SESSION['id_lensa'])){
        $id_lensa = $_SESSION['id_lensa'];
        $id_jenis= $_POST['jenis'];
        $id_merk = $_POST['merk'];
        $nama = $_POST['nama'];
        $focal = $_POST['focal_length'];
        $max = $_POST['maximum_aperture'];
        $mount = $_POST['mount_type'];
        $format = $_POST['format'];
        $harga = $_POST['harga'];
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
        if(empty($id_jenis)){
            header("Location:index.php?include=lensa/edit&data=$id_lensa&notif=editkosong&jenis=jenis");
        }else if(empty($id_merk)){
            header("Location:index.php?include=lensa/edit&data=$id_lensa&notif=editkosong&jenis=nama");
        }else if(empty($nama)){
            header("Location:index.php?include=lensa/edit&data=$id_lensa&notif=editkosong&jenis=merk");
        }else if(empty($focal)){
            header("Location:index.php?include=lensa/edit&data=$id_lensa&notif=editkosong&jenis=focal_length");
        }else if(empty($max)){
            header("Location:index.php?include=lensa/edit&data=$id_lensa&notif=editkosong&jenis=maximum_aperture");
        }else if(empty($mount)){
            header("Location:index.php?include=lensa/edit&data=$id_lensa&notif=editkosong&jenis=mount_type");
        }else if(empty($format)){
            header("Location:index.php?include=lensa/edit&data=$id_lensa&notif=tambahkosong&jenis=Format");
        }else if(empty($harga)){
            header("Location:index.php?include=lensa/edit&data=$id_lensa&notif=tambahkosong&jenis=Harga");
        }else{
            $lokasi_file = $_FILES['foto']['tmp_name'];
            $nama_file = $_FILES['foto']['name'];
            $direktori = 'produk/lensa/'.$nama_file;
            if(move_uploaded_file($lokasi_file,$direktori)){
                if(!empty($foto)){ unlink("produk/lensa/$foto");
            }
            $sql = "UPDATE `lensa` 
                    SET `id_jenis`='$id_jenis',`id_merk`='$id_merk',
                        `nama`='$nama',`focal_length`='$focal',
                        `maximum_aperture`='$max',`mount_type`='$mount',
                        `format`='$format',
                        `harga`='$harga',
                        `foto`='$nama_file'
            WHERE `id_lensa`='$id_lensa'";
            mysqli_query($koneksi,$sql);
        }else{
            $sql = "UPDATE `lensa` 
                    SET `id_jenis`='$id_jenis',`id_merk`='$id_merk',
                        `nama`='$nama',`focal_length`='$focal',
                        `maximum_aperture`='$max',`mount_type`='$mount',
                        `format`='$format',`harga`='$harga'
                    WHERE `id_lensa`='$id_lensa'";
            mysqli_query($koneksi,$sql);
        } 
   header("Location:index.php?include=lensa&notif=editberhasil");
    } }
?>