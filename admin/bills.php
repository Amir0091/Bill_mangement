<?php include "../includes/getAllBills.inc.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include "../head.php"; ?>
    <meta charset="UTF-8">
    <title>Admin Panel</title>
</head>
<body class="has-navbar-fixed-top">

<?php
      if (!isset($_SESSION["adminId"])){
        header("Location: ../admin.php");
        exit;    
      } 
  ?>

<div class="table-container mt-5">
  <table class="table is-fullwidth">
    <thead>
      <tr>
        <th>ID</th>
        <th>User</th>
        <th>Admin</th>
        <th>Info</th>
        <th>Price</th>
        <th>State</th>
        <th>Time</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      <?php 
        tablemake($alladminBills);
      ?>
    </tbody>
  </table>
</div>


  <?php include "nav.php";?>




<script src="js/main.js"></script>
</body>
</html>
