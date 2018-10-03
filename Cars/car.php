<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Cars</title>

        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="../css/bootstrap.css">
        <link rel="stylesheet" href="../css/all.css">
    </head>

    <body style="background-color: #778899;">
        <?php include_once('../includes/navbar.php'); ?>
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
                <b>Seating Capacity    :</b> <?=$row['seating_capacity'] ;?><br>
                <b>Fuel Type           :</b> <?=$row['fuel_type'] ;?><br>
            </div>
        </div>
  
        <script src="../js/jquery-3.3.1.js"></script>
        <script src="../js/popper.min.js"></script>
        <script src="../js/bootstrap.min.js"></script>
        <script src="../js/all.js"></script>
        <script src="../js/index.js"></script>
    </body>
</html>
