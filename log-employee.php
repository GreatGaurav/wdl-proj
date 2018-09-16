<?php 
    header('Content-Type: application/json');

    $response = array();

    if (!isset($_POST['functionname'])) {
        $response['error'] = 'No function name passed!';
    }

    if (!isset($_POST['arguments'])) {
        $response['error'] = 'No arguments passed!';
    }

    if (!isset($response['error'])) {
        switch ($_POST['functionname']) {
            case 'login':
                $servername = 'localhost';
                $username = 'root';
                $password = NULL;
                $dbname = 'Automobile Dealrship';

                if (!($conn = mysqli_connect($servername, $username, $password))) {
                    die("Failed to connect to MySQL Database Sever - #".mysqli_errno($conn).": ".mysqli_error($conn));
                }

                if (!mysqli_select_db($conn, $dbname)) {
                    die("Connected to server, but failed to connect to database - #".mysqli_errno($conn).": ".mysqli_error($conn));
                }

                $query = "SELECT password FROM $dbname WHERE emp_id = $_POST['arguments'][0]";

                if (!($select_res = mysqli_query($conn, $query))) {
                    $response['response'] = "Retrieval of data from Database Failed - #".mysqli_errno($conn).": ".mysqli_error($conn);
                }
                else {
                    if (mysqli_num_rows($select_res) == 0) {
                        $response['response'] = "No rows returned";
                    }
                    else {
                        $pass = mysqli_fetch($select_res);

                        if ($pass == NULL) {
                            // TODO: Redirect user to a first time sign in page to change the password if the password field is NULL.
                            header('Location: first-signup.php');
                        }
                        else {
                            $obtained_id = $_POST['arguments'][0];
                            $obtained_password = $_POST['arguments'][1];

                            if (password_verify($obtained_password, $pass)) {
                                $response['response'] = 'success';
                            }
                            else {
                                $response['response'] = 'failure';
                            }
                        }
                    }
                }
                break;

            default:
                $response['error'] = 'Function "'.$_POST['functionname'].'" not found!';
                break;
        }
    }

    echo json_encode($response);
?>