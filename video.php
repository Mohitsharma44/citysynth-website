<?php include_once('login.php');?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>TimeLapse</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/flexslider.css" type="text/css">
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="js/jquery.flexslider.js"></script>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <script src="js/bootstrap.min.js"></script>
</head>

 <body background="#ecf0f1">

  <style type="text/css">

    div.c-wrapper{
      width: 80%; /* for example */
      margin: 0;
    }

    p.italic {font-style:italic;float: left;}

  </style>

  <div class="navbar navbar-inverse default navbar-fixed-top">
    <!--If the top bar moves, change static to fixed and at the end of this dic class, adjust the next div class with some padding-->
    <style type="text/css">
      p{
        margin: 0px 0px 0px 0px;
      }
      div{
        margin: 0px 0px 0px 0px;
      }
    </style>
    <div class="container">
      <a href="./index.php" class="navbar-brand"><p style="font-size: 22px;font-weight: 500;font-family: 'Open Sans', sans-serif; align="left" ">CITYSYNTH</br></p><p style="font-size:12px; align="left" ">&nbsp;THE URBAN GALAXY</p></a>
      <button class = "navbar-toggle" data-toggle = "collapse" data-target = ".navHeaderCollapse">
        <span class = icon-bar></span>
        <span class = icon-bar></span>
        <span class = icon-bar></span>
      </button>


      <div class="collapse navbar-collapse navHeaderCollapse">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="./index.php">Home</a></li>
          <li><a href="#myModal" data-toggle="modal">Login/ Signup</a></li>
          <li><a href="./sites.php">Live Feed</a></li>
          <li class="active dropdown">
            <a href="#" class = "dropdown-toggle" data-toggle = "dropdown">Time Lapse Videos <b class="caret"></b></a>
            <ul class = "dropdown-menu">
              <li><a href="#">Manhattan</a></li>
            </ul></li>
            <li><a href="./contact-form.php">Contact Us</a></li>
            <li>
              <?php
              if (isset($_SESSION['user']))
                echo "<a href='logout.php'>Logout ".$_SESSION['user']."</a>";
              ?>
            </li>
          </ul>
        </div>

      </div>
    </div> 

    <div class = "navbar navbar-default navbar-fixed-bottom">

      <div class = "container">

        <p class="navbar-text pull-left"></p>
        <a href = "./signup.php" class="navbar-btn btn-success btn pull-right">Volunteer with us!</a>

      </div>

    </div>

    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
            <h4 class="modal-title" id="myModalLabel">Sign In to Citysynth</h4>
          </div>
          <div class="modal-body">
            <form class="form-horizontal" role="form" method="post" action="add.php?entity=login" name="aform" target="_top">
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
                <div class="col-sm-10">
                  <input type="email" class="form-control" id="username" name="username" placeholder="Email">
                </div>
              </div>
              <div class="form-group">
                <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
                <div class="col-sm-10">
                  <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                  <div class="checkbox">
                    <label>
                      <input type="checkbox"> Remember me
                    </label>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                  <button type="submit" class="btn btn-success">Sign in</button>
                  <a href = "./signup.php" class="navbar-btn btn btn-primary">Register</a>
                </div>
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <p class="italic">Signing in will give you access to the live feed <br/>from 
              the cameras of other volunteers.</p>
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>

    <div class="tabContent well" id="video1">
      <h2>Manhattan Timelapse</h2>
      <div>
        <video style="margin-right: auto;margin-left: auto;" width="65%" controls>
  		<source src="videos/Manhattan.mp4" type="video/mp4">
		</video>
      </div>
    </div>
	</body>
</html>