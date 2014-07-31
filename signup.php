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
if (frm.Address.value == "") {alert('Address is required.');frm.Address1.focus();return false;}
if (frm.file.value == "") {alert('Image Upload is required.');frm.file.focus();return false;}
if (frm.password.value == "") {alert('Password is required.');frm.password.focus();return false;}
if (frm.site.value == "") {alert('Site Name is required.');frm.site.focus();return false;}
return true; }
  </script>

  <body>
    <div class="container" style="margin: 10px;">
      <div class="row"><h3>New Registration</h3>
  </div>
 
  <form action="add.php?entity=user" method="post" onsubmit="return ValidateForm(this);" enctype="multipart/form-data" role="form" class="form-horizontal well">
    <div class="form-group">
      <label for="sitename" class="col-md-2">
        Sitename
      </label>
      <div class="col-md-10">
        <input name="site" type="text" class="form-control" id="sitename" placeholder="Enter Name for your site">
      </div>
    </div>

    <div class="form-group">
      <label for="firstname" class="col-md-2">
        First Name:
      </label>
      <div class="col-md-10">
        <input name="FirstName" type="text" class="form-control" id="firstname" placeholder="Enter First Name">
      </div>
 
 
    </div>
 
    <div class="form-group">
      <label for="lastname" class="col-md-2">
        Last Name:
      </label>
      <div class="col-md-10">
        <input name="LastName" type="text" class="form-control" id="lastname" placeholder="Enter Last Name">
      </div>
    </div>
 
    <div class="form-group">
      <label for="address" class="col-md-2">
        Address:
      </label>
      <div class="col-md-10">
        <input name="Address" type="text" class="form-control" id="address" placeholder="Enter your address along with zip code">
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
      <label for="password" class="col-md-2">
        Password:
      </label>
      <div class="col-md-10">
        <input name="password" type="password" class="form-control" id="password" placeholder="Enter Password">
        <p class="help-block">
          Min: 6 characters (Alphanumeric only)
        </p>
      </div>
 
 
    </div>
 
    <div class="form-group">
      <label for="uploadimage" class="col-md-2">
        Upload Image:
      </label>
      <div class="col-md-10">
        <input name="file" type="file" name="uploadimage" id="uploadimage">
        <p class="help-block">
          Allowed formats: jpeg, jpg, gif, png
        </p>
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
    </div>
 
    <div class="row">
      <div class="col-md-2">
      </div>
      <div class="col-md-5">
        <button type="submit" class="btn btn-success">
          Register
        </button>
      </div>
    </div>
  </form>
  </div>
 
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="js/jquery.js"></script>
 
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/bootstrap.min.js"></script>
  </body>
</html>