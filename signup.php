<?php
session_start(); 
include('connection.php');
if(isset($_POST['signup'])){
	$username = $_POST['username'];
	$password = $_POST['password'];
	$fullname = $_POST['fullname'];
	
	$res2 = $mysqli->query("SELECT * FROM tbllogin WHERE username = '".$_POST['username']."'");
	if($res2->num_rows > 0){
		$msg = 'User Name Already Exist!';		
	}else{
	
$result = $mysqli->query("INSERT INTO `tbllogin` (`username`, `password`, `fullname`) VALUES ('".$username."', '".$password."', '".$fullname."')");

    $_SESSION['user'] = $username;
	header('location:inc/home.php');
	exit();
	
	}
	
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Sign Up HERE</title>
<script type="text/javascript" src="main.js"></script>
</head>

<body bgcolor="#E8E8E8">
<form action="" method="post">

<table align="center">
	<tr><td colspan="2"><h1 style="color:#759DDF;">Welcome To My Chat</h1></td></tr>
	<tr>
    <td colspan="2"><h2>Sign Up For Chat</h2></td>
    </tr>
    <tr><td colspan="2">
<?php if(isset($msg)){
		echo '<p style="color:red;">'.trim($msg).'</p>';	
	}?>
    </td></tr>
    <tr>
    <td>User Name</td>
    <td><input type="text" name="username" id="username" /></td>
    </tr>
    <tr>
    <td>Password</td>
    <td><input type="password" name="password" id="password" /></td>
    </tr>
    <tr>
    <td>Full Name</td>
    <td><input type="text" name="fullname" id="fullname" /></td>
    </tr>
    <tr>
    <td colspan="2" align="center"><input type="submit" name="signup" id="signup" value="SUBMIT" onclick="return valid()"/></td>
    </tr>
</table>
</form>
</body>
</html>