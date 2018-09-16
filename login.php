<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

        <title>Employee login - Automobile Dealership</title>
    </head>
    <body>
        <?php include 'navbar.php'; ?>

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
        
        <script src="js/jquery-3.3.1.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <script src="js/login.js"></script>
  </body>
</html>