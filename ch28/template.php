<!DOCTYPE html>
<html>
  <head>
    <title>login Form</title>
 <meta charset=utf-8>
 <link href="style-3d-gdn.css" rel="stylesheet" type="text/css">
 <link rel="stylesheet" href="login-style.css">
	<!--[if lte IE 8]>
		<script src="html5.js">
    	</script>
	<![endif]-->
  </head>
 <body>
    <div id="wrapper">
      <header>
        <h1>The Spring Garden Club</h1>
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
          <h2>Login</h2>
          <p>The members' page will not appear if you enter incorrect information</p>
          <form  action="login-handler.php" method="post">
          <h3>R items <span class="red">*</span></h3>
          <label class="label" for="username"><strong>User&nbsp;Name</strong>
          <span class="red">*</span>
          <input  id="username" name="username" size="30"></label><br>
          <label class="label" for="password"><strong>password</strong><span class="red">*</span>
          <input id="password" type="password" name="password" size="30"></label> <br> <br>
          <div id="Submit" value="Submit" title="Submit" type="submit">
          </div>

          </form>

</div><br class="clear">
     <footer>
        <p>This is the footer</p>
      </footer>
     <br>
      </div><!--content div finishes here-->
    </div><!--wrapper div finishes here -->
  </body>
</html>
