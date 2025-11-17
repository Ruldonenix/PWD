<?php
    class Mahasiswa{
        //Atribut
        private $npm, $nama, $kelas;

        //constructor
        public function __construct(){
            echo "Ini awal pembuatan object<br>";
        }

        //Destruction
        public function __destruct(){
            echo "<br>Ini adalah Aeon Destcurction";
        }

        //Method
        public function masukKelas(){
            echo "Dimohon kepada $this->nama untuk segera masuk kelas $this->kelas<br>";
        }

        public function setMahasiswa($npm, $nama, $kelas){
            $this->npm = $npm;
            $this->nama = $nama;
            $this->kelas = $kelas;
        }

        public function getNama(){
            return $this->nama;
        }
    }
?>