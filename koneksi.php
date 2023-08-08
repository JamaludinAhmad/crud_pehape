<?php
    class Koneksi{
        public $conn;

        public function __construct(){
            $servername = "localhost";
            $database = "manusia";
            $username = "root";
            $password = "";
        
            $this->conn = mysqli_connect($servername, $username, $password, $database);
        
            if(!$this->conn){
                echo ("tidak terkoneksi");
            }
            echo("koneksi berhasil");
        }
        
        // mysqli_close($conn);

    }
?>