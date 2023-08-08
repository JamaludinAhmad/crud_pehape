<?php
    include ("crud.php");
    $aksdata = new Crud();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="style.css">
<title>Document</title>
</head>
<body>

    <nav class="navbar">
        <div class="isi">
            <a href="tampildepan.php">Tampil Data</a>
            <a href="tambah.php">Tambah Data</a>
        </div>
    </nav>

    <div>

        <table border="1">
            <thead>
                <tr class="baris">
                    <td>no</td>
                    <td>nama</td>
                    <td>alamat</td>
                    <td>umur</td>
                    <td>hapus</td>
                    <td>edit</td>
                </tr>
            </thead>
    
            <tbody>
                <?php
                $datas = $aksdata->baca_semua_data();

                $i = 1;
                foreach($datas as $data){
                    $linkedit = "edit.php?id=" .$data['id'];
                    $linkhapus = "delete.php?id=" .$data['id'];

                    echo"
                        <tr class='baris'>
                            <td>$i</td>
                            <td>$data[nama]</td>
                            <td>$data[alamat]</td>
                            <td>$data[umur]</td>
                            <td><a href='$linkhapus'>hapus</a></td>
                            <td><a href='$linkedit'>edit</a></td>
                        </tr>
                    ";
                    $i++;
                }
                ?>
            </tbody>
        </table>
    </div>
        
</body>
</html>