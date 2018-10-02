<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Customer Details</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  
  <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css'>

      <link rel="stylesheet" href="../css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/all.css">
  
</head>

<body>

<?php include_once('../includes/navbar.php'); ?>
<?php include('../dbh.php'); ?>



<div class="card">
  <div class="thumbnail"><img class="left" src="<?php echo "data:image/jpg;base64,".base64_encode($row['image'])."";?>"/></div>
  <div class="right">
    <h5>Name: <?=$row['name'] ;?></h5>
    <h5>License Number :<?=$row['license_no'] ;?></h5>
    <div class="separator"></div>
     <b>Pancard Number :</b> <?=$row['pan_no'] ;?><br>
     <b>Address :</b> <?=$row['address'] ;?><br>

  </div>
</div>
  
    <script src="../js/jquery-3.3.1.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/all.js"></script>
    <script src="../js/index.js"></script>

</body>
</html>
