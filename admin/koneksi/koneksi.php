<?php
    $koneksi = mysqli_connect(
        'localhost', 
        'root',
        '',
        'kuliah_sewa_kamera'
    );

    if(!$koneksi) {
        die('Error Koneksi: '.mysqli_connect_errno());
    }
?>