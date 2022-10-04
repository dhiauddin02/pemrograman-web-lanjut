<?php
$username = "adminadmin";
$pass = "passpass";

$_POST['username'];
$_POST['password'];
if($_POST['username'] =="" && $_POST['password'] == ""){
    echo "username dan password tidak boleh kosong";
}
elseif(strlen($_POST['username']) <8 && strlen($_POST['username']) < 8){
echo "minimal harus 8 karakter";
}
else{
    if($_POST['username'] == $username && $_POST['password'] == $pass){
        echo "selamat datang";
    }
    else {
        echo "username atau password anda salah";
    }
}
//echo strlen($username);
?>