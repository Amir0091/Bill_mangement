<?php

include "loader.inc.php";


$usersobj = new LoginCntrl(null,null);
$users = $usersobj->showAllUsers();


function usersShow($users){
  foreach ($users as $user) {
    echo'
    <tr>
        <th><input class="input is-success is-static" type="text" value="'. $user["id"] .'" disabled></th>
        <th><input class="input is-success is-static" type="email" value="'. $user["email"] .'" disabled></th>
        <td><input class="input is-success is-static" type="text" value="'. $user["Time"] .'" disabled></td>
        <td><form action="billEmission.php" method="post">
        <button name="billEmission" value="'. $user['email'] .'" class="button p-4 mt-1 is-info is-small">Emit Bill</button></td>
        </form>
    </tr>';
  }
}
function usersCount($users){
  echo count($users);
}
