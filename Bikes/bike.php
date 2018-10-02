<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Bikes</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  
  <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css'>

      <link rel="stylesheet" href="../css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/all.css">
  
</head>

<body>

<?php include('../includes/navbar.php'); ?>
<?php include('../dbh.php'); ?>



<div class="card">
  <div class="thumbnail"><img class="left" src="<?php echo "data:image/jpg;base64,".base64_encode($row['image'])."";?>"/></div>
  <div class="right">
    <h5><?=$row['name'] ;?></h5>
    <h5><?=$row['price'] ;?> Lakhs</h5>
    <div class="author">
      <h6>&nbsp;&nbsp;<?=$row2['name'] ;?></h6>
    </div>
    <div class="separator"></div>
     <b>Mileage             :</b> <?=$row['mileage'] ;?> kmpl<br>
     <b>Engine Capacity     :</b> <?=$row['engine_capacity'] ;?> cc<br>

  </div>
</div>
  
    <script src="../js/jquery-3.3.1.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/all.js"></script>
    <script src="../js/index.js"></script>

</body>
</html>
