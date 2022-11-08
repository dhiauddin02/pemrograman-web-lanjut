 <div class="col-lg-9 mt-2">
     <?php
        if (isset($_GET['x']) && $_GET['x'] == "dashboard") {
            include("dashboard.php");
        } elseif (isset($_GET['x']) && $_GET['x'] == "orders") {
            include("orders.php");
        } elseif (isset($_GET['x']) && $_GET['x'] == "products") {
            include("products.php");
        } elseif (isset($_GET['x']) && $_GET['x'] == "customers") {
            include("customers.php");
        } elseif (isset($_GET['x']) && $_GET['x'] == "reports") {
            include("reports.php");
        }
        ?>
 </div>