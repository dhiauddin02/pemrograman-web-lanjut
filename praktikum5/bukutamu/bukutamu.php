<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buku tamu</title>
</head>

<body>
    <h1>Buku atmu untuk database MYSQL</h1>
    <form action="bukutamu_add_form.php" method="post">
        Nama : <input type="text" name="nama" size="35" maxlength="50"><br>
        Email : <input type="text" name="email" size="35" maxlength="50"><br>
        Komentar : <textarea name="komentar" cols="30" rows="5"></textarea><br>
        <input type="submit" value="simpan">
        <input type="reset" value="reset">
    </form>
</body>

</html>