<?php
    include('crud.php');
    $aksdata = new Crud();

    $hasil = $aksdata->baca_semua_data();
    foreach ($hasil as $data){
        echo ("$data[nama]");
        echo "<br/>";
    }
?>