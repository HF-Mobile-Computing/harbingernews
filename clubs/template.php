<!--

This is the basic template for a Harborfields High School club page.  You are free to 
edit this page however you want, including with things that are not included in my
short tutorial.  Within these comments (what you're reading right now), I will 
explain how to edit just about everything on this page.

I will place a comment (set off by a <!-- to start it) 

Original page written by Alex LaFroscia, class of 2013.
Last editted September, 2012

--> 


<html>
<head>

	<!-- Below here is the title of the webpage.  Although it won't change anything
		on the page itself, it will change the name that appears at the top of the
		browder window or in the tab. -->
	<title>Club Template</title>
	
	<!-- Don't touch this, or anything on the lines that start with <link....
		you're welcome to add more, if you know what you're doing, but please don't
		remove anything.  You won't be happy, trust me. -->
	<meta charset="utf-8">
	
	<!-- Below are links to the stylesheets.  These are what give the page its color,
		shape, and layout.  You can include these value within this document, which
		we will do, although we also pull in information from other documents. -->
	<link rel="stylesheet" href="/css/bootstrap.css" type="text/css">
	<link rel="stylesheet" href="/css/bootstrap-responsive.css" type="text/css">
	<link rel="stylesheet" href="/css/all.css" type="text/css">
	
	<!-- Below are links to Javascript files.  These are what allow the page to have
		animations and such, as well as other things that I won't explain (if you're
		interested, use Google).  DO NOT remove the line below.  You're welcome to
		add more Javascript if you know what you're doing, but would not suggest
		trying anything if you're unfamiliar with the language. -->
	<script type="text/javascript" src="../js/jquery-1.8.0.min.js"></script>
	<script type="text/javascript" src="../js/bootstrap.min.js"></script>
	
	<!-- Below is the CSS that's included on the page.  These are the values that
		we'll be editting to change things about this page. -->
	
	<style type="text/css">
	
		/* Below is the block of CSS that lets you edit things about the page as a whole.  If you 
			want to change the background of the page, you can do so by removing the comment symbols
			from around where it says "background: white;", and then replace "white" with another 
			color, hexidecimal value, or url to an image.
			
			The syntax for adding a new image as the background is 
				backgroud: url(path/to/image.whatever);
				
			Additionally, you can add in lines to change the color and size of all of the text in the
			block below.  Text color would look like
				color: white;
			Text size would look like
				font-size: 2em;
			"em"s are scaling values that multiply the size of the text by whatever it is by default.
			For example, 2ems is twice the size of the text normally.  If you want larger text, try 
			something around 1.15 or 1.2 ems.  It doesn't seem like a lot, but it is. */
		body {
			/* background: white; */
		}
	
		#page_title {
			display: block;
			/* Changing the line below to a different color will change the color of
				the box that says "Template" */
			background: white;
			/* The value below changes the height of the box that says "Template" */
			height: 70px;
			margin-top: 10px;
			padding-top: 5px;
		}
		
		#page_title h1 {
		}
		
		/* This block of CSS is related to the box that's titled "Important Reminders" */
		#reminders {
			/* Changing the value below (red) will change the color of the background */
			background: red;
			/* Changing the value below (black) will change the color of the text */
			color: black;
			margin-bottom: 10px;
			margin-top: 10px;
		}
		
		#reminders p {
			
		}
		
		/* This block of CSS is related to the box that's titled "Upcoming Events" */
		#upcoming_events {
			background: blue;
			margin-bottom: 10px;
			margin-top: 10px;
		}
		
		#upcoming_events h4 {
			text-align: center;
		}

				
		#photos {
			background: green;
		}
		
		/* This block of CSS is related to the box that holds the photo albums */
		#photo_holder {
			/* Changing the value below (grey) will change the color of background */
			background: grey;
			height: 120px;
			text-align: center;
			margin-bottom: 10px;
		}
	
	</style>
	
</head>
<body>

	<?php include($_SERVER['DOCUMENT_ROOT'].'/header.php') ?>
	
	<div id="content" class="container">
	
		<div id="page_title">
			<h1 style="text-align: center;">Template</h1>
		</div>
		
		<div id="info" class="container">
			<div class="row">
				<div class="span8" id="reminders">
				
				<!-- Below here is the title of this "Important Reminders
					Box.  You can change the title by replacing the words "Important 
					Reminders" with whatever you want -->
					
				<h4 style="text-align: center;">Important Reminders</h4>
				
				<!-- This is the content of the "Important Reminders" box.
				
					You can put a paragraph in here by writing it all on one line,
					with a <p> before the paragraph and </p> after it.
					
					Alternately, if you wanted a list in this spot, you can copy and
					paste the following code below, replacing each line with your own
					text, or adding more lines by wrapping them with a <li> before and
					</li> after.
					
					<uL>
						<li>This is the first item.</li>
						<li>This is the second item.</li>
					</ul>
					
					-------------------------------------------->
				
				<p>Maecenas faucibus mollis interdum. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Nulla vitae elit libero, a pharetra augue. Vestibulum id ligula porta felis euismod semper. Maecenas sed diam eget risus varius blandit sit amet non magna.</p>
				
				</div>
				<div class="span4" id="upcoming_events">
				<!-- Changing the line below will change the name of the box curently
					titled 'Upcoming Events" -->
					<h4>Upcoming Events</h4>
					<ul>
					<!-- You can add/delete bullet points from the list by either adding
						new lines wrapped in a <li> and </li>, or by deleting lines all
						together -->
						<li>Event One</li>
						<li>Event Two</li>
						<li>Event Three</li>
						<li>Event Four</li>
					</ul>
					
				</div>		
		
			</div> 
			<div class="row">
				<div class="span12">
					<h4>About <em>This Club</em></h4>
					
					<p>Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Nullam quis risus eget urna mollis ornare vel eu leo. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Sed posuere consectetur est at lobortis. Aenean lacinia bibendum nulla sed consectetur. Nullam quis risus eget urna mollis ornare vel eu leo. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</p>
					<p>Aenean lacinia bibendum nulla sed consectetur. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed posuere consectetur est at lobortis. Nullam id dolor id nibh ultricies vehicula ut id elit. Sed posuere consectetur est at lobortis.</p>
					
				</div>
			
			</div><!-- end "row" -->
			
			<br />
			
			<div class="row">
				<div class="span4" id="photo_holder">
					<em>Photo Holder</em>
				</div>
				<div class="span4" id="photo_holder">
					<em>Photo Holder</em>
				</div>
				
				<div class="span4" id="photo_holder">
					<em>Photo Holder</em>
				</div>
			</div><!-- end "row" -->
		</div>
	
	
	<div id="footer_spacer"></div>
	</div><!-- end "content" -->
	
	<div id="footer">
		<?php include($_SERVER['DOCUMENT_ROOT'].'/footer.php') ?>
	
	</div>
	
</body>
</html>
