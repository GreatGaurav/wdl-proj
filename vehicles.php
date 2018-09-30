<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
    crossorigin="anonymous">
</head>

<?php include_once('navbar.php'); 

?>
<br>
<?php include('dbh.php'); ?>
<link rel="stylesheet" type="text/css" href="vehicles.css">
<div class="product" style = "border: solid">
  <div class="header">
    <div class="back"></div>
  </div>
  <div class="main">
    <div class="left">
      <img height="200px" width="250px"  src="<?php echo $row['image'] ;?>">

    </div>
    <div class="right">
        
     <b>Chasis No :</b> <?=$row['chasis_no'] ;?><br>
     <b>Mileage   :</b><?=$row['mileage'] ;?><br>
     <b>Storage   :</b><?=$row['storage'] ;?><br>
     <b>Model     :</b><?=$row2['model'] ;?><br>
    </div>
  </div>
  <div class="footer">
    
  </div>
</div>