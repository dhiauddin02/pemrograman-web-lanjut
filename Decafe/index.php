
     <?php
        if (isset($_GET['x']) && $_GET['x'] == "dashboard") {
            $page = "dashboard.php";
            include "main.php";
        } elseif (isset($_GET['x']) && $_GET['x'] == "orders") {
            $page = "orders.php";
            include "main.php";
        } elseif (isset($_GET['x']) && $_GET['x'] == "products") {
            $page = "products.php";
            include "main.php";
        } elseif (isset($_GET['x']) && $_GET['x'] == "customers") {
            $page = "customers.php";
            include "main.php";
        } elseif (isset($_GET['x']) && $_GET['x'] == "reports") {
            $page = "reports.php";
            include "main.php";
        } elseif (isset($_GET['x']) && $_GET['x'] == "login") {
            include "login.php";
        } elseif (isset($_GET['x']) && $_GET['x'] == "logout") {
            include "proses/proses_logout.php";
        }else {
            $page = "dashboard.php";
            include "main.php";
            
        }
        ?>
 