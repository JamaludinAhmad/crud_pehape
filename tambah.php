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
        <p>masukan id_kursus: <input type="text" name="id"></p>
        <p>masukan nama kursus: <input type="text" name="namakursus"></p>
        <p>masukan mentor dengan id : <input type="text" name="idmentor"></p>
        <p>masukan kategori: <input type="text" name="kategori"></p>
        <input type="submit" name="Submit">
    </form>

    <?php

        if(isset($_POST['Submit'])){
            $id = $_POST['id'];
            $name = $_POST['namakursus'];
            $idmen = $_POST['idmentor'];
            $kategori = $_POST['kategori'];

            include_once('koneksi.php');
            $qury = ("INSERT INTO tbl_kursus VALUES('$id', '$name', '$idmen', '$kategori')");
            echo($qury);
            $result = mysqli_query($conn, $qury);
            // echo('eaeaea');
        }

    ?>

</body>
</html>