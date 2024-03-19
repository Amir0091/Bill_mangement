<!DOCTYPE html>
<html lang="en">
<head>
    <?php include "../head.php"; ?>
    <title>Bill Emission</title>
</head>
<body>
<section class="hero is-warning is-fullheight">
  <div class="hero-body">
    <div class="container">
      <div class="columns is-centered">
        <div class="column is-5-tablet is-4-desktop is-3-widescreen">
            <form action="../includes/billEmission.inc.php" method="POST" class="box">
              <div class="field">
                <label class="label is-large">Submit Bill</label>
              </div>
            <div class="field">
              <label for="adminBill" class="label">From :</label>
              <div class="control has-icons-left">
                <input type="text" value="admin" class="input" name='adminBill' required readonly> 
                <span class="icon is-small is-left">
                <span class="material-symbols-outlined">person</span>
                </span>
              </div>
            </div>
            <div class="field">
              <label for="userBill" class="label">For :</label>
              <div class="control has-icons-left">
                <input type="text" value="<?php echo $_POST["billEmission"]; ?>" class="input" name='userBill' required readonly>
                <span class="icon is-small is-left">
                <span class="material-symbols-outlined">person</span>
                </span>
              </div>
            </div>
            <div class="field">
              <label for="billDetail" class="label">Detail :</label>
              <div class="control has-icons-left">
                <input type="text" class="textarea" name='billDetail' required>
                <span class="icon is-small is-left">
                <span class="material-symbols-outlined">edit</span>
                </span>
              </div>
            </div>
            <div class="field">
              <label for="billPrice" class="label">Price :</label>
              <div class="control has-icons-left">
                <input type="number" class="input" name='billPrice' required>
                <span class="icon is-small is-left">
                <span class="material-symbols-outlined">money</span>
                </span>
              </div>
            </div>
            <div class="field">
              <button name='billEmission' type='sumbit' class="button is-success">
                Emit
                <span class="material-symbols-outlined ml-2">send</span>
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
</body>
</html>