<!DOCTYPE html>
<html>
  <head>
   	<title>Spring Garden slideshow</title>
    <meta charset=utf-8>
    <meta name="description" content="Bulbs, crocuses, snowdrops, daffodils for the spring garden">
    <meta name="keywords" content=" bulbs, spring bulbs, spring garden bulbs">
    <link href="style-3d-gdn.css" rel="stylesheet" type="text/css">
          <!--[if lte IE 8]>
	<script src="html5.js">		
    	</script>
         <![endif]-->

<!--THE JAVASCRIPT FILE FOR THE SLIDESHOW IS LOADED-->
    <script type="text/javascript" src="slideshow.js">
</script>
<script type="text/javascript">
SLIDES = new slideshow("SLIDES");
<!--FOR YOUR OWN SLIDESHOW, REPLACE THE SLIDE WITH YOUR OWN SLIDE-->
s = new slide();
s.src = "slides/crocus-372-304.jpg";
s.text = "Open link in same window";
SLIDES.add_slide(s);
<!--FOR YOUR OWN SLIDESHOW, REPLACE THE SLIDE WITH YOUR OWN SLIDE-->
s = new slide();
s.src = "slides/daffs-372-304.jpg";
s.text = "Open link in same window";
SLIDES.add_slide(s);
<!--FOR YOUR OWN SLIDESHOW, REPLACE THE SLIDE WITH YOUR OWN SLIDE-->
s = new slide();
s.src = "slides/pansies-372-304.jpg";
s.text = "Open link in same window";
SLIDES.add_slide(s);
<!--FOR YOUR OWN SLIDESHOW, REPLACE THE SLIDE WITH YOUR OWN SLIDE-->
s = new slide();
s.src = "slides/bergenia-372-304.jpg";
s.text = "Open link in same window";
SLIDES.add_slide(s);
<!--FOR YOUR OWN SLIDESHOW, REPLACE THE SLIDE SHOWN WITH YOUR OWN SLIDE-->
s = new slide();
s.src = "slides/hellebore-372-304.jpg";
s.text = "Open link in same window";
SLIDES.add_slide(s);
</script>
    </head>
<!--NEXT, THE SLIDESHOW IS SHOWN AND PAUSED AS SOON AS THE PAGE IS DISPLAYED-->
<body onLoad="SLIDES.pause()">
<!--THE FOLLOWING CODE IS THE SAME AS MOST PAGES IN THE SPRING GARDEN WESITE-->
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
                    <h2>Slide Show</h2>
<!—THE SLIDESHOW IS LOCATED IN THE MIDCOL-LEFT--> 
<div id="midcol-left">
<a href="javascript:SLIDES.hotlink()">
<img name="SLIDESIMG" src="slides/crocus-372-304.jpg"  width="372" height="304" border="1" alt="slideshow image">
</a>
<script type="text/javascript">
<!--
if (document.images)
{ SLIDES.set_image(document.images.SLIDESIMG);
SLIDES.update();}
//-->
</script>
<!--THE CONTROL CONSOLE IS NEXT THE JAVASCRIPT COMMAND onClick IS INVOKED-->
<form>
<input type=button value="Play" onClick="SLIDES.play()">
<input type=button value="Pause" onClick="SLIDES.pause()">
<input type=button value="Next" onClick="SLIDES.next()">
<input type=button value="Previous" onClick="SLIDES.previous()">
</form>
<script type="text/javascript">
if (document.images)
{ SLIDES.set_image(document.images.SLIDESIMG);}
</script>    
</div>
<div id="midcol-right">
<h3>&nbsp;</h3>
	<p>The slides show  a selection of Spring Flowers</p>
<p>If you click the <em>Play</em> button the slide show will cycle through the five slides continuously.</p>
<p>Click the <em>Pause</em> button to stop the slide show, you will then be able 
to click the <em>Next</em> and <em>Previous</em> buttons to view the slides in your own time.</p>
</div>
      </div><!--content div finishes here--> 
      <br class="clear">
  <?php include ("includes/footer.html"); ?>
    </div></div><!--wrapper div finishes here-->
  </body>
</html>
