<?php 
    include('../dbh.php');
    
    session_start();

    $sql = "SELECT * FROM two_wheeler";

    $var = $conn->query($sql);

    while ($row = mysqli_fetch_array($var, MYSQLI_ASSOC)) :
?>
	
	<?php 
        $mod2 = "SELECT * FROM manufacturer, automobile WHERE automobile.chassis_no = '".$row['chassis_no']."' AND automobile.m_id = manufacturer.m_id";
        $sql2 = mysqli_query($conn, $mod2);
        if (!$sql2) {
            printf("Error: %s\n", mysqli_error($conn));
            exit();
        }
        $row2 = mysqli_fetch_array($sql2, MYSQLI_ASSOC);

        include('bike.php'); 
	?>

    <?php endwhile; ?>
