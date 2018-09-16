<?php include_once('navbar.php'); ?>
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
      
      
    </div>
  </div>
  <div class="footer">
    
  </div>
</div>