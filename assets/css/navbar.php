
<nav class="navbar">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo base_url('Home')?>"><img src="<?php echo  base_url('img/logo.png'); ?>" data-active-url="<?php echo  base_url('assets/img/logo-active.png'); ?>" alt=""></a>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right main-nav">
        <li><a href="<?php echo base_url('Home')?>">Home</a></li>
        <li><a href="<?php echo base_url('Team')?>">Teams</a></li>
        <li><a href="<?php echo base_url('User')?>">User</a></li>
        <?php
        if($this->session->userdata('login')){
          echo "<li><a>".'Hello! '.$this->session->userdata('name')."</a></li>";
          echo "<li><a href='".base_url('Login/logout')."'>Logout</a></li>";
        }else{
          echo"<li><a href='http://localhost:8080/tarea5/Login' class='btn btn-blue'>Sign Up</a></li>";

        }
        ?>
      </ul>
    </div>
    <!-- /.navbar-collapse -->
  </div>
  <!-- /.container-fluid -->
</nav>
