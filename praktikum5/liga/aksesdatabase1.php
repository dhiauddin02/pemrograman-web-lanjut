<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>koneksi database mysql</title>
</head>
<body>
    <h1>koneksi databsae dengan mysqli_fetch_array</h1>
    <?php
    $conn = mysqli_connect("localhost", "root","", "db_juara") or die("koneksi gagal");
           
    $hasil = mysqli_query($conn, "select * from liga");
    while ($row = mysqli_fetch_array($hasil)) {
        echo "Liga ".$row["negara"];
        echo "mempunyai". $row[2];
        echo "wakil di liga champion <br>";
    }
    ?>
</body>
</html>