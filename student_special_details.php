<?php
//Start the session to see if the user is authenticated user. 
session_start(); 
//Check if the user is authenticated first. Or else redirect to login page 
if(isset($_SESSION['IS_AUTHENTICATED']) && $_SESSION['IS_AUTHENTICATED'] == 1){ 
require('menu.php'); 
//code to be executed when 'View Students By Their Village' is clicked
  if ($_POST['submit'] == 'View Students By Their Village')
    {
    echo'<form name="student_village" method="post" action="student_village.php"> 
<table width="300" border="1" align="center" cellpadding="5" cellspacing="0"> 
<tr> 
<td style="color:rgb(6,59,118)"><b>Enter The Village From Where You Want To View The Students</b></td> 
<td><input name="village" type="text" id="village" /></td> 
</tr>
</table>
<input type="submit" name="submit" value="View The Students" />'; 
  }
    
//code to be executed when 'View Students By Their Subject And Class' is clicked
if ($_POST['submit'] == 'View Students By Their Subject And Class')
    {
  echo'<form name="student_subject_class" method="post" action="student_subject_class.php"> 
<table width="300" border="1" align="center" cellpadding="5" cellspacing="0"> 
<tr> 
<td style="color:rgb(6,59,118)"><b>Enter The Subject For Subject To Be Searched</b></td> 
<td><input name="subject_name" type="text" id="subject_name" /></td> 
</tr>
<tr> 
<td style="color:rgb(6,59,118)"><b>Enter The Class For Student To Be Searched</b></td> 
<td><input name="class" type="text" id="class" /></td> 
</tr>
</table>
<input type="submit" name="submit" value="View The Students"/>';  
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