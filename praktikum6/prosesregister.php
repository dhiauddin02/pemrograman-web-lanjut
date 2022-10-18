<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $repassword = $_POST['repassword'];
    if ($_POST['nama'] == "" ||$_POST['email'] == "" ||$_POST['username'] == "" || $_POST['password'] == "" || $_POST['repassword'] == "") {
        echo '<script type="text/Javascript">';
        echo 'alert("pastikan semua data harus terisi")';
        echo '</script>';
    } elseif (strlen($_POST['password']) < 8 || strlen($_POST['repassword']) < 8) {
        echo '<script type="text/Javascript">';
        echo 'alert("password minimal harus 8 karakter")';
        echo '</script>';
    }
     elseif (strlen($_POST['password']) != strlen($_POST['repassword'])) {
        echo '<script type="text/Javascript">';
        echo 'alert("pastikan password dan repassword harus sama")';
        echo '</script>';
    }
    else {
        $conn = mysqli_connect("localhost", "root", "", "db_login") or die("koneksi database gagal");
        $hasil = mysqli_query($conn, "insert into user(nama, username, email, password) values('$nama', '$email', '$username', '$password')");
        echo '<script type="text/Javascript">';
        echo 'alert("Simpan data berhasil")';
        echo '</script>';
    }
    


    ?>
</body>

</html>