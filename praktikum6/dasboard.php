<?php
session_start();
if (empty($_SESSION['username2b'])) {
    header("Location:formlogin.php");
    exit;
}

?>
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
    echo "<h1>selamat datang</h1>";
    ?>
    <a href="logout.php"><input type="button" value="logout"></a>
</body>

</html>