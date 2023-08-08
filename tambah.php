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

    
    <form action="tambah.php" method="post" name="form_tambah">
        <p>masukan nama: <input type="text" name="nama"></p>
        <p>masukan alamat <input type="text" name="alamat"></p>
        <p>masukan umur <input type="text" name="umur"></p>
        <input type="submit" name="Submit">
    </form>

    <?php

        if(isset($_POST['Submit'])){
            $name = $_POST['nama'];
            $alamat = $_POST['alamat'];
            $umur = $_POST['umur'];

            include_once('koneksi.php');
            $qury = ("INSERT INTO data(nama, alamat, umur) VALUES('$name', '$alamat', '$umur')");
            // echo($qury);
            $result = mysqli_query($conn, $qury);

            if($result){
                echo "<script>
                alert('berhasil ditambah');
                window.location.href='tampildepan.php';
                </script>";
            }
            else{
                echo "<script>
                alert('data tidak berhasil ditambah, ada kesalahan');
                window.location.href='tampildepan.php';
                </script>";
            }
            // Header("Location: tampildepan.php");
            // echo('eaeaea');
        }

    ?>

</body>
</html>