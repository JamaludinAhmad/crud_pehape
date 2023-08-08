<?php
    include('crud.php');

    $id = $_GET['id'];

    $aksdata = new Crud();
    $aksdata->delete_data_by_id($id);

    echo "<script>
    alert('berhasil dihapus');
    window.location.href='tampildepan.php';
    </script>";
    // header("Location:tampildepan.php")
?>