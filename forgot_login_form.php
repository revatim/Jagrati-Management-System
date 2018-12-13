<?php
$id = 'garima';
$pass ='GARIMAYOI';
$database = 'jagrati';
if($_POST['submit']=='Reset Password')
    {
        //if user has forgotten password he can reset his password 
        $username = $_POST['username'] ;
        $name = $_POST['name'];
        //variable contact is to store contact number of the volunteer
        $contact_number =$_POST['contact_number'];
     $new_password =$_POST['new_password'];
        
        //check if username is entered 
        if($username && $name && $contact_number && $new_password)
        {
            //establish link to the database 
            $link = mysql_connect('192.168.1.72','garima','GARIMAYOI');
            //check if link is established
            if(!$link)
            {
                die('Failed to connect to server: '.mysql_error());
            }
            $db = mysql_select_db ($database);
            //check if database is selected
            if(!$db)
            {
                die('Failed to connect to database : '.mysql_error());
            }
            //check login details - username 
            $query = "SELECT roll_number FROM volunteer WHERE roll_number = '$username'" ;
            //check if the given username exists 
            $check_user = mysql_query($query);
            
            //if username doesn't exist
            if(!$check_user)
            {
                //redirect to login page (new) with a message that says username or password is incorrect
                include('login_form_new.php');
                
            }
           
            $query1="UPDATE login SET password='$new_password' WHERE roll_number = '$username'";
            $result1 = mysql_query($query1);
          
                if(!$result1)
                {
                    die("Couldn't update password".mysql_error() );
                }
                else
                {
                    echo 'Password reset!!!';
                    echo 'Please Login With The New Password';
                    include('login_form.php');
                }
            }
         
        }

        

    
?>