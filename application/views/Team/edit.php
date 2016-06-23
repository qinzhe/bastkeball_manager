<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Update Team</title>
    <?php   include 'assets/css/styleinclude.php'; ?>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/teams.css')?>">
  </head>
  <body>
    <form class="form" action="<?php echo base_url('Team/saveTeam');?>" method="post" enctype="multipart/form-data">

        <div class="row">

            <input type="hidden" name="id" placeholder="Name" class="form-control" value="<?php echo $team->id?>">
            <input type="text" name="cname" placeholder="Name" class="form-control" value="<?php echo $team->cname?>">
            <input type="text" name="city" placeholder="city" class="form-control" value="<?php echo $team->city?>">
            <input type="file" name="image" placeholder="image" class="form-control" value="<?php echo $team->image?>">

            <button type="submit" class="btn btn-blue">Save</button>

      </div>
    </form>
  </body>
</html>
