<?php
session_start();

$username = $_POST['username'];
$password = $_POST['password'];

if ($username == "" || $password == "") {
?>
    <script>
        alert("username dan password tidak boleh kosong");
        document.location = 'formlogin.php';
    </script>
<?php


} elseif (strlen($_POST['username']) < 8 || strlen($_POST['password']) < 8) {
    echo '<script type="text/Javascript">';
    echo 'alert("minimal harus 8 karakter")';
    echo '</script>';
} else {
    $conn = mysqli_connect("localhost", "root", "", "db_login") or die("koneksi gagal");
    $hasil = mysqli_query($conn, "select * from user where username = '$username' and password = '$password'");
    $cek = mysqli_num_rows($hasil);

    if ($cek) {
        $_SESSION['username2b'] = $username;
        //echo "selamat datang";
        header("Location:dasboard.php");
    } else {
        echo '<script type="text/Javascript">';
        echo 'alert("username atau password salah")';
        echo '</script>';
    }
}
?>