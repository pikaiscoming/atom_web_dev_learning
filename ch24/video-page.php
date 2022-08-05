<!DOCTYPE html>
<html>
  <head>
   	<title>Video page. Spring Garden</title>
    <meta charset=utf-8>
    <meta name="description" content="Terms and conditions. Bulbs, seeds and plants for the spring garden">
    <meta name="keywords" content="bulbs, spring bulbs, seeds, plants, spring garden bulbs">
    <link href="style-3d-gdn.css" rel="stylesheet" type="text/css">
    <style type="text/css">
/*body {text-align:center; background-color:white; color:black; font-family:Arial; font-size:100%; font-weight:bold;}*/
video {margin-left:200px;}
</style>
          <!--[if lte IE 8]>
	<script src="html5.js">		
    	</script>
         <![endif]-->
    </head>
  <body>
    <div id="wrapper">
 <?php include ("includes/header.html"); ?>
 <?php include ("includes/nav.html"); ?>
<div id="content">
<div id="leftcol">
 <?php include ("includes/vertnav.html"); ?>
</div>
        <div id="rightcol">
          <p>This is the far right column</p>
        </div>
        <div id="midcol">
            <h2>Demonstrating the HTML5 video tag combined with a YouTube fall-back</h2>
<p>&nbsp;</p>
<video width="420" height="315" controls="controls">
<source src=" video/wagon3.mp4" type="video/mp4">
<source src=" video/wagon3.webm" type="video/webm">
<source src=" video/wagon3.ogv" type="video/ogg">
<iframe width="420" height="315" src="http://www.youtube.com/embed/cUrSf-YDdyU" frameborder="0" allowfullscreen></iframe>
</video>          </div>
      </div><!--content div finishes here--> 
      <br class="clear">
  <?php include ("includes/footer.html"); ?>
    </div><!--wrapper div finishes here-->
  </body>
</html>
