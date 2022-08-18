<!DOCTYPE html>
<html>
  <head>
    <title>Contact Us</title>
 <meta charset=utf-8>   
 <link href="style-3d-gdn.css" rel="stylesheet" type="text/css">
<style type="text/css">
   #midcol,#content{background:#aaddaa;}
    h3 {text-align:center;}
 	/*Position the form elements on the page*/
	#form {width:500px; margin:auto; text-align:center;}
	.label {float:left; width:400px; text-align:right; clear:left;}
	.chk1 {text-align:left; padding-left:30%;}
	#rad {text-align:left; padding-left:30%;}
	#message {text-align:center; margin:auto;}
	#message-field {text-align:left;}
	#submit { text-align:center;}
	.red {color:red; font-weight:bold;}   
 </style> 
<!--[if lte IE 8]>
		<script src="html5.js">		
    </script>
		<![endif]-->
    </head>
  <body>
    <div id="wrapper">
      <header>
        <h1>The Spring Garden</h1>
      </header>
 <?php include ('includes/hmenu.html'); ?>
<div id="content">
<div id="leftcol">
         <?php include ('includes/vmenu.html'); ?>
</div>
        <div id="rightcol">
          <p>This is the far right column</p>
        </div>
        <div id="midcol">
          <h2>Contact Us</h2>
          <!--<h3>Required items <span class="red">*</span></h3>-->
<div id="form"><!--start of form-->
<form action="form-handler.php" method="post">
<div>
<h3>Required items <span class="red">*</span></h3>

<label class="label" for="username"><strong>Your Name</strong>
<span class="red">*</span>
	<input id="username" name="username" size="30"></label>
</div><br><br>
<div>
<label class="label" for="useremail"><strong>Your Email Address</strong>
<span class="red">*</span>
	<input id="useremail" name="useremail" size="30"></label>
</div><br><br>
<div>
<label class="label" for="userphone"><strong>Telephone Number </strong>
	<span class="red">*</span>
	<input id="userphone" name="userphone" size="30"></label>
</div><br>
<div>
  <h3>Please email me the following brochure(s)</h3>
</div>
<div class="chk1"> 
<input id="chkbox1" name="bulbs" value="Yes" type="checkbox">
	<label for="chkbox1"><strong>Bulbs</strong></label>
</div><br>
<div class="chk1">
<input id="chkbox2" name="seeds" value="Yes" type="checkbox">
	<label for="chkbox2"><strong>Seeds</strong></label>
</div><br>
<div class="chk1">
<input id="chkbox3" name="plants" value="Yes" type="checkbox">
	
	<label for="chkbox3"><strong>Plants ready for potting on</strong></label>
</div>
<div>
<h3>How can we respond to your enquiry?</h3>
</div>
<div id="rad"> 
<input id="email" name="contact" value="email" type="radio" checked="checked"> 
	<label for="email"><strong>Email</strong></label>
<input id="phone" name="contact" value="phone" type="radio">
	<label for="phone"><strong>Phone</strong></label></div>
<div id="message">
<label for="message"><h3><strong>Please type your enquiry</strong></h3></label>
<textarea id="message-field" name="message" rows="12" cols="40"></textarea>
</div>
<div id="submit">
<input id="submit" value="Submit" title="Submit" type="submit">
</div>
</form><!--end of form-->
</div>
      </div><!--content div finishes here-->
      <footer>
       <br>This is the footer<br><br>
      </footer>
    </div>
</div><!--wrapper div finishes here-->
 </body>
</html>
