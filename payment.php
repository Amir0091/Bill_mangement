<!DOCTYPE html>
<html lang="en">
<head>
    <?php include "head.php"; ?>
    <title>Payment</title>
</head>
<body>
<?php 
if (isset($_POST['idBillPay'])){
    $id = $_POST['idBillPay'];
    $price = $_POST["billPrice"];
}
?>
<section class="hero is-info is-fullheight">
  <div class="hero-body">
    <div class="container">
      <div class="columns is-centered">
        <div class="column is-5-tablet is-4-desktop is-3-widescreen">
          <form action="includes/billPay.inc.php" method="POST" class="box">
            <div class="field">
              <label for="billPrice" class="label">Price: </label>
              <div class="control has-icons-left">
                  <input type="number" class="input" name='billPrice' value="<?php echo $price; ?>" required readonly>
                  <input type="number" class="input is-hidden" name='idBillPay' value="<?php echo $id; ?>" required readonly>
                  <span class="icon is-small is-left">
                      <span class="material-symbols-outlined">money</span>
                    </span>
                </div>
            </div>
            <div class="field">
              <button name='paySuccess' type='sumbit' class="button is-success">
                Confirm
              </button>
            </div>
            <div class="field">
                </div>
                <a href="bills.php" class="is-danger">
                    Cancel
                </a>
            </form>
        </div>
      </div>
    </div>
  </div>
</section>

</body>
</html>