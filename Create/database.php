<?php

    // variabel database
    $namaserver = 'localhost';
    $namapengguna = 'root';
    $katasandi = "";

    // koneksi ke database
    $koneksi =new mysqli( $namaserver, $namapengguna, $katasandi);
    if($koneksi-> connect_error)
    {
        echo "koneksi gagal!";
    }else {
        echo "koneksi berhasil!";
    }

    // proses membuat database dengan perintah SQL 
    $sql = 'CREATE DATABASE db_wonefilm';

    // notifikasi jika database berhasil / gagal dibuat
    if($koneksi->query($sql) === TRUE) {
        echo "<h1> Database berhasil dibuat.</h1>";
    }else {
        echo "<h1> Database gagal dibuat.</h1>";
    }