<?php
$konek = mysqli_connect("localhost", "root", ""); //buka koneksi
if($konek){
    echo "koneksi berhasil <br>";
}
else {
    echo "koneksi gagal";
}

mysqli_select_db($konek, "db_kelas2b"); //pilih database

$data = mysqli_query($konek, "Select * from tb_mahasiswa"); //query database

 $tampil = mysqli_fetch_array($data);


// echo $tampil['nama'];

while($tampil = mysqli_fetch_array($data)){
    echo "Nama : ".$tampil['nama']."<br>";
    echo "Nim : ".$tampil['nim']."<br>";
    echo "Keahlian : ".$tampil['keahlian']."<br><br>";
}


?>