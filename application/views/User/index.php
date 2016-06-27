
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<title>User Manager</title>
	<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css');?>">
	<style type="text/css">
		body {
		  padding-top: 60px;

		}
		.contenido{
			padding: 10px;
		}
    #form-actualizar{
      padding:0 10px;
    }
	</style>
</head>
<body>
<?php  include 'assets/css/navbar.php'; ?>

  <div class="container">
	 <section class="contenido">
	  <div class="row">
     <div>
  	  <div class="row">
		  <br>
        <div class="col-lg-7"></div>
        <div class="col-lg-3">
          <input type="text" class="form-control" id="buscar" name="buscar" placeholder="Search">
        </div>
        <div class="col-lg-2">
          <button class="btn btn-primary btn-block" id="btnbuscar">Show All</button>
        </div>
		  </div>
		  <hr>
    <div class="row">
    	<div id="usersList" class="col-lg-8">

    	</div>
      <div class="col-lg-4">
    		<div class="panel panel-default">
  				<div class="panel-heading">Edit User</div>
  			  	<div class="panel-body">

            	<form id="form-actualizar" class="form-horizontal" action="" method="post">

                <div class="form-group">
  			  				<input type="hidden" name="user_id" id="id" class="form-control">
  			  			</div>

                <div class="form-group">
                  <label>Name:</label>
                  <input type="text" name="name" id="name" class="form-control">
                </div>


  			  			<div class="form-group">
  			  				<label>Email:</label>
  			  				<input type="text" name="email" id="email" class="form-control">
  			  			</div>

  			  			<div class="form-group">
  			  				<label>PassCode:</label>
  			  				<input type="text" name="pass" id="pass" class="form-control">
  			  			</div>

  			  			<div class="form-group">
  			  				<button type="button" id="btnactualizar" class="btn btn-success btn-block">Guardar</button>
  			  				<button type="button" id="btn-cancelar" class="btn btn-primary btn-block">Cancelar</button>
  			  			</div>

  						</form>

  					</div>
  			   </div>
         </div>
    	 </div>
	   </div>
   </section>
</div>
</div>


<script src="<?php echo base_url('assets/js/jquery-1.11.1.min.js');?>"></script>
<script src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>
<script src="<?php echo base_url('assets/js/user.js');?>"></script>
</body>
</html>
