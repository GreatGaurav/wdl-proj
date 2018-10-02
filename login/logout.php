<?php 
    session_start();
    session_unset();
    session_destroy();
    header('Location: http://localhost/wdl-proj/index.php?logout=success');
?>