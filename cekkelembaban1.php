<?php
    //buatlah koneksi ke database
    $konek = mysqli_connect("localhost", "root", "", "dbmultisensor");

    //baca data dari tabel tb_sensor
    $sql = mysqli_query($konek, "select * from tb_sensor order by id desc"); //data terakhir akan berada diatas

    //baca data paling atas
    $data = mysqli_fetch_array($sql);
    $kelembaban1 = $data['kelembaban1'];

    //uji, apabila nilai kelembaban1 belum ada, maka anggap kelembaban1 = 0
    if($kelembaban1== "") $kelembaban1 = 0;

    //cetak nilai kelembaban1
    echo $kelembaban1;

?>