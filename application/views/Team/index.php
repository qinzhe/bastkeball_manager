<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Team</title>
    <?php   include 'assets/css/styleinclude.php'; ?>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/teams.css')?>">
  </head>

  <body>
      <?php  include 'assets/css/navbar.php'; ?>
    <section id="team" class="section gray-bg">

      <div class="container">

        <div class="row title text-center">
          <h2 class="margin-top">Teams</h2>
          <h4 class="light muted">Choose your dream team!</h4>
        </div>
        <button type="button" class="btn btn-blue" data-toggle="modal" data-target=".bs-example-modal-lg">Add new team!</button>

        <div class="row">
          <?php
          echo "<section id='portfolio' class='bg-light-gray'>";
          echo"<div class='row'>";
          foreach ($teams as $team) {
            $select=base_url("Player/?t={$team->cname}");
            $edit=base_url("Team/edit/?id={$team->id}");
            $del=base_url("Team/delete/?id={$team->id}");
                echo<<<HTML
                    <div class='col-md-4 col-sm-6 portfolio-item'>
                        <a href="{$select}" class='portfolio-link'>
                            <img src="{$team->image}" class='img-responsive' id="{$team->image}">
                        </a>
                        <div class='portfolio-caption'>
                            <h4>{$team->city}</h4>
                            <p class='text-muted'>{$team->cname}</p>

                            <a href="$del" class="close">
                              <img src="http://localhost:8080/tarea5/assets/img/icons/cancel-circle.png" />
                            </a>

                            <a class="close"href="{$edit}" >
                              <img src="http://localhost:8080/tarea5/assets/img/icons/pencil.png" />
                            </a>
                            <br>
                            <br>
                        </div>
                      </div>
HTML;

          }

          echo "</div>";
          echo "</section>";
          ?>

      </div>
    </div>
    </section>
    <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
              <h4>add a new team</h4>
            </div>
            <div class="modal-body">
              <form class="form" action="<?php echo base_url('Team/saveTeam');?>" method="post" enctype="multipart/form-data">

                  <div class="row">

                      <input type="text" name="cname" placeholder="Name" class="form-control">
                      <input type="text" name="city" placeholder="city" class="form-control">
                      <input type="file" name="image" placeholder="image" class="form-control">

                      <button type="submit" class="btn btn-blue">Save</button>

                </div>
              </form>
            </div>
          </div>
        </div>
    </div>
    <!-- Scripts -->
    <script src="<?php echo base_url('assets/js/jquery-1.11.1.min.js')?>"></script>
    <script src="<?php  echo base_url('assets/js/owl.carousel.min.js')?>"></script>
    <script src="<?php  echo base_url('assets/js/bootstrap.min.js')?>"></script>
    <script src="<?php  echo base_url('assets/js/wow.min.js')?>"></script>
    <script src="<?php  echo base_url('assets/js/typewriter.js')?>"></script>
    <script src="<?php  echo base_url('assets/js/jquery.onepagenav.js')?>"></script>
    <script src="<?php  echo base_url('assets/js/main.js')?>"></script>
  </body>
</html>
