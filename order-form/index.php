<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Order Form - Automobile Dealership</title>

        <link rel="stylesheet" href="../css/bootstrap.css">
        <link rel="stylesheet" href="../css/all.css">
    </head>
    <body>
        <?php
            session_start();
            include '../includes/navbar.php';

            if (isset($_SESSION['employeeID'])) {
        ?>

            <div class="container mx-auto mb-4">
                <h1>Customer Form</h1>

                <form action="insert-customer.php" id="orderForm" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="customerName">Name of the customer</label>
                        <input type="text" class="form-control" id="customerName" name="customerName" placeholder="Enter name of the customer" autofocus>
                    </div>

                    <div class="form-group">
                        <label for="customerLicenseNo">License number of the customer</label>
                        <input type="text" class="form-control" id="customerLicenseNo" name="customerLicenseNo" placeholder="Enter License number of the customer">
                    </div>

                    <div class="form-group">
                        <label for="customerPanNo">PAN number of the customer</label>
                        <input type="text" class="form-control" id="customerPanNo" name="customerPanNo" placeholder="Enter the PAN number of the customer">
                    </div>

                    <div class="form-group">
                        <label for="customerAddress">Address of the customer</label>
                        <textarea class="form-control" id="customerAddress" name="customerAddress" rows="3"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="customerContact">Contact number of the customer</label>
                        <input type="text" class="form-control" id="customerContact" name="customerContact">
                    </div>

                    <div class="form-group">
                        <label for="customerDOB">Date of birth of the customer</label>
                        <input type="date" class="form-control" id="customerDOB" name="customerDOB">
                    </div>

                    <div class="form-group">
                        <label for="customerAge">Age of the customer</label>
                        <input type="text" class="form-control" id="customerAge" name="customerAge" readonly>
                    </div>

                    <div class="form-group">
                        <label for="customerPhoto">Upload an image of the customer</label>
                        <input type="file" id="customerPhoto" name="customerPhoto" onchange="readURL(this);">
                        <img src="#" alt="Customer Image" id="customerPhotoDisp">
                    </div>

                    <div class="form-group">
                        <label for="employeeID">Your ID</label>
                        <input type="text" class="form-control" id="employeeID" name="employeeID" value="<?php echo $_SESSION['employeeID'] ?>" readonly>
                    </div>

                    <button type="submit" id="submitButton" name="submitButton" class="btn btn-outline-secondary">Submit</button>
                </form>
            </div>
        <?php
            }
            else {
        ?>
            <div class="container">
                <div class="alert alert-danger">You are not signed in. Please sign in and come back to fill this form.</div>
            </div>
        <?php } ?>

        <script src="../js/jquery-3.3.1.js"></script>
        <script src="../js/popper.min.js"></script>
        <script src="../js/bootstrap.min.js"></script>
        <script src="../js/all.js"></script>
        <script src="../js/order-form.js"></script>
    </body>
</html>