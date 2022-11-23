<?php
include "connect.php";
$id = isset($_POST['id']) ? htmlentities($_POST['id']) : "";

if(!empty($_POST['delete_user_validate'])){
    $query = mysqli_query($conn, "update tb_user set password='password' where id='$id'");
    if($query){
        $message = '<script>alert("Password berhasil Direset");
         window.location="../users"</script>
         </script>';
    }else {
        $message = '<script>alert("Password gagal Direset")</script>';
    }
}
echo $message;
?>
