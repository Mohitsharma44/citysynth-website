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
</head>

<script type="text/javascript">
  function ValidateForm(frm) {
    if (frm.FirstName.value == "") {alert('First Name is required.');frm.FirstName.focus();return false;}
    if (frm.LastName.value == "") {alert('Last Name is required.');frm.LastName.focus();return false;}
    if (frm.Email.value == "") {alert('Email address is required.');frm.FromEmailAddress.focus();return false;}
    if (frm.Email.value.indexOf("@") < 1 || frm.Email.value.indexOf(".") < 1) {alert('Please enter a valid email address.');frm.Email.focus();return false;}
    if (frm.Address1.value == "") {alert('Address is required.');frm.Address1.focus();return false;}
    if (frm.City.value == "") {alert('City is required.');frm.City.focus();return false;}
    if (frm.file.value == "") {alert('Image Upload is required.');frm.City.focus();return false;}
    if (frm.Password.value == "") {alert('Password is required.');frm.Password.focus();return false;}
    if (frm.site.value == "") {alert('Site Name is required.');frm.site.focus();return false;}
    if (frm.Password.value != frm.Confirm.value) {alert('Passwords dont match');return false;}
    return true; }
  </script>

  <body>

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
        <a href="#" class="navbar-brand"><p style="font-size: 22px;font-weight: 500;font-family: 'Open Sans', sans-serif; align="left" ">CITYSYNTH</br></p><p style="font-size:12px; align="left" ">&nbsp;THE URBAN GALAXY</p></a>
        <button class = "navbar-toggle" data-toggle = "collapse" data-target = ".navHeaderCollapse">
          <span class = icon-bar></span>
          <span class = icon-bar></span>
          <span class = icon-bar></span>
        </button>


        <div class="collapse navbar-collapse navHeaderCollapse">
          <ul class="nav navbar-nav navbar-right">
            <li>
              Welcome,
              <?php
              if (isset($_SESSION['user']))
                echo "<a>Hello ".$_SESSION['user']."</a>"."<a href='logout.php'>Logout</a>";
              ?>

            </li>
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#myModal" data-toggle="modal">Login/ Signup</a></li>
            <li class="dropdown">
              <a href="#" class = "dropdown-toggle" data-toggle = "dropdown">Time Lapse Videos <b class="caret"></b></a>
              <ul class = "dropdown-menu">
                <li><a href="#">Manhattan</a></li>
                <li><a href="#">Brooklyn</a></li>
              </ul></li>
              <li><a href="#">Contact Us</a></li>
            </ul>
          </div>

        </div>
      </div> 

      <div class = "navbar navbar-default navbar-fixed-bottom">

        <div class = "container">

          <p class="navbar-text pull-left">Site Built by Mohit</p>
          <a href = "./index.php" class="navbar-btn btn-success btn pull-right">Volunteer with us!</a>

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
              <form class="form-horizontal" role="form">
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
        <div id="wrapper" class="container" style="margin: 20px 50px">
          <div class="container" style="margin: 10px;" id="register">
            <div class="row"><h3>New Registration</h3>
            </div>

            <form action="add.php?entity=user" method="post" onsubmit="return ValidateForm(this);" enctype="multipart/form-data" role="form" class="form-horizontal well">

              <div class="form-group">
                <label for="firstname" class="col-md-2">
                  First Name:
                </label>
                <div class="col-md-10">
                  <input name="FirstName" type="text" class="form-control" id="FirstName" placeholder="Enter First Name">
                  <input name="LastName" type="text" class="form-control" id="LasName" placeholder="Enter Last Name">
                </div>


              </div>

              <div class="form-group">
                <label for="emailaddress" class="col-md-2">
                  Email address:
                </label>
                <div class= "col-md-10">
                  <input name="Email" type="email" class="form-control" id="emailaddress" placeholder="Enter email address">
                  <p class="help-block">
                    Example: yourname@domain.com
                  </p>
                </div>
              </div>



              <div class="form-group">
                <label for="phone" class="col-md-2">
                  Phone:
                </label>
                <div class="col-md-10">
                  <input name="CellPhone" type="text" class="form-control" id="CellPhone" placeholder="Enter your Contact Number">
                </div>
              </div>



              <div class="form-group">
                <label for="address" class="col-md-2">
                  Address:
                </label>
                <div class="col-md-10">
                  <input name="Address" type="text" class="form-control" id="Address" placeholder="Enter your address along with zip code">
                </div>
              </div>



              <div class="form-group">
                <label for="city" class="col-md-2">
                  City:
                </label>
                <div class="col-md-10">
                  <input name="City" type="text" class="form-control" id="City" placeholder="Enter your City">
                </div>
              </div>



              <div class="form-group">
                <label for="State" class="col-md-2">
                  State:
                </label>
                <div class="col-md-10">
                  <input name="State" type="text" class="form-control" id="State" placeholder="Enter your State">
                </div>
              </div>



              <div class="form-group">
                <label for="Zip/ Postal Code" class="col-md-2">
                  Address:
                </label>
                <div class="col-md-10">
                  <input name="Zip" type="text" class="form-control" id="Zip" placeholder="">
                </div>
              </div>



              <div class="form-group">
                <label for="password" class="col-md-2">
                  Password:
                </label>
                <div class="col-md-10">
                  <input name="Password" type="password" class="form-control" id="Password" placeholder="Enter Password">
                </div>

              </div>

              <div class="form-group">
                <label for="address" class="col-md-2">
                  Confirm Password:
                </label>
                <div class="col-md-10">
                  <input name="Confirm" type="text" class="form-control" id="Confirm" placeholder="Enter Password again">
                </div>
              </div>



              <div class="form-group">
                <label for="uploadimage" class="col-md-2">
                  Upload Image:
                </label>
                <div class="col-md-10">
                  <input name="file" type="file" name="file" id="file">
                  <p class="help-block">
                    Allowed formats: jpeg, jpg, gif, png
                  </p>
                </div>
              </div>


              <div class="form-group">
                <label for="site" class="col-md-2">
                  Site Name:
                </label>
                <div class="col-md-10">
                  <input name="site" type="text" class="form-control" id="site" placeholder="Enter name for your site">
                </div>
              </div>


              <div class="checkbox">
                <div class="col-md-2">
                </div>
                <div class="col-md-10">
                  <label>
                    <input type="checkbox">Terms and Conditions</label>
                  </div>

                </div>


                <div class="row">
                  <div class="col-md-2">
                  </div>
                  <div class="col-md-10">
                    <button type="submit" class="btn btn-success">
                      Register
                    </button>
                  </div>
                </div>
              </form>
            </div>

            <div class="container" style="margin: 10px;" id="signin">
              <div class="row"><h3>Existing Users/ Sign In</h3>
              </div>
              <form class="form-horizontal well" role="form">
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
          </div>

        </body>
        </html>