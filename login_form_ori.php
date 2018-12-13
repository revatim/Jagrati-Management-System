
 
<?php 
session_start(); 
session_unset(); 
session_destroy(); 
?> 
<html> 
<head> 
<title>Login Page</title> 
</head> 
<body> 
<h3 align="center"> - Enter your login Details - </h3> 
<form name="myloginForm" method="post" action="login_check.php"> 
<table width="300" border="1" align="center" cellpadding="5" cellspacing="0"> 
<tr> 
<td style="color:rgb(6,59,118)"><b>User Name</b></td> 
<td><input name="username" type="text" id="username" /></td> 
</tr> 
<tr> 
<td style="color:rgb(6,59,118)"><b>Password</b></td> 
<td><input name="password" type="password" s/></td> 
</tr> 
<tr> 
<td colspan="2" align="center"> 
<input type="submit" name="submit" value="Login" /></td> 
</tr> 
</table> 
    <form method="post" action="sign_up.php"> 
    <input type="submit" name="submit" value="Sign Up" />
    </form>
    <form method="post" action="login_check.php"> 
    <input type="submit" name="submit" value="Forgot Password???" />
    </form>
</body> 
</html>
