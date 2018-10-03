<?php 
    session_start();

    $servername = 'localhost';
    $username = 'root';
    $password = NULL;
    $dbname = 'automobiledealership';
    $table = 'customer';

    if (!($conn = mysqli_connect($servername, $username, $password))) {
        die("Failed to connect to MySQL Database Sever - #".mysqli_errno($conn).": ".mysqli_error($conn));
    }

    if (!mysqli_select_db($conn, $dbname)) {
        die("Connected to server, but failed to connect to database - #".mysqli_errno($conn).": ".mysqli_error($conn));
    }

    $check = getimagesize($_FILES['customerPhoto']['tmp_name']);

    if ($check !== false) {
        $image = $_FILES['customerPhoto']['tmp_name'];
        $imgContent = addslashes(file_get_contents($image));

        $query = "INSERT INTO ".$table." VALUES ('".$_POST['customerLicenseNo']."', '".$_POST['customerName']."', '".$_POST['customerDOB']."', ".$_POST['customerAge'].", '".$_POST['customerPanNo']."', '".$_POST['customerContact']."', '".$_POST['customerAddress']."', '".$_POST['employeeID']."', ".$imgContent.")"

        if (!mysqli_query($conn, $query)) {
            echo "Failed to upload data.";
        }
        else {
            echo "Data uploaded."
        }
    }
?>