<?php 
    session_start();

    $servername = 'localhost';
    $username = 'root';
    $password = NULL;
    $dbname = 'automobiledealership';
    $table = 'customer';

    include('../dbh.php');

    if (!($conn = mysqli_connect($servername, $username, $password))) {
        die("Failed to connect to MySQL Database Sever - #".mysqli_errno($conn).": ".mysqli_error($conn));
    }

    if (!mysqli_select_db($conn, $dbname)) {
        die("Connected to server, but failed to connect to database - #".mysqli_errno($conn).": ".mysqli_error($conn));
    }

    if (isset($_POST['submitButton'])) {
        // echo '<pre>';
        // print_r($_FILES);
        // print_r($_POST);
        // exit;
        $clno = mysqli_real_escape_string($conn, $_POST['customerLicenseNo']);
        $cname = mysqli_real_escape_string($conn, $_POST['customerName']);
        $cdob = mysqli_real_escape_string($conn, $_POST['customerDOB']);
        $cage = mysqli_real_escape_string($conn, $_POST['customerAge']);
        $cpan = mysqli_real_escape_string($conn, $_POST['customerPanNo']);
        $ccont = mysqli_real_escape_string($conn, $_POST['customerContact']);
        $cadd = mysqli_real_escape_string($conn, $_POST['customerAddress']);
        $cemp = mysqli_real_escape_string($conn, $_POST['employeeID']);
        $file = addslashes(file_get_contents($_FILES['customerPhoto']['tmp_name']));
        // $query = "INSERT INTO customer VALUES ('".$_POST['customerLicenseNo']."', '".$_POST['customerName']."', '".$_POST['customerDOB']."', ".$_POST['customerAge'].", '".$_POST['customerPanNo']."', '".$_POST['customerContact']."', '".$_POST['customerAddress']."', '".$_POST['employeeID']."', ".$file.")";
        $query = "INSERT INTO customer VALUES ('$clno', '$cname', '$cdob', '$cage', '$cpan', '$ccont', '$cadd', '$cemp', '$file')";

        if (mysqli_query($conn, $query)) {
            echo "<script>alert('Data inserted into database.')</script>";
            header("Location: http://localhost/wdl-proj");        
        }
        else {
            echo "<script>alert('Looks like the data was not inserted.')</script>";
        }
    }

    // $check = getimagesize($_FILES['customerPhoto']['tmp_name']);

    // if ($check !== false) {
    //     $image = $_FILES['customerPhoto']['tmp_name'];
    //     $imgContent = addslashes(file_get_contents($image));

    //     $query = "INSERT INTO ".$table." VALUES ('".$_POST['customerLicenseNo']."', '".$_POST['customerName']."', '".$_POST['customerDOB']."', ".$_POST['customerAge'].", '".$_POST['customerPanNo']."', '".$_POST['customerContact']."', '".$_POST['customerAddress']."', '".$_POST['employeeID']."', ".$imgContent.")"

    //     if (!mysqli_query($conn, $query)) {
    //         echo "Failed to upload data.";
    //     }
    //     else {
    //         echo "Data uploaded."
    //     }
    // }
?>