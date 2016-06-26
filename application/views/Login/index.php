<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="http://localhost:8080/Ajax/assets/css/bootstrap.min.css">
      <link rel="stylesheet" href="http://localhost:8080/Ajax/assets/css/font-awesome.min.css">
      <link rel="stylesheet" href="http://localhost:8080/Ajax/assets/css/form-elements.css">
      <link rel="stylesheet" href="http://localhost:8080/Ajax/assets/css/style.css">
      <style>
      body{
        background-image: url('http://localhost:8080/Ajax/assets/img/backgrounds/1.jpg');
      }

    </style>
  </head>
  <body>
    <!-- Top content -->
           <div class="top-content">

               <div class="inner-bg">
                   <div class="container">
                       <div class="row">
                           <div class="col-sm-8 col-sm-offset-2 text">
                               <h1><strong>Cardio NBA</strong></h1>
                               <div class="description">
                               	<p>
   	                            	login <strong>"if you don't hava a account"</strong>create one.

                               	</p>
                               </div>
                           </div>
                       </div>

                       <div class="row">
                           <div class="col-sm-5">

                           	<div class="form-box">
   	                        	<div class="form-top">
   	                        		<div class="form-top-left">
   	                        			<h3>Login to our site</h3>
   	                            		<p>Enter username and password to log on:</p>
   	                        		</div>
   	                        		<div class="form-top-right">
   	                        			<i class="fa fa-key"></i>
   	                        		</div>
   	                            </div>
   	                            <div class="form-bottom">
                               <form id="login" action="http://localhost:8080/tarea5/Login/login" class="form-horizontal" method="post">
   				                    	<div class="form-group">
   				                    		<label class="sr-only" for="form-username">Username</label>
   				                        	<input type="text" name="email" placeholder="Username..." class="form-username form-control" id="form-username">
   				                        </div>
   				                        <div class="form-group">
   				                        	<label class="sr-only" for="form-password">Password</label>
   				                        	<input type="password" name="pass" placeholder="Password..." class="form-password form-control" id="form-password">
   				                        </div>
   				                        <button type="submit" class="btn">Sign in!</button>
   				                    </form>
   			                    </div>
   		                    </div>

   		                	<div class="social-login">
   	                        	<h3>...or login with:</h3>
   	                        	<div class="social-login-buttons">
   		                        	<a class="btn btn-link-1 btn-link-1-facebook" href="#">
   		                        		<i class="fa fa-facebook"></i> Facebook
   		                        	</a>
   		                        	<a class="btn btn-link-1 btn-link-1-twitter" href="#">
   		                        		<i class="fa fa-twitter"></i> Twitter
   		                        	</a>
   		                        	<a class="btn btn-link-1 btn-link-1-google-plus" href="#">
   		                        		<i class="fa fa-google-plus"></i> Google Plus
   		                        	</a>
   	                        	</div>
   	                        </div>

                           </div>

                           <div class="col-sm-1 middle-border"></div>
                           <div class="col-sm-1"></div>

                           <div class="col-sm-5">

                           	<div class="form-box">
                           		<div class="form-top">
   	                        		<div class="form-top-left">
   	                        			<h3>Sign up now</h3>
   	                            		<p>Fill in the form below to get instant access:</p>
   	                        		</div>
   	                        		<div class="form-top-right">
   	                        			<i class="fa fa-pencil"></i>
   	                        		</div>
   	                            </div>
   	                            <div class="form-bottom">
   				                    <form method="post" action="http://localhost:8080/tarea5/Login/register"class="registration-form" id="register">

                                   <div class="form-group">
   				                    		  <label class="sr-only" for="form-first-name">First name</label>
   				                        	<input type="text" name="name" placeholder="First name..." class="form-control" id="form-first-name"/>
   				                        </div>

   				                        <div class="form-group">
   				                        	<label class="sr-only" for="form-email">Email</label>
   				                        	<input type="text" name="email" placeholder="Email..." class="form-control" id="form-email"/>
   				                        </div>

                                   <div class="form-group">
                                     <label class="sr-only" for="form-email">Password</label>
                                     <input type="password" name="pass" placeholder="Password..." class="form-control" id="form-pass"/>
                                   </div>

   				                        <button type="submit" class="btn">Sign me up!</button>
   				                    </form>
   			                    </div>
                           	</div>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
</body>
</html>
