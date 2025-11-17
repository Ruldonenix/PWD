<?php
    require_once "mahasiswa.php";

    $mahasiswa = New Mahasiswa();

    $mahasiswa->setMahasiswa(047, "Nicky", "IF B");
    $mahasiswa->masukKelas();

    // $mahasiswa->setMahasiswa(064, "Syehan", "IF B");
    // $mahasiswa->masukKelas();

    echo "<br> Nama : ".$mahasiswa->getNama();