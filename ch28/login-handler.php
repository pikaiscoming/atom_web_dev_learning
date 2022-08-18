<?php
// list the pages to be displayed, 
$formurl = "login-form.php" ;
$members = "tuliptime5.php" ; 
// ------- Set the information received from the form as $ values --------------- 
$username = $_POST['username'] ; 
$password = $_POST['password'] ; 
//Check that the two essential fields are filled in
if (empty($username) || empty($password) ) { 
header( "Location:$formurl" ); 
		exit() ; }
#remove any spaces from beginning and end of password
$username = trim($username);
$password = trim($password); 
if ($username =="picklejar" AND $password="optimum37"){
header( "Location:$members" ) ;
exit();
} else {
   header( "Location:$formurl" ); 
		 }
 ?>