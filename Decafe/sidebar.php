 <div class="col col-md-3 ">
     <div class="b-example-divider b-example-vr"></div>

     <div class="d-flex flex-column flex-shrink-0 p-3 bg-light " style="width: 250px;">

         <ul class="nav nav-pills flex-column mb-auto">

             <li>

                 <a href="index.php?x=dashboard" class="nav-link <?php echo (isset($_GET['x']) && $_GET['x'] == "dashboard") ? "active" : "dark" ?>">
                     <i class="bi bi-speedometer2 me-2"></i>
                     Dashboard
                 </a>


             </li>
             <li>
                 <a href="index.php?x=orders" class="nav-link <?php echo (isset($_GET['x']) && $_GET['x'] == "orders") ? "active" : "dark" ?>">
                     <i class="bi bi-cart4 me-2"></i>
                     Orders
                 </a>
             </li>
             <li>
                 <a href="index.php?x=products" class="nav-link <?php echo (isset($_GET['x']) && $_GET['x'] == "products") ? "active" : "dark" ?>">
                     <i class="bi bi-table me-2"></i>
                     Products
                 </a>
             </li>
             <li>
                 <a href="index.php?x=customers" class="nav-link <?php echo (isset($_GET['x']) && $_GET['x'] == "customers") ? "active" : "dark" ?>">
                     <i class="bi bi-person-circle me-2"></i>
                     Customers
                 </a>
             </li>
             <li>
                 <a href="index.php?x=reports" class="nav-link <?php echo (isset($_GET['x']) && $_GET['x'] == "reports") ? "active" : "dark" ?>">
                     <i class="bi bi-envelope-paper me-2"></i>
                     Reports
                 </a>
             </li>
         </ul>
         <hr>

     </div>
 </div>