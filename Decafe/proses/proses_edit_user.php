<?php
include "connect.php";
$id = isset($_POST['id']) ? htmlentities($_POST['id']) : "";
$name = isset($_POST['nama']) ? htmlentities($_POST['nama']) : "";
$username = isset($_POST['username']) ? htmlentities($_POST['username']) : "";
$level = isset($_POST['level']) ? htmlentities($_POST['level']) : "";
$nohp = isset($_POST['nohp']) ? htmlentities($_POST['nohp']) : "";
$alamat = isset($_POST['alamat']) ? htmlentities($_POST['alamat']) : "";
$password = isset($_POST['password']) ? htmlentities($_POST['password']) : "";

if(!empty($_POST['edit_user_validate'])){
    $select = mysqli_query($conn, "select * from tb_user where username = '$username'");
    if (mysqli_num_rows($select) > 0) {
        $message = '<script>alert("Username yang telah dimasukan telah ada");
         window.location="../users"</script>
         </script>';
    } else {
    $query = mysqli_query($conn, "update tb_user set nama='$name', username='$username', level='$level', nohp='$nohp', alamat='$alamat'  where id='$id'");
    if($query){
        $message = '<script>alert("Data berhasil diupdate");
         window.location="../users"</script>
         </script>';
    }else {
        $message = '<script>alert("Data gagal diupdate")</script>';
       
    }
}}
echo $message;
?>