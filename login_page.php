<?php
//session_start();

//NO NEED TO CHECK BELOW CODE HERE>>>>IT WILL BE DONE IN INDEX.PHP
/*
if( isset($_SESSION["from"]))
{
	if( strcmp($_SESSION["from"], "logout.php") == 0 ) //if it is from logout.php
	{
	session_destroy();
	$_SESSION = array();
	unset($_SESSION["from"]);

	}
	//if it is from user or admin
	else if(strcmp($_SESSION["from"], "user.php") == 0  || strcmp($_SESSION["from"], "admin.php") == 0 ) 
	{
		//echo "from ".$_SESSION["from"];
		header("location:".$_SESSION["from"]);
//		exit();
	}
	
}
*/
?>
<html>
<head>
<title>Login</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<style type="text/css">
body,td,th,a {
	color:#FFF;
}

</style>

</head>
<body>

	<form name="login_form" method="post" action="verify_login.php">
	
<br/><br/><br/><br/>
	  <table width="387" border="0" align="center" cellpadding="2" cellspacing="0" bgcolor="#666666" style="border-radius:10px;box-shadow:10px 10px 5px #999">
		<tr>
			<td colspan="3" ><strong>Login </strong></td>
		</tr>
        
		<tr style="color:blue;">
			<td width="118" align="right" > Username</td>
            <td><label >:</label></td>
			<td width="247" align="center" ><input name="username" type="text" id="username"></td>
		</tr>
		
        <tr style="color:blue;">
			<td align="right" >Password</td>
	        <td><label >:</label></td>
			<td align="center" ><input name="password" type="password" id="password" maxlength="15"></td>
		</tr>
		
        <tr style="color:blue;">
			<td >&nbsp;</td>
			<td >&nbsp;</td>
			<td align="center" ><input type="submit" name="Submit" value="Login"> <a href="signup_page.php">New User?</a> </td>
		</tr>
		
      </table>
        <?php

			if( isset($_SESSION["wrong_UP"]) && strcmp($_SESSION["wrong_UP"],"error") == 0 )
			{
				echo  "<center><p style='margin-top:10px;position:relative;color:red;'>Incorrect username or password.</p></center>";
				//for checking again later
				unset($_SESSION["wrong_UP"]);
	
			}
			//whenever a new user account is created, below message will be displayed
			if( isset($_SESSION["success_in_signup"]) )
			{
				echo  "<center><p style='margin-top:10px;position:relative;color:gray;'>$_SESSION[success_in_signup]</p></center>";
				//for checking again later
				unset($_SESSION["success_in_signup"]);
	
			}
		?>
        
</form>


</body>
</html>

