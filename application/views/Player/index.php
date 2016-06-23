<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Team Players</title>
    <?php include 'assets/css/styleinclude.php';?>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/teams.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/fonts.css')?>">
    <style>
      .form-control
      {
        margin-bottom: 10px;
      }

    </style>
  </head>

  <body>
      <?php include '/assets/css/navbar.php'; ?>
    <section id="team" class="section gray-bg">

      <div class="container">

        <div class="row title text-center">
          <h2 class="margin-top">Roster</h2>
          <h4 class="light muted">Choose your favorite player!</h4>
        </div>
        <button type="button" class="btn btn-blue" data-toggle="modal" data-target=".example-modal">Add new player!</button>

        <div class="row">
          <?php
          echo "<section id='portfolio' class='bg-light-gray'>";
          echo"<div class='row'>";
          foreach ($teamsplayer as $teamp) {
            $edit=base_url("Player/?id={$teamp->player_id}");
            $del=base_url("Player/delete/?id={$teamp->player_id}");

                echo<<<HTML
                    <div class='col-md-4 col-sm-6 portfolio-item'>

                        <a href="" class='portfolio-link'>
                            <img src="http://localhost:8080/tarea5/{$teamp->img}" class='img-responsive' id="{$teamp->img}">
                        </a>
                        <div class='portfolio-caption'>
                            <h4>{$teamp->name}</h4><p class='text-muted'><strong>Number</strong>: {$teamp->number}</p>
                            <p class='text-muted'><strong>Position</strong>: {$teamp->position}</p>
                            <a href="{$del}"return onclick="borrar();" class="close">
                              <img src="http://localhost:8080/tarea5/assets/img/icons/cancel-circle.png" />
                            </a>

                            <a href="$edit" class="close"  data-toggle="modal" data-target=".bs-example-modal-lg">
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

      <div class="modal fade example-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                    <h4>ADD A NEW PLAYER</h4>
                  </div>
                  <div class="modal-body">
                    <form class="form" action="<?php echo base_url('Player/save');?>" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <input type="text" name="name" placeholder="Name" class="form-control">
                            <select class="form-control" name="position">
                                <option value="Point Guard">Point Guard</option>
                                <option value="Guard">Guard</option>
                                <option value="Alero">Alero</option>
                                <option value="Ala-pivot">Ala-pivot</option>
                                <option value="Pivot">Pivot</option>
                            </select>
                            <input type="text" name="alias" placeholder="Alias" class="form-control">
                            <input type="number" name="number" placeholder="Number" class="form-control">
                            <input type="hidden" name="team_id" placeholder="Team" class="form-control" value="<?php echo $_GET['id'] ?>">
                            <input type="file" name="img" placeholder="Imagen" class="form-control">

                            <button type="submit" class="btn btn-blue">Save</button>
                      </div>
                    </form>
                  </div>

                </div>

              </div>
          </div>
    <!-- Scripts -->
    <script src="<?php echo base_url('assets/js/jquery-1.11.1.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/owl.carousel.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/wow.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/typewriter.js')?>"></script>
    <script src="<?php echo base_url('assets/js/jquery.onepagenav.js')?>"></script>
    <script src="<?php echo base_url('assets/js/main.js')?>"></script>
    <script>
      function borrar(){
        return confirm("esta seguro");
      }
    </script>
  </body>
</html>
