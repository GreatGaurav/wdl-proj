<?php 
    include('../dbh.php');
    
    session_start();

    

     	// $sql = "SELECT c.image, c.license_no, b.name, cr.name, c.name FROM customer as c, purchase as p, automobile as a, two_wheeler as b, four_wheeler as cr  WHERE c.emp_id = '".$_SESSION['employeeID']."' AND (a.chassis_no = b.chassis_no OR a.chassis_no = cr.chassis_no) AND c.license_no = p.license_no";
    		$sql = "SELECT * FROM purchase, customer WHERE emp_id = '".$_SESSION['employeeID']."' AND customer.license_no = purchase.license_no"; 
      	    $var = mysqli_query($conn, $sql);
      	    if (!$var) {
            printf("Error: %s\n", mysqli_error($conn));
            exit();
        }

     	while ($row = mysqli_fetch_array($var, MYSQLI_ASSOC)) :
     			include('orderdisplay.php');	


     	endwhile;
?>