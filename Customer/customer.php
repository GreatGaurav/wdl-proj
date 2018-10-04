<?php 
    include('../dbh.php');
    
    session_start();

    

     	$sql = "SELECT * FROM customer WHERE emp_id = '".$_SESSION['employeeID']."'";
      	$var = $conn->query($sql);

     	while ($row = mysqli_fetch_array($var, MYSQLI_ASSOC)) :
     			include_once('customerdisplay.php');	


     	endwhile;
?>

