<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
</head>

<body>
    <form action="proses.php" method="post">
        <table>
            <tr>
                <td>nama</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="email" name="email"></td>

            </tr>
            <tr>
                <td>Tanggal Lahir</td>
                <td><input type="date" name="tanggal"></td>
            </tr>
            <tr>
                <td>tanggal</td>
                <td><select name="tanggal" id="">
                   
<?php
                           for ($i=1; $i <= 30; $i++) { ?>
                             "<option value="<?=$i?>"><?=$i?></option>"   
                          <?php }?>
                    </select></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td><input type="radio" name="jkpria">Pria</td>
                <td><input type="radio" name="jkwanita">Wanita</td>
            </tr>
            <tr>
                <td>Keahlian</td>
                <td><input type="checkbox" name="1">memasak</td>
                <td><input type="checkbox" name="2">penyelam handal</td>
                <td><input type="checkbox" name="3">pendongeng handal</td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="kirim"></td>
            </tr>
        </table>
    </form>
</body>

</html>