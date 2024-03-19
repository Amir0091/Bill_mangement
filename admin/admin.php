<!DOCTYPE html>
<html lang="en">
<head>
    <?php include "../head.php"; ?>
    <meta charset="UTF-8">
    <title>Admin Panel</title>
</head>
<body class="has-navbar-fixed-top">

  <?php
      session_start();
      if (!isset($_SESSION["adminId"])){
        header("Location: ../admin.php");
        exit;    
      } 
  ?>
  
  <?php include "nav.php";?>
  <?php include "dashboard.php";?>
  <?php include "modals.php";?>



  <script src="js/main.js"></script>
</body>
</html>
