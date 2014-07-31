<!DOCTYPE html>
<html>
<head>
  <title>
    New Registration
  </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Bootstrap -->
  <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->

    <!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->
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
    <div id="wrap">
      <div class="container" style="margin: 10px; width: 50%;">
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

        <div class="container" style="margin: 10px; float:left; width: 50%;">
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
      </div>
      <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
      <script src="js/jquery.js"></script>

      <!-- Include all compiled plugins (below), or include individual files as needed -->
      <script src="js/bootstrap.min.js"></script>
    </body>
    </html>