<!-- Navbar Start -->
<nav class="navbar is-fixed-top" role="navigation" aria-label="main navigation">
  <div class="navbar-brand">

    <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
    </a>
  </div>

  <div id="navbarBasicExample" class="navbar-menu">
    <div class="navbar-start">
      <a class="navbar-item" href='index.php'>
        Home
      </a>
      <?php
      if (isset($_SESSION["userId"])){
        ?>
        <a class="navbar-item" href='bills.php'>
          Bills
        </a>
        </div>
      </div>
  
      <div class="navbar-end">
        <div class="navbar-item">
          
        <div class='mr-5'>


        </div>
        <div class="control">
          <div class="tags has-addons are-medium">
            <span class="tag is-dark"><?php echo $_SESSION["userEmail"]; ?></span>
            <a href="includes/logout.inc.php">
            <span class="tag is-danger">Logout</span>
            </a>
          </div>
        </div>
      <?php } else{ ?>
        </div>
      </div>


        <div class="navbar-end">
        <div class="navbar-item">
          
          <!-- navbar Right -->
      <div class="buttons">
          <a class="button is-primary js-modal-trigger" data-target="signup-modal">
            <strong>Sign up</strong>
          </a>
          <a class="button is-light js-modal-trigger" data-target="login-modal">
            Log in
          </a>
        </div>
      </div>



      <?php } ?>
    </div>
  </div>
</nav>
<!-- Navbar End -->


<!-- SignUp Modal Start -->
<div class="modal" id='signup-modal'>
  <div class="modal-background"></div>
  <div class="modal-card">
    <header class="modal-card-head">
      <p class="modal-card-title">Sing Up To LiteDeForged</p>
      <button class="delete" aria-label="close"></button>
    </header>
    <section class="modal-card-body">
      <form action="includes/signup.inc.php" method="POST">
        <label for="signupEmail">Email:</label>
        <input class='input' type="email" name='signupEmail' id='signupEmail'>
        <label for="signupPassword">Password:</label>
        <input class='input' type="password" name='signupPassword' id='signupPassword'>
        <label for="repassword">Repeat Password:</label>
        <input class='input' type="password" name='repassword' id='repassword'>
        <footer class="modal-card-foot">
          <button name="signupSubmit" type='sumbit' class="button is-success">Create Account</button>
        </footer>
      </form>
    </section>
  </div>
</div>
<!-- SignUp Modal End -->





<!-- Login Modal Start -->
<div class="modal" id='login-modal'>
  <div class="modal-background"></div>
  <div class="modal-card">
    <header class="modal-card-head">
    <p class="modal-card-title">Log In To LiteDeForged</p>
      <button class="delete" aria-label="close"></button>
    </header>
    <section class="modal-card-body">
      <form action="includes/login.inc.php" method="POST">
        <label for="loginEmail">Email:</label>
        <input class='input' type="email" name='loginEmail' id='loginEmail'>
        <label for="loginPassword">Password:</label>
        <input class='input' type="password" name='loginPassword' id='loginPassword'>
        <footer class="modal-card-foot">
          <button name="loginSubmit" type='sumbit' class="button is-success">Log in</button>
        </footer>
      </form>
    </section>
  </div>
</div>
<!-- Login Modal End -->


<!-- Login Modal Start -->
<div class="modal" id='cart-modal'>
  <div class="modal-background"></div>
  <div class="modal-card">
    <header class="modal-card-head">
        <h5 class="modal-card-title" id="exampleModalLabel">Cart</h5>
        <button class="delete" aria-label="close"></button>
    </header>
    <section class="modal-card-body">
        <table class="show-cart table">
        </table>
        <div>Total price: $<span class="total-cart"></span></div>
    </section>
    <footer class="modal-card-foot">
      <button type="button" class="button" data-dismiss="modal">Close</button>
      <button type="button" class="button">Order now</button>
    </footer>
  </div>
</div>
<!-- Login Modal End -->
