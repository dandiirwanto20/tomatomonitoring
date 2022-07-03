<?php
    //koneksi ke database
    $konek = mysqli_connect("localhost", "root", "", "dbmultisensor");

    //baca data yang dikirim data esp32
    date_default_timezone_set('Asia/Jakarta');
    $suhu = $_GET['suhu'];
    $kelembaban1 = $_GET['kelembaban1'];
    $kelembaban2 = $_GET['kelembaban2'];

    //simpan ke tabel tb_sensor

    //auto increment = 1 / mengembalikan ID menjadi 1 apabila dikosongkan
    mysqli_query($konek, "ALTER TABLE tb_sensor AUTO_INCREMENT=1");
    //simpan data sensor ke tabel tb_sensor
    $simpan = mysqli_query($konek, "INSERT INTO tb_sensor(suhu, kelembaban1, kelembaban2) VALUES('$suhu', '$kelembaban1', '$kelembaban2')");

    //uji simpan untuk memberikan respon 
    if($simpan){
        echo "Berhasil dikirim";
    }else{
        echo "Gagal Terkirim";
    }
?> 