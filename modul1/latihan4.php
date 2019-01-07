<?php
    $nama = "Muhammad Alfian";
    $kelas = "XIIR2";
    $alamat = "Banyuwangi";
    function tampil_nama(){
        global $nama;
        echo "Nama Saya : ".$nama;
    }
    function tampil_kelas(){
        global $kelas;
        echo "<br>Kelas Saya : ".$kelas;
    }
    function tampil_alamat(){
        global $alamat;
        echo "<br>Alamat Saya : ".$alamat;
    }
    tampil_nama();
    tampil_kelas();
    tampil_alamat();
?>