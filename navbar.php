<nav class="navbar navbar-expand-sm navbar-dark bg-dark sticky-top" style="height: 80px;">
    <a href="../index.php" class="navbar-brand">AUTOMOBILES</a>
    <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarMenu">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarMenu">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a href="../index.php" class="nav-link">
                    Home
                    <i class="fas fa-home"></i>
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    Cars
                    <i class="fas fa-car"></i>
                </a>
            </li>
            <li class="nav-item">
                <a href="fetch.php" class="nav-link">
                    Bikes
                    <i class="fas fa-motorcycle"></i>
                </a>
            </li>
            <?php
                session_start(); 
                if (isset($_SESSION['employeeID']) && isset($_GET['login'])) {
                    if ($_GET['login'] == 'success') {
            ?>
                        <li class="nav-item">
                            <a href="login/logout.php" class="nav-link">
                                Logout
                                <i class="fas fa-sign-out-alt"></i>
                            </a>
                        </li>
            <?php 
                    }
                }
                else {
            ?>
                    <li class="nav-item">
                        <a href="login/index.php" class="nav-link">
                            Signin
                            <i class="fas fa-sign-in-alt"></i>
                        </a>
                    </li>
            <?php } ?>
        </ul>
    </div>
</nav>