<?php 
//define login_id and password of the database here so that it can be changed easily 
$dbid = 'garima';
$dbpass ='GARIMAYOI'; 
$database = 'jagrati';
//check if user has pressed submit button 
//value of submit button is login
if ($_POST['submit']=='Login')
{
    // store username and password in variables 
    //method of getting data - text input - post method
    $username = $_POST['username'] ;
    $password = $_POST['password'] ;
    // check if both username and password have been entered 
    if($username && $password )
    {
        $link = mysql_connect('localhost', $dbid ,$dbpass); 
        
        //check if link is established 
        if(!$link) 
        { 
            //if link not established the program should die
            die('Failed to connect to server: ' . mysql_error()); 
        } 
        //select database
        $db = mysql_select_db ($database) ;
        //check if the database has been selected 
        if (!$db)
        {
            //if not connected to database program should die
            die('Falied to connect to database:  '.mysql_error());
        }
        //check login details 
        $query = "SELECT roll_number FROM volunteer WHERE roll_number = '$username'" ;
        //check if the given username exists 
        $check_user = mysql_query($query);
        //if username doesn't exist

        if($check_user==NULL)
        {
            //redirect to login page (new) with a message that says username or password is incorrect  
            
            header('location:login_form_new.php');
        }
        
        //check username and password from table
        else
        {
        $query2 = "SELECT * FROM login WHERE roll_number = '$username'  AND password = '$password'" ;
        //only stored boolean values
        $check_user2 = mysql_query($query2);
        //check if username and password match 
        if($check_user2)
        {
           session_start(); 
$_SESSION['IS_AUTHENTICATED'] = 1; 
$_SESSION['USER_ID'] = $login;
            header('location:volunteer_front_page.php'); 
        }
        else
        {
            //if they dont match redirect to login page (new) that says username or password is incorrect 
            header('location:login_form_new.php');
            
        }
    }
}
    }
    else if($_POST['submit']=='Forgot Password???')
    {
     
  echo '<h4>Enter Your Name , User-Name And Contact Number </h4>';  
        echo '<html>
        <form name="iforgotmypassword" method="post" action="forgot_login_form.php"> 
<table width="300" border="1" align="center" cellpadding="5" cellspacing="0"> 
<tr> 
<td style="color:rgb(6,59,118)"><b>User Name</b></td> 
<td><input name="username" type="text" id="username" /></td> 
</tr> 
<tr> 
<td style="color:rgb(6,59,118)"><b>Name</b></td> 
<td><input name="name" type="text" id="name" /></td> 
</tr>
<tr> 
<td style="color:rgb(6,59,118)"><b>Contact Number</b></td> 
<td><input name="contact_number" type="text" id="contact_number" /></td> 
</tr>
<tr> 
<td style="color:rgb(6,59,118)"><b>New Password</b></td> 
<td><input name="new_password" type="password" id="new_password" /></td> 
</tr>
</table>
<input type="submit" name="submit" value="Reset Password" />
        </form>
        </html>';
    }
    

?>