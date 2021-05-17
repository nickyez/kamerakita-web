<?php 
    if(isset($_POST['submit'])){
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $level = $_POST['level'];
        if(empty($nama)){
            header("Location:index.php?include=user/tambah&notif=tambahkosong&jenis=nama");
        }else if(empty($email)){
            header("Location:index.php?include=user/tambah&notif=tambahkosong&jenis=email");
        }else if(empty($username)){
            header("Location:index.php?include=user/tambah&notif=tambahkosong&jenis=username");
        }else if(empty($password)){
            header("Location:index.php?include=user/tambah&notif=tambahkosong&jenis=password");
        }else if($_FILES['foto']['name'] == ""){
            header("Location:index.php?include=user/tambah&notif=tambahkosong&jenis=foto");
        }else{
            $lokasi_file = $_FILES['foto']['tmp_name'];
            $nama_file = $_FILES['foto']['name'];
            $direktori = 'foto/'.$nama_file;
            if(move_uploaded_file($lokasi_file, $direktori)){
                $sql = "INSERT INTO `user` (`nama`,`email`,`username`,`password`,`level`,`foto`) values ('$nama','$email','$username',MD5('$password'),'$level','$nama_file')";
                mysqli_query($koneksi, $sql);
            }else{
                $sql = "INSERT INTO `user` (`nama`,`email`,`username`,`password`,`level`) values ('$nama','$email','$username',MD5('$password'),'$level')";
                mysqli_query($koneksi, $sql);
            }
            header("Location:index.php?include=user&notif=tambahberhasil");
        }
    }
?>