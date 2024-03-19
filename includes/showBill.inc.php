<?php
include "loader.inc.php";
if (session_status() == PHP_SESSION_NONE) {
  session_start();
}


$Bill = new EmissionCntrl(null,null,null,null);
$allBills = $Bill->showAllBills($_SESSION["userEmail"]);

// Card Maker
function cardMaker($allBills){

  foreach ($allBills as $bill) {
      if ($bill['state'] == "Pending"){
        echo '
          <div class="column  is-12-mobile is-6-tablet is-3-desktop">
            <!-- Card Start -->
            <div class="card has-background-grey-lighter m-4">
              <div class="card-content">
                <div class="media">
                  <div class="media-content pl-4">
                  <p class="title is-4">'. $bill['info'] .'</p>
                    <p class="subtitle is-6 has-text-danger">'. $bill['state'] .'</p>
                    <p class="subtitle is-6 has-text-danger">Date: '. $bill['Time'] .'</p>
                    <p class="subtitle is-6 has-text-info">from '. $bill['admin'] .'</p>
                    <td><form action="payment.php" method="post">
                    <input type="text" value="'. $bill['price'] .'" class="input" name="billPrice" required readonly>
                    <button name="idBillPay" value="'. $bill['id'] .'" class="button p-4 mt-1 is-success">Pay</button></td>
                    </form>        
                  </div>
                </div>
                <div class="content">
              </div>
              </div>
            </div>
            </div>';
      } else {
        echo '
        <div class="column  is-12-mobile is-6-tablet is-3-desktop">
          <!-- Card Start -->
          <div class="card has-background-grey-lighter m-4">
            <div class="card-content">
              <div class="media">
                <div class="media-content pl-4">
                <p class="title is-4">'. $bill['info'] .'</p>
                  <p class="subtitle is-6 has-text-success">'. $bill['state'] .'</p>
                  <p class="subtitle is-6 has-text-danger">Date: '. $bill['Time'] .'</p>
                  <p class="subtitle is-6 has-text-info">from '. $bill['admin'] .'</p>
                  <td><form action="payment.php" method="post">
                  <input type="text" value="'. $bill['price'] .'" class="input" name="billPrice" required readonly>
                  </form>        
                </div>
              </div>
              <div class="content">
            </div>
            </div>
          </div>
          </div>';

      }
      }
  }

