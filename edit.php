<?php
    include_once('crud.php');
    $aksdata = new Crud();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <nav class="navbar">
        <div class="isi">
            <a href="tampildepan.php">Tampil Data</a>
            <a href="tambah.php">Tambah Data</a>
        </div>
    </nav>

    <?php
        $id = $_GET['id'];
        $hasil = $aksdata->get_data_by_id($id);
        $namaasal = $hasil['nama'];
        $alamatasal = $hasil['alamat'];
        $umurasal = $hasil['umur'];
    ?>
        
    <form action="edit.php?id=<?php echo ($id);?>" method="post" name="form_edit">
        <p>masukan nama: <input type="text" name="nama" Value=<?php echo $namaasal?>></p>
        <p>masukan alamat <input type="text" name="alamat" Value=<?php echo $alamatasal?>></p>
        <p>masukan umur <input type="text" name="umur" Value=<?php echo $umurasal?>></p>
        <input type="submit" name="Submit">
    </form>

    <?php
        if(isset($_POST['Submit'])){
            $nama = $_POST['nama'];
            $alamat = $_POST['alamat'];
            $umur = $_POST['umur'];
            $aksdata->ubah_data_by_id($id, $nama, $alamat, $umur);

            echo"
            <script>
                alert('data berhasil diedit');
                window.location.href= 'tampildepan.php';
            </script>
            ";
        }
    ?>

</body>
</html>