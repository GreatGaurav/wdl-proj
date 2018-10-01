<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel="stylesheet" href="../css/bootstrap.css">
        <link rel="stylesheet" href="../css/all.css">

        <title>Employee login - Automobile Dealership</title>
    </head>
    <body>
        <?php include '../navbar.php'; ?>

        <div class="container mx-auto mt-3">
            <form method="POST" id="loginForm">
                <div class="form-group">
                    <p><label for="employeeID">Employee ID</label></p>
                    <p><input class="form-control" id="employeeID" placeholder="Employee ID" autofocus></p>
                </div>

                <div class="form-group">
                    <p><label for="employeePassword">Password</label></p>
                    <p><input type="password" class="form-control" id="employeePassword" placeholder="Password"></p>
                </div>

                <button type="submit" class="btn btn-secondary">Submit</button>
            </form>
        </div>
        
        <script src="../js/jquery-3.3.1.js"></script>
        <script src="../js/popper.min.js"></script>
        <script src="../js/bootstrap.min.js"></script>
        <script src="../js/login.js"></script>
        <script src="../js/set-password.js"></script>
        <script src="../js/all.js"></script>
  </body>
</html>