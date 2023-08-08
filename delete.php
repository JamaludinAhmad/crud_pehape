<?php
    include_once('koneksi.php');

    $id = $_GET['id'];

    $query = "DELETE FROM data WHERE id = '$id'";
    // echo ($query);
    mysqli_query($conn, $query);

    header("Location:tampildepan.php")
?>