<?php
include "connect.php";
$id = isset($_POST['id']) ? htmlentities($_POST['id']) : "";

if(!empty($_POST['delete_user_validate'])){
    $query = mysqli_query($conn, "delete from tb_user where id='$id'");
    if($query){
        $message = '<script>alert("Data berhasil Dihapus");
         window.location="../users"</script>
         </script>';
    }else {
        $message = '<script>alert("Data gagal Dihapus")</script>';
    }
}
echo $message;
?>
