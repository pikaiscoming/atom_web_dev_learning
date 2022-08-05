<?php
//Feedback form-handler// 
// set the website owner's email address 
$mailto = "owners-address@example.co.uk";
// set the web designers email address for test purposes 
//$mailto = "designers-address@example.co.uk";
$subject = "Feedback from The Spring Garden website"; 
// list the pages to be displayed, 
$formurl = "http://localhost/Chapter-23/contact.php" ;
$errorurl = "http://localhost/Chapter-23/error.html" ; 
$thankyouurl = "http://localhost/Chapter-23/thankyou.html" ; 
$emailerrurl = "http://localhost/Chapter-23/emailerr.html" ; 
$errorphoneurl = "http://localhost/Chapter-23/phonerror.html" ;
$errormessageurl = "http://localhost/Chapter-23/messagerror.html" ;
$errorboxurl = "http://www.localhost/Chapter-23/boxerror.html" ;

$uself = 0;
// ------- Set the information received from the form as $ values --------------- 
$headersep = (!isset( $uself ) || ($uself == 0)) ? "\r\n" : "\n" ; 
$username = $_POST['username'] ; 
$useremail = $_POST['useremail'] ; 
$userphone = $_POST['userphone']; 
$bulbs = $_POST['bulbs']; 
$seeds = $_POST['seeds']; 
$plants = $_POST['plants'];
$contact=$_POST['contact'];
$message = $_POST['message'] ; 
$http_referrer = getenv( "HTTP_REFERER" ); 
if (!isset($_POST['useremail'])) { 
            header( "Location: $formurl" );
            exit;}
//Check that all three essential fields are filled in
if (empty($username) || empty($useremail) || empty($message)) { 
header( "Location: $errorurl" ); 
		exit;}
//OPTIONAL FILTER FOR CHECK BOXES
//if ((!$bulbs and !$seeds and !plants)) { 
//header( "Location: $errorboxurl" ); 
//		exit;}

//check that no urls have been inserted in the username text area
if (strpos ($username, '://')||strpos($username, 'www') !==false){
    header( "Location: $errorsuggesturl" );
            exit;}
//Check that no urls  haves been entered in the phone field
if (strpos ($userphone, '://')||strpos($userphone, 'www') !==false){
    header( "Location: $errorphoneurl" );
            exit;}
// Remove all characters from the phone entry that are not numbers (digits)
$userphone = preg_replace('/\D+/', '', ($userphone)); 
//check that no urls have been inserted in the message text area
if (strpos ($message, '://')||strpos($message, 'www') !==false){
    header( "Location: $errormessageurl" );
            exit;}
if ( preg_match( "[\r\n]", $username ) || preg_match( "[\r\n]", $useremail )) { 
          header( "Location: $errorurl" ); 
          exit;} 
#remove any spaces from beginning  and end of email address
$useremail = trim($useremail); 
#Check for permitted email address patterns 
$_name = "/^[-!#$%&\'*+\\.\/0-9=?A-Z^_`{|}~]+"; 
$_host = "([-0-9A-Z]+\.)+"; 
$_tlds = "([0-9A-Z]){2,4}$/i"; 
if(!preg_match($_name."@".$_host.$_tlds,$useremail)) { 
          header( "Location: $emailerrurl" ); 
          exit;} 
if(!$bulbs) {$bulbs = "No";} 
if(!$seeds) {$seeds = "No";} 
if(!$plants) {$plants = "No";}
if($contact !=null) {$contact = $contact;}
$messageproper = 
          "This message was sent from:\n" . 
          "$http_referrer\n" . 
          "------------------------------------------------------------\n" .
          "Name of sender: $username\n" . 
          "Email of sender: $useremail\n" . 
          "Telephone No: $phone\n" . 
          "bulbs?: $bulbs\n" . 
          "seeds?: $seeds\n" .
          "plants?: $plants\n" .
          "Contact?:$email\n" .
          "Contact?;$phone\n" .		
          "------------------------- MESSAGE -------------------------\n\n" . 
          $message . 
          "\n\n------------------------------------------------------------\n" ; 
mail($mailto, $subject, $messageproper, "From: \"$username\" <$useremail>" ); 
header( "Location: $thankyouurl" ); 
exit;
?>
