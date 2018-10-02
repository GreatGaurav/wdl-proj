<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Blog Card fun #1</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  
  <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css'>

      <link rel="stylesheet" href="css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/all.css">
  
</head>

<body>

<?php include('includes/navbar.php'); ?>
<?php include('dbh.php'); ?>



<div class="card">
  <div class="thumbnail"><img class="left" src="<?php echo $row2['image'] ;?>"/></div>
  <div class="right">
    <h5><?=$row2['name'] ;?></h5>
    <h5><?=$row2['price'] ;?></h5>
    <div class="author"><img src="https://randomuser.me/api/portraits/men/95.jpg"/>
      <h6>Manufacturer</h6>
    </div>
    <div class="separator"></div>
     <b>Chasis No :</b> <?=$row2['chassis_no'] ;?><br>
     <b>Mileage   :</b><?=$row2['mileage'] ;?><br>

  </div>
</div>
  
    <script src="js/jquery-3.3.1.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/all.js"></script>
    <script src="js/index.js"></script>

</body>
</html>
