<html lang="EN">
	<head>
		<meta charset="utf-8">
       
		<style>
			.login_holder {
				padding:3px;
				margin-left:auto;
				margin-right:auto;
				margin-top:10%;
				display:table;
				border:solid 1px #cccccc;
				border-width: thin;
			}
			input[type='submit'] {
				float:left;
			}
		</style>
	</head>
	<body bgcolor="#E8E8E8">
    
	<div class="login_holder">
    	<p><h1 style="color:#759DDF;">Welcome To My Chat</h1></p>
		<form method="post" action="inc/login.php">
        <table>
        <tr>
        <td>Username:</td>
        <td><input type="text" name="username" id="username"/></td>
        </tr>
         <tr>
        <td>Password:</td>
        <td><input type="password" name="password" id="password"/></td>
        </tr>
         <tr>
        <td><input type="submit" name="login" id="login" value="Login"/></td>
        <td><a href="signup.php"><input type="button" name="signup" id="signup" value="Sign Up"/></a></td>
        </tr>
		</table>
		</form>
	</div>	
	</body>
</html>