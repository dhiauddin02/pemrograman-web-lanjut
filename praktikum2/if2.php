<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <?php
    $d = date("D"); 
    if($d == "Sat")
    echo "Selamat berakhir pekan!";
    elseif ($d == "Fri") 
    echo "Selamat menunaikan sholat jum`at bagi yang muslim!";
    else {
        echo "selamat belajar!";
    }
    ?>
</body>
</html>