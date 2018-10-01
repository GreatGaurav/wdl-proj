<?php 
    header('Content-Type:application/json');

    // include '../common_functions.php';

    $response = array();

    session_start();

    if (!isset($_POST['functionname'])) {
        $response['error'] = 'No function name passed!';
    }

    if (!isset($_POST['arguments'])) {
        $response['error'] = 'No arguments passed!';
    }

    if (!isset($response['error'])) {
        switch ($_POST['functionname']) {
            case 'login':
                // TODO: Common function for database connectivity and query execution.
                $servername = 'localhost';
                $username = 'root';
                $password = NULL;
                $dbname = 'Automobile Dealrship';
                $table = 'Employee';
                // $response['response'] = 'Marker';

                if (!($conn = mysqli_connect($servername, $username, $password))) {
                    $response['error'] = "Failed to connect to MySQL Database Sever - #".mysqli_errno($conn).": ".mysqli_error($conn);
                    break;
                }

                if (!mysqli_select_db($conn, $dbname)) {
                    $response['error'] = "Connected to server, but failed to connect to database - #".mysqli_errno($conn).": ".mysqli_error($conn);
                    break;
                }

                $query = "SELECT password FROM ".$table." WHERE emp_id = ".$_POST['arguments'][0]." LIMIT 1";

                if (!($select_res = mysqli_query($conn, $query))) {
                    $response['error'] = "Retrieval of data from Database Failed - #".mysqli_errno($conn).": ".mysqli_error($conn);
                }
                else {
                    if (mysqli_num_rows($select_res) == 0) {
                        $response['response'] = "No rows returned";
                    }
                    else {
                        $pass = mysqli_fetch_object($select_res);

                        if ($pass->password == NULL) {
                            $_SESSION['employeeID'] = $_POST['arguments'][0];
                            $response['response'] = 'first_redirect';
                            // header('Location: first-signup.php');
                        }
                        else {
                            $obtained_id = $_POST['arguments'][0];
                            $obtained_password = $_POST['arguments'][1];

                            if (password_verify($obtained_password, $pass->password)) {
                                $_SESSION['employeeID'] = $_POST['arguments'][0];
                                $response['response'] = 'success';
                            }
                            else {
                                $response['response'] = 'failure';
                            }
                        }
                    }
                }

                // $retval = connectAndQuery('Automobile Dealrship', 'Employee', $query);

                // $response['response'] = gettype($retval);
                break;

            case 'set-password':
                $servername = 'localhost';
                $username = 'root';
                $password = NULL;
                $dbname = 'Automobile Dealrship';
                $table = 'Employee';

                if (!($conn = mysqli_connect($servername, $username, $password))) {
                    $response['error'] = "Failed to connect to MySQL Database Sever - #".mysqli_errno($conn).": ".mysqli_error($conn);
                    break;
                }

                if (!mysqli_select_db($conn, $dbname)) {
                    $response['error'] = "Connected to server, but failed to connect to database - #".mysqli_errno($conn).": ".mysqli_error($conn);
                    break;
                }

                $password = $_POST['arguments'][1];

                $hashed_password = password_hash($password, PASSWORD_DEFAULT);

                $query = "UPDATE ".$table." SET password = '".$hashed_password."' WHERE emp_id = ".$_GET['id']."";

                if (!(mysqli_query($conn, $query))) {
                    $response['error'] = "Failed to change password.";
                    break;
                }
                else {
                    $_SESSION['employeeID'] = $_POST['arguments'][0];
                    $response['response'] = 'success';
                }

                break;

            default:
                $response['error'] = 'Function "'.$_POST['functionname'].'" not found!';
                break;
        }
    }

    echo json_encode($response);
?>