<?php

define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'pw1_4');

class Database {
    public $mysqli;
    public $query;

    function __construct(){
        $this->mysqli = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

        if($this->mysqli->connect_errno){
        echo "Koneksi gagal : " . $this->mysqli->connect_error;
        }
    }

    //SELECT * FROM tabel
    function table($table){
        $this->query = "SELECT * FROM $table";
        return $this;
    }

    function get(){
        $result = $this->mysqli->query($this->query);
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function insert($arr = array())
    {
        $this->query = str_replace('SELECT * FROM', 'INSERT INTO', $this->query);

        $columns = '';
        $vals = '';

        foreach ($arr as $key => $value) {
            $columns .= $key . ", ";
            $vals .= "'" . $value . "', ";
        }

        $this->query .= " (" . substr($columns, 0, -2) . ") VALUES (" . substr($vals, 0, -2) . ")";

        // echo $this->query;
        // prepare query
        $q = $this->mysqli->prepare($this->query) or die($this->mysqli->error);

        // eksekusi query
        // if (!$q) {
        //     die($this->mysqli->error);
        // }

        if ($q->execute()) {
            return true;
        }

        // $q->execute();
        // echo $this->query;
    }

    public function where($arr = array())
    {
        $sql = ' WHERE ';

        if (count($arr) == 1) {
            foreach ($arr as $key => $value) {
                $sql .= $key . ' = ' . $value;
            }
        } else {
            foreach ($arr as $key => $value) {
                $sql .= $key . " = '" . $value . "' AND ";
            }
            $sql = substr($sql, 0, -5);
        }

        $this->query .= $sql;
        return $this;
    }

    function update($arr = array()){
        $this->query = str_replace('SELECT * FROM','UPDATE', $this->query);

        $part = explode(' WHERE ', $this->query);
        $val = '';
        foreach($arr as $key => $value){
            $val .= $key . " = '" . $value . "',";
        }

        $this->query = $part[0] . " SET " . substr($val, 0, -1) . " WHERE " . $part[1];
        echo $this->query;
    }
}
