<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="tambah.php" method="post" name="form_tambah">
        <p>masukan nama kursus: <input type="text" name="namakursus"></p>
        <p>masukan mentor dengan id : <input type="text" name="idmentor"></p>
        <p>masukan kategori: <input type="text" name="kategori"></p>
        <input type="submit" name="Submit">
    </form>

    <?php

        if(isset($_POST['Submit'])){
            $name = $_POST['namakursus'];
            $id = $_POST['idmentor'];
            $kategori = (int)$_POST['kategori'];

            echo($name. $id. $kategori);

            include_once('koneksi.php');

            $result = mysqli_query($conn, "INSERT INTO tbl_kursus(nama_kursus,id_mentor,kategori) VALUES('$name','$id','$kategori')");
            // echo('eaeaea');
        }

    ?>

</body>
</html>