<?php

class Manusia {
    var $nama;
    var $nim;

    function tampilkan_nama()
    {
        return "Nama : Agung Hideyoshi </br>";
    }

    function tampilkan_nim()
    {
    return "NIM : S1TIS210398";
    }
}

$mahasiswa = new Manusia();

echo $mahasiswa->tampilkan_nama();
echo $mahasiswa->tampilkan_nim();