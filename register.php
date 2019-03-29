<?php session_start(); ?>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>JClassifications</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/homepage.css" rel="stylesheet">
    <link href="css/modal-login.css" rel="stylesheet">
    <script src="modal-login.js"></script>
    <script type="text/javascript" src="js/categories.js"></script>
    <script type="text/javascript" src="js/clasification.js"></script>
    <link href="open-iconic/font/css/open-iconic-bootstrap.css" rel="stylesheet">


  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="index.php">JClassifications</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.php">Contact</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="#">Register</a>
            </li>

          </ul>

        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <div class="container">

      <div class="row">

        <div class="col-lg-3">

          <!-- BEGIN # BOOTSNIP INFO -->

          <?php 
   if(isset($_SESSION['logged']) && $_SESSION['logged']==1){

     echo   "<span><img width='15px' height='15px' src='img/online.png'><span id='user_logueado'>".$_SESSION['user']."</span>"." | "."<span id='cerrar_sesion'></span> - <a href='logout.php'><span id='cerrar_sesion'>Cerrar Sesión</span></a></span>"; 

        }else{ ?>

<div class="container">
  <div class="row">
<br>


        <p class="text-center"><a href="#" class="btn btn-primary btn-lg" role="button" data-toggle="modal" data-target="#login-modal">Login</a></p>
  </div>
</div>

<!-- END # BOOTSNIP INFO -->


<!-- BEGIN # MODAL LOGIN -->
<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
      <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header" align="center">
         <h2>Login Form</h2>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
          </button>
        </div>
                
                <!-- Begin # DIV Form -->
                <div id="div-forms">
                
                    <!-- Begin # Login Form -->
                    <form id="login-form">
                    <div class="modal-body">
                <div id="div-login-msg">
                                <div id="icon-login-msg" class="glyphicon glyphicon-chevron-right"></div>
                                <span id="text-login-msg">Type your username and password.</span>
                            </div>
                <input id="login_username" class="form-control" type="text" placeholder="Username" required>
                <input id="login_password" class="form-control" type="password" placeholder="Password" required>
                            <div class="checkbox">                              
                            </div>
                  </div>
                <div class="modal-footer">
                            <div>
                                <button type="submit" class="btn btn-primary btn-lg btn-block">Login</button>
                            </div>
                  <div>                           
                                <button id="login_register_btn" type="button" class="btn btn-link">Register</button>
                            </div>
                </div>
                    </form>
                    <!-- End # Login Form -->
                    
                    <!-- Begin | Lost Password Form -->
                    <form id="lost-form" style="display:none;">
                  <div class="modal-body">
                <div id="div-lost-msg">
                                <div id="icon-lost-msg" class="glyphicon glyphicon-chevron-right">Login Form</div>
                                <span id="text-lost-msg">Type your e-mail.</span>
                            </div>
                <input id="lost_email" class="form-control" type="text" placeholder="E-Mail" required>
                  </div>
                <div class="modal-footer">
                            <div>
                                <button type="submit" class="btn btn-primary btn-lg btn-block">Send</button>
                            </div>
                            <div>
                                <button id="lost_login_btn" type="button" class="btn btn-link">Log In</button>
                                <button id="lost_register_btn" type="button" class="btn btn-link">Register</button>
                            </div>
                </div>
                    </form>
                    <!-- End | Lost Password Form -->
                    
                    <!-- Begin | Register Form -->

                    <?php if(isset($_SESSION['logged']) && $_SESSION['logged']==1){ ?>

                    <div class="alert alert-warning" role="alert">
  A simple warning alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
</div>

<?php }else { ?>


                    <form id="register-form" style="display:none;">

                    <div class="modal-body">
                <div id="div-register-msg">
                                <div id="icon-register-msg" class="glyphicon glyphicon-chevron-right"></div>
                                <span id="text-register-msg">Register an account.</span>
                            </div>
                <input id="register_username" class="form-control" type="text" placeholder="Username (type ERROR for error effect)" required>
                            <input id="register_email" class="form-control" type="text" placeholder="E-Mail" required>
                            <input id="register_password" class="form-control" type="password" placeholder="Password" required>
                  </div>
                <div class="modal-footer">
                            <div>
                                <button type="submit" class="btn btn-primary btn-lg btn-block">Register</button>
                            </div>
                            <div>
                                <button id="register_login_btn" type="button" class="btn btn-link">Log In</button>
                                <button id="register_lost_btn" type="button" class="btn btn-link">Lost Password?</button>
                            </div>
                </div>
                    </form>
                    <!-- End | Register Form -->
                  <?php  } ?>
                </div>
                <!-- End # DIV Form -->
                
      </div>
    </div>
  </div>

  <?php } ?>
    <!-- END # MODAL LOGIN -->
          <div class="list-group">
            <?php 
if(isset($_SESSION['logged']) && $_SESSION['logged']==1){ 

  echo "<h2><u>Your profile</u></h2>";

}else{

           echo "<h2>MotoGP Classification</h2>";
}
            require_once("bd/connection.php");
      
      
            $strConsulta = "SELECT * FROM wa_users";
      
            $result = $conexion->query($strConsulta); 
            $fila=$result->fetch();
            ?> 

          <table class='table table-hover'>

<?php if(isset($_SESSION['logged']) && $_SESSION['logged']==1){ 
  echo "<th>";
  echo "<tr><b>Name:</b> ".$fila['user']."</tr><br>";
  echo "<tr><b>Mail:</b> ".$fila['mail']."</tr>";
  echo "</th>";

  
  }else { ?>

      <blockquote class="blockquote text-center">
  <p class="mb-0">Hi guest! This web app is a project for the Course <b>Web Applitacions Technologies</b> in AGH University of Science and Technology, writed in HTML, PHP JS and MySQL.</p>
  <footer class="blockquote-footer"> <cite title="Source Title">Javier Cholbi 2018</cite></footer>
</blockquote>

<?php

}

?>
     </table>
           

          </div>

        </div>
        <!-- /.col-lg-3 -->

        <div class="col-lg-9">

          <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
              <div class="carousel-item active">
                <img class="d-block img-fluid" src="img/rossi1.jpg" alt="First slide">
              </div>
              <div class="carousel-item">
                <img class="d-block img-fluid" src="img/vin.jpg" alt="Second slide">
              </div>
              <div class="carousel-item">
                <img class="d-block img-fluid" src="img/zarcobrno.jpg" alt="Third slide">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>

          <div class="row">
              
  </thead>
  <?php 
  require_once("bd/connection.php"); 

?>

<div class="container">
    <form class="form-horizontal" role="form" method="POST" action="proc_register.php">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <h2>Registration Form</h2>
                <hr>
            </div>
        </div>

        <?php if(isset($_SESSION['logged']) && $_SESSION['logged']==1){ ?>
<img src="img/error.png" sizes="20%"><br>
        <div class="alert alert-warning" role="alert">

  ERROR! <a href="#" class="alert-link">You´re already registered!</a>.
</div>

        <?php }else{ ?>


        <div class="row">
            <div class="col-md-3 field-label-responsive">
                <label for="name">Username:</label>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-user"></i></div>
                        <input type="text" name="user" class="form-control" id="user"
                               placeholder="userexample" required autofocus>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-control-feedback">
                        <span class="text-danger align-middle">
                            <!-- Put name validation error messages here -->
                        </span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 field-label-responsive">
                <label for="email">E-Mail:</label>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-at"></i></div>
                        <input type="text" name="mail" class="form-control" id="mail"
                               placeholder="you@example.com" required autofocus>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-control-feedback">
                        <span class="text-danger align-middle">
                    
                        </span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 field-label-responsive">
                <label for="password">Password:</label>
            </div>
            <div class="col-md-6">
                <div class="form-group has-danger">
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-key"></i></div>
                        <input type="password" name="password" class="form-control" id="password"
                               placeholder="Password" required>
                    </div>
                </div>
            </div>
        
        </div>      
           
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <button type="submit" class="btn btn-danger"><i class="fa fa-user-plus"></i> Register</button>
            </div>
        </div>
    </form>

    <?php } ?>
</div>



<br/><br/> 

<?php header("location:index.php"); ?>
      
</div>



          <!-- /.row -->


        </div>
        <!-- /.col-lg-9 -->

      </div>
      <!-- /.row -->

    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; JClassifications 2018</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
