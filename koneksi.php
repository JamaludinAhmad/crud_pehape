<?php
    $servername = "localhost";
    $database = "kursusonline";
    $username = "root";
    $password = "";

    $conn = mysqli_connect($servername, $username, $password, $database);

    if(!$conn){
        echo ("tidak terkoneksi");
    }
    // echo("koneksi berhasil");
    
    // mysqli_close($conn);
?>