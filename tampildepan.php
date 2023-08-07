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
            <a href="tambah.html">Tambah Data</a>
            <a href="tambah.html">Ubah Data</a>
            <a href="tambah.html">Delete Data</a>
        </div>
    </nav>

    <div>

        <table border="1">
            <thead>
                <tr class="baris">
                    <td>id_kursus</td>
                    <td>nama_kursus</td>
                    <td>id_mentor</td>
                </tr>
            </thead>
    
            <tbody>
                <?php
                    include_once('koneksi.php');
                    
                    $hasil = mysqli_query($conn, "SELECT * FROM tbl_kursus");
    
                    while($data = mysqli_fetch_array($hasil)){
                        echo ("<tr class=\"baris\">");
                        echo ("<td>".$data['id_kursus']."</td>");
                        echo ("<td>".$data['nama_kursus']."</td>");
                        echo ("<td>".$data['id_mentor']."</td>");
                        echo ("</tr>");
                    }
    
                ?>
            </tbody>
        </table>
    </div>
        
</body>
</html>