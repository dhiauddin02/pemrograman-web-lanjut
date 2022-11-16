<?php
session_start();
include "connect.php";
$username = isset($_POST['username']) ? htmlentities($_POST['username']) : "";
$password = isset($_POST['password']) ? htmlentities($_POST['password']) : "";
if(!empty($_POST['submit_validate'])){
    $query = mysqli_query($conn, "select * from tb_user where username = '$username' && password = '$password'");
    $hasil = mysqli_fetch_array($query);
if($hasil){
    $_SESSION['username_decafe'] = $username;
    header('location:../dashboard');
}
else {?>
<script>
    alert("username atau password yang anda masukan salah");
    window.location='../login';
</script>
<?php
    
}
}
?>