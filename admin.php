<!DOCTYPE html>
<html lang="en">
<head>
    <?php include "head.php"; ?>
    <title>Admin Login</title>
</head>
<body>

<section class="hero is-info is-fullheight">
  <div class="hero-body">
    <div class="container">
      <div class="columns is-centered">
        <div class="column is-5-tablet is-4-desktop is-3-widescreen">
            <h1>Admin Login</h1>
          <form action="includes/adminAuth.inc.php" method="POST" class="box">
            <div class="field">
              <label for="adminName" class="label">Username</label>
              <div class="control has-icons-left">
                <input type="text" placeholder="example" class="input" name='adminName' required>
                <span class="icon is-small is-left">
                <span class="material-symbols-outlined">person</span>
                </span>
              </div>
            </div>
            <div class="field">
              <label for="adminPassword" class="label">Password</label>
              <div class="control has-icons-left">
                <input type="password" placeholder="*******" class="input" name='adminPassword' required>
                <span class="icon is-small is-left">
                <span class="material-symbols-outlined">lock</span>
                </span>
              </div>
            </div>
            <div class="field">
              <button name='adminSumbit' type='sumbit' class="button is-success">
                Login
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