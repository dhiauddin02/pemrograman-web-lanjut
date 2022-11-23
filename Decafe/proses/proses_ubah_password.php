<?php
session_start();
include "connect.php";
$id = isset($_POST['id']) ? htmlentities($_POST['id']) : "";
$passwordlama = isset($_POST['passwordlama']) ? htmlentities($_POST['passwordlama']) : "";
$passwordbaru = isset($_POST['passwordbaru']) ? htmlentities($_POST['passwordbaru']) : "";
$repasswordbaru = isset($_POST['repasswordbaru']) ? htmlentities($_POST['repasswordbaru']) : "";

if (!empty($_POST['ubah_password_validate'])) {
    $query = mysqli_query($conn, "select * from tb_user where username = '$_SESSION[username_decafe]' && password = '$passwordlama'");
    $hasil = mysqli_fetch_array($query);
    if ($hasil) {
        if($passwordbaru== $repasswordbaru){
            $query = mysqli_query($conn, "update tb_user set password='$passwordbaru' where username = '$_SESSION[username_decafe]'");
            if ($query) {
                $message = '<script>alert("Password berhasil diubah");
                            window.history.back()</script>
                        </script>';
            } else {
                $message = '<script>alert("Password gagal diubah");
                            window.history.back()</script>
                        </script>';
            }
        }
        else {
            $message = '<script>alert("Password baru tidak sama");
                            window.history.back()</script>
                        </script>';
        }
        
    } else { 
        $message = '<script>alert("Password lama tidak sesuai");
                            window.history.back()</script>
                        </script>';
    }
   
} else {
    header('location:../dashboard');
}
echo $message;

?>