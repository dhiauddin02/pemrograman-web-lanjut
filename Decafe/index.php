
     <?php
      session_start();
        if (isset($_GET['x']) && $_GET['x'] == "dashboard") {
            $page = "dashboard.php";
            include "main.php";
        } elseif (isset($_GET['x']) && $_GET['x'] == "orders") {
            $page = "orders.php";
            include "main.php";
        } elseif (isset($_GET['x']) && $_GET['x'] == "users") {
            if ($_SESSION['level_decafe'] == 1) {
                $page = "users.php";
                include "main.php";
            } else {
                $page = "dashboard.php";
                include "main.php";
            }
        } elseif (isset($_GET['x']) && $_GET['x'] == "customers") {
            $page = "customers.php";
            include "main.php";
        } elseif (isset($_GET['x']) && $_GET['x'] == "reports") {
           if($_SESSION['level_decafe']==1){
                $page = "reports.php";
                include "main.php";
           }
           else {
                $page = "dashboard.php";
                include "main.php";
           }
        } elseif (isset($_GET['x']) && $_GET['x'] == "menu") {
            $page = "menu.php";
            include "main.php";
        } 
         elseif (isset($_GET['x']) && $_GET['x'] == "login") {
            include "login.php";
        } elseif (isset($_GET['x']) && $_GET['x'] == "logout") {
            include "proses/proses_logout.php";
        }else {
            $page = "dashboard.php";
            include "main.php";
            
        }
        ?>
 