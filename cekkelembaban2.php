<?php
    //buatlah koneksi ke database
    $konek = mysqli_connect("localhost", "root", "", "dbmultisensor");

    //baca data dari tabel tb_sensor
    $sql = mysqli_query($konek, "select * from tb_sensor order by id desc"); //data terakhir akan berada diatas

    //baca data paling atas
    $data = mysqli_fetch_array($sql);
    $kelembaban2 = $data['kelembaban2'];

    //uji, apabila nilai kelembaban2 belum ada, maka anggap kelembaban2 = 0
    if($kelembaban2== "") $kelembaban2 = 0;

    //cetak nilai kelembaban2
    echo $kelembaban2;

?>