<?php 
    include('dbh.php');
    
    session_start();

     $sql = "SELECT * FROM two_wheeler";
    

     $var = $conn->query($sql);

     



     while ($row = mysqli_fetch_array($var, MYSQLI_ASSOC)) :
?>
	
	<?php 

		$mod = "SELECT * FROM AUTOMOBILE WHERE chasis_no = '".$row['chasis_no']."'";
        $sql = mysqli_query($conn, $mod);
        $row2 = mysqli_fetch_assoc($sql);
        include('vehicles2.php'); 
	?>

<?php echo $row2['model']; ?>
<?php endwhile; ?>
