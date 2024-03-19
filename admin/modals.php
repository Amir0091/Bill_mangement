<!-- Settings Modal Start -->
<div class="modal" id='Setting-modal'>
  <div class="modal-background"></div>
  <div class="modal-card">
    <header class="modal-card-head">
      <p class="modal-card-title">Admin Settings</p>
      <button class="delete" aria-label="close"></button>
    </header>
    <section class="modal-card-body">
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum maiores eius culpa quas, aspernatur molestias dolor esse quod suscipit corporis porro velit saepe, asperiores nisi modi libero corrupti. Eius et totam quo ex labore possimus optio deleniti architecto blanditiis aperiam illum magnam iure soluta tempora quidem, excepturi impedit, officiis eum.</p>
    </section>
  </div>
</div>
<!-- Settings Modal End -->



<!-- Add Users Modal Start -->
<div class="modal" id='addUsers-modal'>
  <div class="modal-background"></div>
  <div class="modal-card">
    <header class="modal-card-head">
      <p class="modal-card-title">Add User</p>
      <button class="delete" aria-label="close"></button>
    </header>
    <section class="modal-card-body">
        <form action="../includes/signup.inc.php" method="POST">
            <label for="signupEmail">Email:</label>
            <input class='input' type="email" name='signupEmail' id='signupEmail'>
            <label for="signupPassword">Password:</label>
            <input class='input' type="password" name='signupPassword' id='signupPassword'>
            <label for="repassword">Repeat Password:</label>
            <input class='input' type="password" name='repassword' id='repassword'>
            <footer class="modal-card-foot">
            <button name="signupSubmit" type='sumbit' class="button is-success">Create User</button>
            </footer>
        </form>
    </section>
  </div>
</div>
<!-- Add Users Modal End -->


<!-- Add Product Modal Start -->
<div class="modal" id='addPro-modal'>
  <div class="modal-background"></div>
  <div class="modal-card">
    <header class="modal-card-head">
      <p class="modal-card-title">Add your product</p>
      <button class="delete" aria-label="close"></button>
    </header>
    <section class="modal-card-body">
        <form action="../includes/addPro.inc.php" method="POST">

            <label for="title">Title:</label>
            <input class='input' type="text" name='title' id='title'>

            <label for="price">Price:</label>
            <input class='input' type="text" name='price' id='price'>

            <label for="Info">Info:</label>
            <textarea class='textarea' type="text" name='Info' id='Info'></textarea>

            <footer class="modal-card-foot">
            <button name="productSubmit" type='sumbit' class="button is-success">Add Product to Shop</button>
            </footer>
        </form>
    </section>
  </div>
</div>
<!-- Add Product Modal End -->


