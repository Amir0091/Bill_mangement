<?php include "../includes/usersShow.inc.php"; ?>
<div class="column is-8-desktop is-offset-2-desktop is-9-tablet is-offset-3-tablet is-12-mobile mt-5">
      <div class="p-1">
          <div class="columns is-variable is-desktop">
            <div class="column">
              <h1 class="title">
                Dashboard
              </h1>
            </div>
          </div>

          <div class="columns  is-variable is-desktop">
            <div class="column">
              <div class="card has-background-primary has-text-white">
                <div class="card-header">
                  <div class="card-header-title has-text-white">
                    Total Users
                  </div>
                </div>
                <div class="card-content">
                  <p class="is-size-3"><?php usersCount($users); ?></p>
                </div>
              </div>
            </div>
            <div class="column">
              <div class="card has-background-warning has-text-black">
                <div class="card-header">
                  <div class="card-header-title has-text-black is-uppercase">
                    stat
                  </div>
                </div>
                <div class="card-content">
                  <p class="is-size-3">holder</p>
                </div>
              </div>
            </div>
            <div class="column">
              <div class="card has-background-info has-text-white">
                <div class="card-header">
                  <div class="card-header-title has-text-white is-uppercase">
                    stat
                  </div>
                </div>
                <div class="card-content">
                  <p class="is-size-3">holder</p>
                </div>
              </div>
            </div>
            <div class="column">
              <div class="card has-background-danger has-text-white">
                <div class="card-header">
                <div class="card-header-title has-text-white is-uppercase">
                    stat
                  </div>
                </div>
                <div class="card-content">
                  <p class="is-size-3">holder</p>
                </div>
              </div>
            </div>
          </div>
          
          
          
          
          <div class="columns is-variable">
            <div class="column is-12-desktop is-6-tablet">
              <article class="message is-info">
                <div class="message-header">
                  <p>Users</p>
                </div>
                <div class="message-body">

                  <!-- Users Table Start -->

                  <div class="table-container">

                    <table class="table is-fullwidth">

                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>email</th>
                          <th>Date Joined</th>
                          <th></th>
                        </tr>
                      </thead>

                      <tbody>
                        <?php 
                        usersShow($users);
                        ?>
                      </tbody>

                    </table>

                  </div>

                </div>
              </article>
            </div>

            
          </div>
        </div>
      </div>
    </div>