<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel="stylesheet" href="../css/bootstrap.css">
        <link rel="stylesheet" href="../css/all.css">

        <title>First Login - Automobile Dealership</title>
    </head>
    <body>
        <?php include '../navbar.php'; ?>

        <?php
            session_start();

            if (isset($_SESSION['employeeID']) && $_GET['type'] == 'first') {
        ?>
            <div class="alert alert-primary" role="alert">
                Looks like you have not set your password yet. Do it now!
            </div>

            <div class="container mx-auto mt-3">
                <form method="POST" id="passwordForm">
                    <div class="form-group">
                        <p><label for="password">Enter Your Password</label></p>
                        <p><input type="password" class="form-control" id="password" placeholder="Password" autofocus></p>
                    </div>

                    <div class="form-group">
                        <p><label for="confirmPassword">Confirm Your Password</label></p>
                        <p><input type="password" class="form-control" id="confirmPassword" placeholder="Confirm Password"></p>
                    </div>

                    <button type="submit" class="btn btn-secondary">Submit</button>
                </form>
            </div>
        <?php 
            }
            else {
        ?>
            <div class="alert alert-danger">
                Looks like you have been redirected here by mistake. Please go back to the homepage.
            </div>
        <?php } ?>
        
        <script src="../js/jquery-3.3.1.js"></script>
        <script src="../js/popper.min.js"></script>
        <script src="../js/bootstrap.min.js"></script>
        <script src="../js/login.js"></script>
        <script src="../js/set-password.js"></script>
        <script src="../js/all.js"></script>
  </body>
</html>