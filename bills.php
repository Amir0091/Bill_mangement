<?php include "includes/showBill.inc.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include "head.php"; ?>
    <title>User Bills</title>
</head>
<body class="has-navbar-fixed-top">
    <?php include "navbar.php"; ?>
    
    <!-- Main Page Start -->
    <div class="columns">
    <?php cardMaker($allBills); ?>
    </div>
        
          <!-- Card End -->            
    <!-- Main Page End -->


    <script src="js/cart.js"></script>

</body>
</html>