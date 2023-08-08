<?php
    include_once('koneksi.php');

    $id = $_GET['id'];

    $query = "DELETE FROM data WHERE id = '$id'";
    // echo ($query);
    mysqli_query($conn, $query);
    echo "<script>
    alert('berhasil dihapus');
    window.location.href='tampildepan.php';
    </script>";
    // header("Location:tampildepan.php")
?>