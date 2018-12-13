<><?php

if ($_POST['submit'] == 'Sign Up')
{

//Check all the required fields are filled 
if(!($_POST['roll_number'])||!($_POST['password'])||!($_POST['retype_password']))
{ 
echo 'All the fields marked as * are compulsary.<br>'; 
include(sign_up.php) ;
} 

else{ 
$roll_number = $_POST['roll_number']; 
$name = $_POST['name']; 
$contact_number = $_POST['contact_number']; 
$graduation = $_POST['graduation']; 
$branch = $_POST['branch']; 
$password = $_POST['password']; 
$retype_password = $_POST['retype_password']; 
}
if($password!=$retype_password)
{
    echo 'The Passwords entered DO NOT match';
    echo 'Kindly Re-Type the Password';
    require('sign_up.php');
    
}

//Connect to mysql server 
$link = mysql_connect('192.168.1.72','garima', 'GARIMAYOI'); 
//Check link to the mysql server 
if(!$link)
{ 
die('Failed to connect to server: ' . mysql_error()); 
} 
//Select database 
$db = mysql_select_db('jagrati'); 
if(!$db){ 
die("Unable to select database"); 
} 
//Create Insert query in volunteer
$query1 = "INSERT INTO volunteer (roll_number, name, contact_number,graduation,branch) VALUES ('$roll_number','$name','$contact_number','$graduation','$branch')"; 
//Execute query1 
$results1 = mysql_query($query1); 
//Create Insert query in login
$query2 = "INSERT INTO login (roll_number, password) VALUES ('$roll_number','$password')"; 
//Execute query2 
$results2 = mysql_query($query2); 
 
//Check if queries executes successfully 
if($results1 == FALSE||$results2 == FALSE) 
echo mysql_error() . '<br>'; 
else 
echo 'Data inserted successfully! '; 
echo 'You are registered as a volunteer for the JAGRATI!!!';
echo 'Kindly login to access our Website:)';
require('login_form.php');
} 
 
 


?>
