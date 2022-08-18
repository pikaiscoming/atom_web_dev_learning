<!DOCTYPE html>
<html>
	<head>
		<title>Page three</title>
    <meta charset=utf-8>    
    <link href="style-3d-gdn.css" rel="stylesheet" type="text/css">
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
          <h2>Page Three</h2>
          <p>This is the content</p>
			<div id="midcol-left">
			<p>This is the midcol-left</p>
				<p>Some text in the left column</p>
			</div>
				<div id="midcol-right">
			<p>This is the midcol-right</p>
					<p>Some text in the right column</p>
			</div>
      <br class="clear">
         </div><!--content div finishes here-->
       
      <footer>
        <p>This is the footer</p>
      </footer>
     <br> 
      </div><!--content div finishes here-->
    </div><!--wrapper div finishes here -->

  </body>
</html>
