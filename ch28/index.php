<!DOCTYPE html>
<html>
  <head>
    	<title>Home Page</title>
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
          <h2>Home Page</h2>
          <div id="midcol-left">
            <p class="left">Spring, the sweet spring, is the year's pleasant king; Then 
			blooms each thing...<br>
			<span class="quote">From "Spring" by 
			Thomas Nash</span><br>
			  <p class="left">Nothing heralds the arrival of spring better than 
			  a garden full of spring flowers. This web site will help you to 
			  plan your spring flower display and choose the best bulbs and 
			  plants,</p>
            <p>View and order items using this web site or visit the Garden 
			Center at 10 The Street, Townsville.</p>
          </div>
          <div id="midcol-right">
			  <img alt="Daffodils" title="Daffodils" src="images/daffs-372x304-1.jpg" width="372" height="304"> 
			  </div><br class="clear">
          </div>
       
      <footer>
        <p>This is the footer</p>
      </footer>
     <br> 
      </div><!--content div finishes here-->
    </div><!--wrapper div finishes here -->

  </body>
</html>
