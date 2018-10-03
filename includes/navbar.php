<nav class="navbar navbar-expand-sm navbar-dark bg-dark sticky-top" style="height: 80px;">
    <a href="http://localhost/wdl-proj/" class="navbar-brand">AUTOMOBILES</a>
    <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarMenu">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarMenu">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a href="http://localhost/wdl-proj/" class="nav-link">
                    Home
                    <i class="fas fa-home"></i>
                </a>
            </li>
            <li class="nav-item">
                <a href="http://localhost/wdl-proj/cars/fetchcar.php" class="nav-link">
                    Cars
                    <i class="fas fa-car"></i>
                </a>
            </li>
            <li class="nav-item">
                <a href="http://localhost/wdl-proj/bikes/fetchbike.php" class="nav-link">
                    Bikes
                    <i class="fas fa-motorcycle"></i>
                </a>
            </li>
            <?php
                // session_start(); 
                if (isset($_SESSION['employeeID'])) {
            ?>
                    <li class="nav-item">
                        <a href="http://localhost/wdl-proj/login/logout.php" class="nav-link">
                            Logout
                            <i class="fas fa-sign-out-alt"></i>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" id="navbarDropdowmMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                            <a href="http://localhost/wdl-proj/Customer/customer.php" class="dropdown-item">Your Customers</a>
                            <a href="http://localhost/wdl-proj/Orders/order.php" class="dropdown-item">View Orders</a>
                            <a href="http://localhost/wdl-proj/order-form/" class="dropdown-item">Add a new customer</a>
                        </div>
                    </li>
            <?php 
                }
                else {
            ?>
                    <li class="nav-item">
                        <a href="http://localhost/wdl-proj/login/index.php" class="nav-link">
                            Signin
                            <i class="fas fa-sign-in-alt"></i>
                        </a>
                    </li>
            <?php } ?>
        </ul>
    </div>
</nav>