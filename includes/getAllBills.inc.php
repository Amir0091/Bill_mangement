<?php
include "loader.inc.php";
if (session_status() == PHP_SESSION_NONE) {
  session_start();
}

$adminBills = new EmissionCntrl(null,null,null,null);
$alladminBills = $adminBills->showAllBills("admin");

// Card Maker
function tablemake($alladminBills){

  foreach ($alladminBills as $bill) {
      if ($bill['state'] == "Pending"){
        echo'
        <tr>
            <th><input class="input is-success is-static" type="text" value="'. $bill["id"] .'" disabled></th>
            <th><input class="input is-success is-static" type="email" value="'. $bill["user"] .'" disabled></th>
            <td><input class="input is-success is-static" type="text" value="'. $bill["admin"] .'" disabled></td>
            <td><input class="input is-success is-static" type="text" value="'. $bill["info"] .'" disabled></td>
            <td><input class="input is-success is-static" type="text" value="'. $bill["price"] .'" disabled></td>
            <td><input class="input is-success is-static" type="text" value="'. $bill["state"] .'" disabled></td>
            <td><input class="input is-success is-static" type="text" value="'. $bill["Time"] .'" disabled></td>
            <td><form action="billEmission.php" method="post">
            <button name="billEmission" value="'. $bill["id"] .'" class="button p-4 mt-1 is-info is-small">Delete</button></td>
            </form>
        </tr>';
          } else {
            echo'
            <tr>
            <th><input class="input is-success is-static" type="text" value="'. $bill["id"] .'" disabled></th>
            <th><input class="input is-success is-static" type="email" value="'. $bill["user"] .'" disabled></th>
            <td><input class="input is-success is-static" type="text" value="'. $bill["admin"] .'" disabled></td>
            <td><input class="input is-success is-static" type="text" value="'. $bill["info"] .'" disabled></td>
            <td><input class="input is-success is-static" type="text" value="'. $bill["price"] .'" disabled></td>
            <td><input class="input is-success is-static" type="text" value="'. $bill["state"] .'" disabled></td>
            <td><input class="input is-success is-static" type="text" value="'. $bill["Time"] .'" disabled></td>
                <td><form action="billEmission.php" method="post">
                <button name="billEmission" value="'. $bill["id"] .'" class="button p-4 mt-1 is-info is-small">Delete</button></td>
                </form>
            </tr>';
        
      }
      }
  }

