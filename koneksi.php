<?php
    $servername = "localhost";
    $database = "kursusonline";
    $username = "root";
    $password = "";

    $conn = mysqli_connect($servername, $username, $password, $database);

    if(!$conn){
        echo ("tidak terkoneksi");
    }

    echo("koneksi berhasil");

    // $result = mysqli_query($conn, "SELECT * FROM tbl_kursus");

    //     while($data = mysqli_fetch_array($result)){
    //         echo $data['nama_kursus'];
    //         echo ('<br/>');
    //     }
    
    // mysqli_close($conn);
?>