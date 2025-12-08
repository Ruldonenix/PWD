<?php
    class Mobil {
        public $merek, $warna, $ban;
    }


    $mobil = new Mobil();
    $mobil->merek= "Diablo <br>";
    $mobil->warna= "Hitam";
    $mobil->ban= "4";
    

    $json = json_encode($mobil, JSON_PRETTY_PRINT);

    $jsonObject = json_decode($json);

    echo $jsonObject->merek;
    file_put_contents("data.json", $json);
    $read = json_decode(file_get_contents("Mahasiswa.json"));
    foreach ($read as $value) {
        echo $value. "<br>";
    }
?>