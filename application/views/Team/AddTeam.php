<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Add new Teams</title>
    <?php   include 'assets/css/styleinclude.php'; ?>

    <link rel="stylesheet" href="assets/css/myStyle.css">
  </head>
  <body>
    <?php  include 'assets/css/navbar.php'; ?>

    <section class="insertData">

      <form class="form" action="<?php echo base_url('Team/saveTeam');?>" method="post" enctype="multipart/form-data">

          <div class="row">

              <input type="text" name="cname" placeholder="Name" class="form-control">
              <input type="text" name="city" placeholder="city" class="form-control">
              <input type="file" name="image" placeholder="image" class="form-control">

              <button type="submit" class="btn">Save</button>
        </div>
      </form>
   </section>


 <script src="js/jquery.js"></script>
 <script src="js/bootstrap.min.js"></script>
 <script src="js/bootstrap-select.min.js"></script>

 </body>
</html>
