<?php
//Start the session to see if the user is authenticated user. 
session_start(); 
//Check if the user is authenticated first. Or else redirect to login page 
if(isset($_SESSION['IS_AUTHENTICATED']) && $_SESSION['IS_AUTHENTICATED'] == 1){ 
require('menu.php'); 
//code to be executed when 'View The Organisers Of The Donation' is clicked
  if ($_POST['submit'] == 'View The Organisers Of The Donation')
    {
    echo'<form name="organiser_donation" method="post" action="organiser_donation.php"> 
<table width="300" border="1" align="center" cellpadding="5" cellspacing="0"> 
<tr> 
<td style="color:rgb(6,59,118)"><b>Enter The Donation Cause</b></td> 
<td><input name="cause" type="text" id="cause" /></td> 
</tr>
<tr> 
<td style="color:rgb(6,59,118)"><b>Enter The Start Date Of The Donation</b></td> 
<td><input name="start_date" type="text" id="start_date" /></td> 
</tr>
</table>
<input type="submit" name="submit" value="View The Organiser" />'; 
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