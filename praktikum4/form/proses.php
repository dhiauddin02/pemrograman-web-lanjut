<?php
echo "Nama: ".$_POST['nama']."<br>";
echo "Email: ".$_POST['email']."<br>";
echo "Jenis Kelamin: ";
if (isset($_POST['jkpria'])) {
    echo
    "Pria" . "<br>";
}
if (isset($_POST['jkwanita'])) {
    echo
    "Wanita" . "<br>";
}
echo "Tanggal Lahir: ".$_POST['tanggal'] . "<br>";

echo "keahlian: ";
if(isset($_POST['1'])){
    echo "Memasak";
}
if(isset($_POST['2'])){
    echo " Penyelam handal";
}
if(isset($_POST['3'])){
    echo " Pendongeng Handal";
}
?>