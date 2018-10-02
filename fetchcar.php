<?php 
    include('dbh.php');
    
    session_start();

     $sql = "SELECT * FROM four_wheeler";
    

     $var = $conn->query($sql);

     



     while ($row = mysqli_fetch_array($var, MYSQLI_ASSOC)) :
?>
	
	<?php 

		// $mod = "SELECT * FROM four_wheeler WHERE chassis_no = '".$row['chassis_no']."'";
  //       $sql = mysqli_query($conn, $mod);
  //       $row2 = mysqli_fetch_assoc($sql);
        // $mod1 = "SELECT manufacturer.name FROM manufacturer, automobile, two_wheeler WHERE automobile.chassis_no = '".$row['chassis_no']."' AND manufacturer.m_id = "
        include('car.php'); 
	?>

<?php endwhile; ?>
