<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>simpan buku tamu</title>
</head>

<body>
    <h1>simpan buku tamu MYSQL</h1>
    <?php
   $nama = $_POST['nama'];
   $email = $_POST['email'];
   $komentar = $_POST['komentar'];
    $conn=mysqli_connect("localhost", "root", "", "db_bukutamu") or die("koneksi gagal");
    echo "Nama :$nama<br>";
    echo "Email :$email<br>";
    echo "Komentar :$komentar<br>";
    $hasil = mysqli_query($conn, "insert into bukutamu(nama, email, komentar) values('$nama', '$email', '$komentar')");
    echo "simpan buku tamu berhasil dilakukan";
    ?>
</body>
</html>
