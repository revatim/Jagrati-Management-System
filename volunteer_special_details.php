<?php
//Start the session to see if the user is authenticated user. 
session_start(); 
//Check if the user is authenticated first. Or else redirect to login page 
if(isset($_SESSION['IS_AUTHENTICATED']) && $_SESSION['IS_AUTHENTICATED'] == 1){ 
require('menu.php'); 
//code to be executed when 'View Volunteers By Their Day' is clicked
  if ($_POST['submit'] == 'View Volunteers By Their Day')
    {
    echo'<form name="volunteer_day" method="post" action="volunteer_day.php"> 
<table width="300" border="1" align="center" cellpadding="5" cellspacing="0"> 
<tr> 
<td style="color:rgb(6,59,118)"><b>Enter The Day On Which You Want To View The Available Volunteers</b></td> 
<td><input name="day" type="text" id="day" /></td> 
</tr>
</table>
<input type="submit" name="submit" value="View The Volunteer" />'; 
  }
    
//code to be executed when 'View Volunteers By Their Subject And Class' is clicked
if ($_POST['submit'] == 'View Volunteers By Their Subject And Class')
    {
  echo'<form name="volunteer_subject_class" method="post" action="volunteer_subject_class.php"> 
<table width="300" border="1" align="center" cellpadding="5" cellspacing="0"> 
<tr> 
<td style="color:rgb(6,59,118)"><b>Enter The Subject For Volunteers To Be Searched</b></td> 
<td><input name="subject_name" type="text" id="subject_name" /></td> 
</tr>
<tr> 
<td style="color:rgb(6,59,118)"><b>Enter The Class For Volunteers To Be Searched</b></td> 
<td><input name="class" type="text" id="class" /></td> 
</tr>
</table>
<input type="submit" name="submit" value="View The Volunteer"/>';  
}


//code to be executed when 'Back To Volunteer Main Page' is clicked
    if ($_POST['submit'] == 'Back To Volunteer Main Page')
    {
        header('location:volunteer_front_page.php');
    }
}
   else
{ 
    echo 'Your session is over!!!Please Login Again!!!';
header('location:login_form.php'); 
exit(); 
}


?>