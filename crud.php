<?php
    class Crud{
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

            // echo("koneksi berhasil");
        }

        function masukan_data($nama, $alamat, $umur){
            $query = "INSERT INTO data (nama, alamat, umur) VALUE(?, ?, ?)";

            $proses = $this->conn->prepare($query);
            $proses->bind_param("ssi", $nama, $alamat, $umur);
            $proses->execute();
            $proses->close();
        }

        function baca_semua_data(){
            $query = "SELECT * FROM data";

            $result = mysqli_query($this->conn, $query);
            $datas = mysqli_fetch_all($result, MYSQLI_ASSOC);
            return $datas;
        }

        function ubah_data_by_id($id, $nama, $alamat, $umur){
            $query = "UPDATE data SET nama = ?, alamat = ?, umur = ? WHERE id = ?";

            $proses = $this->conn->prepare($query);
            $proses->bind_param("ssii", $nama, $alamat, $umur, $id);
            $proses->execute();
            $proses->close();
            
        }

        function delete_data_by_id($id){
            $query = "DELETE FROM data WHERE id = ?";

            $proses = $this->conn->prepare($query);
            $proses->bind_param("i", $id);
            $proses->execute();
            $proses-> close();
        }
    }
?>

<?php
    $c = New Crud();
    
    $c->masukan_data("SAYA", "DI", 94);
?>