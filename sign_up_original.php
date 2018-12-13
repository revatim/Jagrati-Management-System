
 
<!-- <?php 
session_start(); 
session_unset(); 
session_destroy(); 
?> --> 
<html> 
<head> 
<title>Login Page</title> 
</head> 
<body> 
<h3 align="center"> - Enter your Details To Successfully Sign Up:- </h3> 
<form name="SignUpForm" method="post" action="sign_up_insert.php"> 
<table width="300" border="1" align="center" cellpadding="5" cellspacing="0"> 
<tr> 
<td style="color:rgb(6,59,118)"><b>Roll Number*</b></td> 
<td><input name="roll_number" type="text" id="roll_number" /></td> 
</tr> 
<tr> 
<td style="color:rgb(6,59,118)"><b>Name</b></td> 
<td><input name="name" type="name" s/></td> 
</tr>
<tr> 
<td style="color:rgb(6,59,118)"><b>Contact Number</b></td> 
<td><input name="contact_number" type="contact_number" s/></td> 
</tr>
<tr> 
<tr> 
<td style="color:rgb(6,59,118)"><b>Graduation</b></td> 
<td><input name="graduation" type="graduation" s/></td> 
</tr>
<tr> 
<tr> 
<td style="color:rgb(6,59,118)"><b>Branch</b></td> 
<td><input name="branch" type="branch" s/></td> 
</tr>
<tr> 
<td style="color:rgb(6,59,118)"><b>Password*</b></td> 
<td><input name="password" type="password" s/></td> 
</tr>
<tr> 
<td style="color:rgb(6,59,118)"><b>Re-Type Password*</b></td> 
<td><input name="retype_password" type="password" s/></td> 
</tr>
<tr> 
<td colspan="2" align="center"> 
<input type="submit" name="submit" value="Sign Up" /></td> 
</tr> 
</table> 
</body> 
</html>
