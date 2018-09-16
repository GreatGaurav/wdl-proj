<?php 
    header('Content-Type: application/json');

    $response = array();

    if (!isset($_POST['functionname'])) {
        $response['error'] = 'No function name passed!';
    }

    if (!isset($_POST['arguments'])) {
        $response['error'] = 'No argumnets passed!';
    }

    if (!isset($response['error'])) {
        switch ($_POST['functionname']) {
            case 'login':
                $response['response'] = 'DUN DUN DUN..';
                break;

            default:
                $response['error'] = 'Function "'.$_POST['functionname'].'" not found!';
                break;
        }
    }

    echo json_encode($response);
?>