<?php
    require_once "mobil.php";

    $mobil = new Mobil();
    $mobil->merk = "Ayla";
    $mobil->roda = 4;

    $mobil ->maju_kedepan();
    // $mobil ->mundur_kebelakang();
    // $mobil ->merk_mobil();

    echo "Merek mobil yang maju adalah ". $mobil->merk;
?>