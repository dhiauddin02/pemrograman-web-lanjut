<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <?php
    $x = 2;
    switch ($x) {
        case 1:
            echo "nomor satu";
            break;
        case 2:
            echo "nomor dua";
            break;
        case 3:
            echo "nomor tiga";
            break;
        
        default:
            echo "bukan diantara nomor satu dan tiga";
            break;
    }
    ?>
</body>
</html>