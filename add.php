<?php include_once('login.php');?>
<?php 
	$entity = $_GET['entity'];
	if($entity == 'user')
	{
		$first = $_POST['FirstName'];
		$last=$_POST['LastName'];
		$email = $_POST['Email'];
		$phone=$_POST['CellPhone'];
		$address = $_POST['Address1'];
		$city=$_POST['City'];
		$state = $_POST['State'];
		$zip=$_POST['Zip'];
		$pass = $_POST['Password'];
		$site = $_POST['site'];		
		$upload_path = 'images/uploads/';
		$allowedExts = array("gif", "jpeg", "jpg", "png");
		$filesize = $_FILES["file"]["size"];
		$temp = explode(".", $_FILES["file"]["name"]);
		$extension = end($temp);
		$filename=$_FILES["file"]["name"];
			  move_uploaded_file($_FILES["file"]["tmp_name"],
			  "images/uploads/" . $_FILES["file"]["name"]);
   		
		$strTo = "citysynth@gmail.com";  
		$strSubject = "New Registration";  
		$strMessage = "New Registration recevied..\n";  
		  
		//*** Uniqid Session ***//  
		$strSid = md5(uniqid(time()));  
		  
		$strHeader = "";  
		$strHeader .= "From:Registration@citysynth.com";  
		  
		$strHeader .= "MIME-Version: 1.0\n";  
		$strHeader .= "Content-Type: multipart/mixed; boundary=\"".$strSid."\"\n\n";  
		$strHeader .= "This is a multi-part message in MIME format.\n";  
		  
		$strHeader .= "--".$strSid."\n";  
		$strHeader .= "Content-type: text/html; charset=utf-8\n";  
		$strHeader .= "Content-Transfer-Encoding: 7bit\n\n";  
		$strHeader .= $strMessage."\n\n";  
		  
		//*** Attachment ***//   
		$strFilesName = $_FILES["file"]["name"];  
		$strContent = chunk_split(base64_encode(file_get_contents("images/uploads/" . $_FILES["file"]["name"])));  
		$strHeader .= "--".$strSid."\n";  
		$strHeader .= "Content-Type: application/octet-stream; name=\"".$strFilesName."\"\n";  
		$strHeader .= "Content-Transfer-Encoding: base64\n";  
		$strHeader .= "Content-Disposition: attachment; filename=\"".$strFilesName."\"\n\n";  
		$strHeader .= $strContent."\n\n";  
		$flgSend = @mail($strTo,$strSubject,null,$strHeader);
		if($flgSend)  
		$query = "INSERT into user1(first,last,email,phone,address,city,state,zip,password,path,site) VALUES('{$first}','{$last}','{$email}','{$phone}','{$address}','{$city}','{$state}','{$zip}','{$pass}','{$filename}','{$site}')";
		$result = mysql_query($query,$connection);
			if($result)
			{
				$query = "select * from user1 where email = '{$email}'";
				$result = mysql_query($query,$connection);
				$row = mysql_fetch_array($result);
				$firstname=$row['first'];
				$_SESSION['user']=$firstname;
				header("Location:index.php");
			}
			else
			{
				header("Location: signup.php?error=1");
				exit;
			}
	}
	elseif($entity == 'login')
	{
		$username = $_POST['username'];
		$password = $_POST['password'];
		$query = "select * from user1 where email = '{$username}'";
		$result = mysql_query($query,$connection);
		$row = mysql_fetch_array($result);
		if($password == $row['password'])
		{ 
			$firstname=$row['first'];
			$_SESSION['user']=$firstname;
			header("Location:index.php");
		}
		else
		{
			header("Location:signup.php?login_error=1");
		}
	}
?>