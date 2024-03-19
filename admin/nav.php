<nav class="navbar is-fixed-top box-shadow-y">


      <!-- Brand Start -->
      <div class="navbar-brand">
        <a
          role="button"
          class="navbar-burger toggler"
          aria-label="menu"
          aria-expanded="false"
        >
          <span aria-hidden="true"></span>
          <span aria-hidden="true"></span>
          <span aria-hidden="true"></span>
        </a>

        <a href="#" class="navbar-item has-text-weight-bold has-text-black is-size-4">
          LiteDeForged
        </a>
      </div>
      <!-- Brand End -->

<!-- Navbar Start -->
      <div class="navbar-menu has-background-white ml-5">
        <div class="navbar-start">

          <!-- Settings -->
          <a href="admin.php">
            <button class="button m-4">
              Dashboard
              <span class="material-symbols-outlined pl-2">dashboard</span>
            </button>
          </a>

          <!-- Bills managment -->
          <a href="bills.php">
            <button class='button m-4'>
              Bills
              <span class="material-symbols-outlined pl-2">sell</span>
            </button>
          </a>


          <!-- User managment -->
            <div class="dropdown is-hoverable m-4">
              <div class="dropdown-trigger">
                <button class='button'>
                  Manage Users
                  <span class="material-symbols-outlined pl-2">groups</span>
                </button>
              </div>
              <div class="dropdown-menu" id="dropdown-menu4" role="menu">
                <div class="dropdown-content has-background-grey-lighter">
                  <div class="buttons are-normal">
                    <div class="dropdown-item">
                      <button class="button js-modal-trigger width:5px;"  data-target="addUsers-modal">
                        Add Users
                        <span class="material-symbols-outlined pl-2">add</span>
                      </button>
                    </div>
                    <div class="dropdown-item">
                      <button class="button js-modal-trigger" data-target="Setting-modal">
                        Edit Users
                        <span class="material-symbols-outlined pl-2">edit</span>
                      </button>
                    </div>
                    <div class="dropdown-item">
                      <button class="button js-modal-trigger" data-target="Setting-modal">
                        Delete Users
                        <span class="material-symbols-outlined pl-2">delete</span>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>


          <!-- Admin managment -->
            <div class="dropdown is-hoverable m-4 ">
              <div class="dropdown-trigger">
                <button class='button'>
                  Manage Admins
                  <span class="material-symbols-outlined pl-2">shield_person</span>
                </button>
                <span class="icon is-small">
                    <i class="fas fa-angle-down" aria-hidden="true"></i>
                  </span>
                </button>
              </div>
              <div class="dropdown-menu" id="dropdown-menu4" role="menu">
              <div class="dropdown-content has-background-grey-lighter">
                  <div class="buttons are-normal">
                    <div class="dropdown-item">
                      <button class="button js-modal-trigger width:5px;"  data-target="Setting-modal">
                        Add Admin
                        <span class="material-symbols-outlined pl-2">add</span>
                      </button>
                    </div>
                    <div class="dropdown-item">
                      <button class="button js-modal-trigger" data-target="Setting-modal">
                        Edit Admins
                        <span class="material-symbols-outlined pl-2">edit</span>
                      </button>
                    </div>
                    <div class="dropdown-item">
                      <button class="button js-modal-trigger" data-target="Setting-modal">
                        Delete Admins
                        <span class="material-symbols-outlined pl-2">delete</span>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>


        </div>

      <!-- Navbar End -->
        <div class="navbar-end">
          <div class="navbar-item has-dropdown is-hoverable">
            <a href="#" class="navbar-link">
                <div class="control">
                    <div class="tags has-addons are-medium">
                        <span class="tag is-dark"><?php echo $_SESSION["adminName"]; ?></span>
                    </div>
                </div>
            </a>
            <div class="navbar-dropdown is-right">
              <label class="label navbar-item">
                <?php echo "Access Level: " . $_SESSION["adminLevel"]; ?>
              </label>
              <a href="#" class="navbar-item">
                Profile
              </a>
              <a href="#" class="navbar-item">Settings</a>
              <hr class="navbar-divider"/>
              <a href="../includes/logout.inc.php" class="navbar-item">Log Out</a>
            </div>
          </div>
        </div>
      </div>
</nav>
<!-- Navbar End -->
