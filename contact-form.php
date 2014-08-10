<?php include_once('login.php');?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CitySynth: Register</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="styles.css" rel="stylesheet">
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script type="text/javascript">
    function ValidateForm(frm) {
      if (frm.contact_email.value == "") {alert('Email address is required.');return false;}
      if (frm.contact_email.value.indexOf("@") < 1 || frm.contact_email.value.indexOf(".") < 1) {alert('Please enter a valid email address.');return false;}
      if (frm.contact_name).value == "") {alert('Name is required.');return false;}
      if (frm.contact_message).value == "") {alert('Message body cannot be empty');return false;}  
      return true; }
    </script>
  </head>
  <body>

    <?php   
    if (isset($_GET['login_error']))
    {
      echo "<script>alert('Wrong ID and password')</script>";
    }
    if (isset($_GET['error']))
    {
      echo "<script>alert('Error in registering. Please try again')</script>";
    }

    ?>  


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
            <li class="dropdown">
              <a href="#" class = "dropdown-toggle" data-toggle = "dropdown">Time Lapse Videos <b class="caret"></b></a>
              <ul class = "dropdown-menu">
                <li><a href="video.php">Manhattan</a></li>
              </ul></li>
              <li class="active"><a href="./contact-form.php">Contact Us</a></li>
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

          <p class="navbar-text pull-left">Site Built by Mohit</p>
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
                    <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
                  <div class="col-sm-10">
                    <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
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


        <style type="text/css">
          #wrapper{
            border: 1px 
            color: #808080;
            overflow: auto;
          }
          #register {
            width: 600px;
            border: 1px;
            float: left;
          }
          #signin{
            width: 500px;
            border: 1px;
            float: left;
          }
        </style>

        <div class="container" style="margin: 20px 150px">
    
        <div class="page-header">
            <h1>Contact Us</h1>
        </div>
<?php  
  
        // check for a successful form post  
        if (isset($_GET['s'])) echo "<div class=\"alert alert-success\">".$_GET['s']."</div>";  
  
        // check for a form error  
        elseif (isset($_GET['e'])) echo "<div class=\"alert alert-error\">".$_GET['e']."</div>";  
  
?>  

        <form method="POST" action="contact-form-submission.php" onsubmit="return ValidateForm(this)" class="form-horizontal well">
            <div class="form-group">
                <label class="col-md-2" for="input1">Name</label>
                <div class="col-md-10">
                    <input type="text" class="form-control" name="contact_name" id="input1" placeholder="Your name">
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-2" for="input2">Email Address</label>
                <div class="col-md-10">
                    <input type="email" class="form-control" name="contact_email" id="input2" placeholder="Your email address">
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-2" for="input3">Message</label>
                <div class="col-md-10">
                    <textarea name="contact_message" style="height:150px;" class="form-control" id="input3" placeholder="The message you want to send to me."></textarea>
                </div>
            </div>
            <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <input type="hidden" name="save" value="contact">
                <button type="submit" class="btn btn-success">Send</button>
            </div>
            </div>
        </form>
        
    </div>
      
</body>
</html>