<?php
    class Mobil{
        public $merk, $roda;

        function maju_kedepan(){
            echo "Mobil bergerak maju kedepan<br>";
        }

        // function mundur_kebelakang(){
        //     echo "Mobil bergerak mundur kebelakang<br>";
        // }

        function merk_mobil(){
            $this->merk = "Rush";
        }
    }
?>