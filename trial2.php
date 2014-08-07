<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css/flexslider.css" type="text/css">
<title>Login/Register</title>
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
</head>
<body>
<a style="color:#FFF" href="home.php"><h2 style="float:left;font-size: 24px;font-weight: 500;font-family: 'Open Sans', sans-serif;">&nbsp&nbsp&nbsp&nbsp&nbsp&nbspCITYSYNTH
<br>THE URBAN GALAXY</h2></a>
<div style="width:100%;">
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
<div style="float:right; width:50%">
<br><br><br><br><br>	
<h2>Register</h2>
<div style="box-sizing: border-box; display: inline-block; width: auto; max-width: 680px; background-color: #000; border: 2px solid #FFF; border-radius: 5px; box-shadow: 0px 0px 8px #000; margin: 50px auto auto;">
<div style="background: #000; border-radius: 5px 5px 0px 0px; padding: 15px;"><span style="font-family: verdana,arial; color: #626262; font-size: 1.00em; font-weight:bold;">Enter details</span></div>
<form action="add.php?entity=user" id="" method="post" onsubmit="return ValidateForm(this);" enctype="multipart/form-data">
<table border="0" cellpadding="5" cellspacing="0" width="600">
<tr>
<td><b>First, Last Name*:</b></td>
<td>
<input id="FirstName" name="FirstName" type="text" maxlength="60" style="width:146px; border:1px solid #999999" />
<input id="LastName" name="LastName" type="text" maxlength="60" style="width:146px; border:1px solid #999999" />
</td>
</tr><tr>
<td><b>Email address*:</b></td>
<td><input id="Email" name="Email" type="text" maxlength="60" style="width:300px; border:1px solid #999999" /></td>
</tr><tr>
<td>Phone:</td>
<td><input id="CellPhone" name="CellPhone" type="text" maxlength="43" style="width:250px; border:1px solid #999999" /></td>
</tr><tr>
<td><b>Address 1*:</b></td>
<td><input id="Address1" name="Address1" type="text" maxlength="120" style="width:350px; border:1px solid #999999" /></td>
</tr><tr>
<td><b>City*:</b></td>
<td><input id="City" name="City" type="text" maxlength="120" style="width:300px; border:1px solid #999999" /></td>
</tr><tr>
<td>State/Province:</td>
<td><input id="State" name="State" type="text" maxlength="120" style="width:300px; border:1px solid #999999" /></td>
</tr><tr>
<td>Zip/Postal Code:</td>
<td><input id="Zip" name="Zip" type="text" maxlength="30" style="width:100px; border:1px solid #999999" /></td>
</tr><tr>
<td><b>Password*:</b></td>
<td><input id="Password" name="Password" type="password" maxlength="120" style="width:300px; border:1px solid #999999" /></td>
</tr><tr>
<td><b>Confirm Password*:</b></td>
<td><input id="Confirm" name="Confirm" type="password" maxlength="120" style="width:300px; border:1px solid #999999" /></td>
</tr><tr>
<td><b>Upload Image*:</b></td>
<td><input type="file" name="file" style="width:300px; border:1px solid #999999" accept="image/*"></td>
</tr><tr>
<td><b>Site Name*:</b></td>
<td><input type="text" name="site" style="width:300px; border:1px solid #999999"></td>
</tr><tr>

<td colspan="2" align="center">
<br />

* - required fields. &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
<input id="skip_Submit" name="skip_Submit" type="submit" value="Submit" />
</td>
</tr>
</table>
<br />
</div>
</div>
</form>
</div>

<div style="float:left; width:50%">
<div style="text-align: center;">
<h2>Login</h2>
	<div style="box-sizing: border-box; display: inline-block; width: auto; max-width: 480px; background-color: #FFFFFF; border: 2px solid #FFF; margin: 50px auto auto;">
	<div style="background: #000; padding: 15px;"><span style="font-family: verdana,arial; color: #626262; font-size: 1.00em; font-weight:bold;">Enter your login and password</span></div>
	<div style="background:#000
     ; padding: 15px">
	<style type="text/css" scoped>
	td { text-align:left; font-family: verdana,arial; color: #626262; font-size: 1.00em; }
	input {background-color: #181818; border: 1px solid #CCCCCC; border-radius: 5px; color: #666666; display: inline-block; font-size: 1.00em;  padding: 5px; width: 100%; }
	input[type="button"], input[type="reset"], input[type="submit"] { height: auto; width: auto; cursor: pointer; box-shadow: 0px 0px 5px #0361A8; float: right; margin-top: 10px; }
	table.center { margin-left:auto; margin-right:auto; }
	.error { font-family: verdana,arial; color: #D41313; font-size: 1.00em; }
	</style>
<form method="post" action="add.php?entity=login" name="aform" target="_top">
<input type="hidden" name="action" value="login">
<input type="hidden" name="hide" value="">
<table class='center'>
<tr><td>Email ID:</td><td><input type="text" id="username" name="username"></td></tr>
<tr><td>Password:</td><td><input type="password" id="password" name="password"></td></tr>
<tr><td>&nbsp;</td><td><input type="submit" value="Login"></td></tr>
<tr><td colspan=2>&nbsp;</td></tr>

</table>
</form>
</div></div></div>

</div>
</div>

</body>

</html>