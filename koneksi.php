<?php
    $servername = "localhost";
    $database = "manusia";
    $username = "root";
    $password = "";

    $conn = mysqli_connect($servername, $username, $password, $database);

    if(!$conn){
        echo ("tidak terkoneksi");
    }
    // echo("koneksi berhasil");
    
    // mysqli_close($conn);
?>