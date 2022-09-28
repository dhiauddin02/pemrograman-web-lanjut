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
$nama = $_GET['nama'];
echo "$nama <br>";
$email = $_GET['email'];
echo "$email <br>";
$username = $_GET['username'];
echo "$username <br>";
$password = $_POST['password'];
echo "$password <br>";
$tglLahir = $_GET['tgllahir'];
echo "$tglLahir <br>";
$alamat = $_GET['alamat'];
echo "$alamat <br>";
$agama = $_GET['agama'];
$nohp = $_REQUEST['nohp'];
echo "$nohp <br>";
$rememberme = $_GET['rememberme'];
echo "$rememberme";
?>
</body>
</html>
