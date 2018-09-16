<?php 
    include('dbh.php');
    
    session_start();

     $sql = "SELECT * FROM two_wheeler";
    

     $var = $conn->query($sql);



     while ($row = mysqli_fetch_array($var, MYSQLI_ASSOC)) :
?>
	
	<?php include('vehicles.php'); ?>

<?php endwhile; ?>