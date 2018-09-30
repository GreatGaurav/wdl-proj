<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Blog Card fun #1</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  
  <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css'>

      <link rel="stylesheet" href="css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
    crossorigin="anonymous">
  
</head>

<body>

<?php include_once('navbar.php'); 

?>
<?php include('dbh.php'); ?>



<div class="card">
  <div class="thumbnail"><img class="left" src="<?php echo $row['image'] ;?>"/></div>
  <div class="right">
    <h5>Car Name</h5>
    <h5>Price</h5>
    <div class="author"><img src="https://randomuser.me/api/portraits/men/95.jpg"/>
      <h6>Manufacturer</h6>
    </div>
    <div class="separator"></div>
     <b>Chasis No :</b> <?=$row['chasis_no'] ;?><br>
     <b>Mileage   :</b><?=$row['mileage'] ;?><br>
     <b>Storage   :</b><?=$row['storage'] ;?><br>
     <b>Model     :</b><?=$row2['model'] ;?><br>
  </div>
</div>
  
    <script src="js/index.js"></script>

</body>
</html>
