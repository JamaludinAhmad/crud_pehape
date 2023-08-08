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
                    <td>id</td>
                    <td>nama</td>
                    <td>alamat</td>
                    <td>umur</td>
                    <td>hapus</td>
                    <td>edit</td>
                </tr>
            </thead>
    
            <tbody>
                <?php
                    include_once('koneksi.php');
                    
                    $hasil = mysqli_query($conn, "SELECT * FROM data");
    
                    while($data = mysqli_fetch_array($hasil)){
                        echo ("<tr class=\"baris\">");
                        echo ("<td>".$data['id']."</td>");
                        echo ("<td>".$data['nama']."</td>");
                        echo ("<td>".$data['alamat']."</td>");
                        echo ("<td>".$data['umur']."</td>");
                        $link = "delete.php?id=".$data['id'];
                        echo ('<td><a href="'.$link.'"<p>hapus</p></a></td>');
                        $linkedit = "edit.php?id=$data[id]";
                        echo ('<td><a href="'.$linkedit.'"<p>edit</p></a></td>');
                        echo ("</tr>");
                    }
    
                ?>
            </tbody>
        </table>
    </div>
        
</body>
</html>