<!DOCTYPE html>
<html>
<head>
	<title>Club Template</title>
	
	<meta charset="utf-8">

	<link rel="stylesheet" href="/harbingernews/css/bootstrap.css" type="text/css">
	<link rel="stylesheet" href="/harbingernews/css/bootstrap-responsive.css" type="text/css">
	<link rel="stylesheet" href="/harbingernews/css/all.css" type="text/css">
	<link rel="stylesheet" href="/harbingernews/css/clubs.css" type="text/css">

	<script type="text/javascript" src="/harbingernews/js/jquery-1.8.0.min.js"></script>
	<script type="text/javascript" src="/harbingernews/js/bootstrap.min.js"></script>
		
	
	
</head>
<body>
	<div id = "content" style ="">
		<?php include('../../tools/header.shtml') ?>
		<?php include('../header2.shtml') ?>
		
		<div id="info" class="container">
			<div class="row">
				<div class="span8" id="reminders" style = "display:none;">
				
					<div class="alert alert-error">
  						<button type="button" class="close" data-dismiss="alert">&times;</button>
  						<h3>Important!</h3>
					</div>
				
				</div>
				
				<div id="upcoming_events" style = "display: none;">
					<h4>Upcoming Events</h4>
					<ul>
						<li>Event One</li>
						<li>Event Two</li>
						<li>Event Three</li>
						<li>Event Four</li>
					</ul>
					
				</div>		
		
			</div>
			
			<div class="span4 row-fluid" id="pictures">
				<strong><p>Other Photos</p></strong>
				<div class="span10 offset1"> <!--Keep pictures in div with small border around.-->
					<a href="Marching Band Seniors.jpg"><img src="Marching Band Seniors.png" alt="Marching Band Seniors" title="Click here to view full size." style="margin-bottom: 10px"></a>
				</div>
			</div>
			
			<div class="row-fluid">
				<div class = "about">
					<h4 class = "offset1">About Marching Band</h4>
					<div class="row-fluid">
						<div class="span6" id="photo_holder" style="float: right;">
							<a href="Marching Band.jpg"><img src="Marching Band.png" alt="Marching Band" title="Click here to view full size."></a>
						</div>
						<div class="span6"style="float: left;">
							<p>Advisor(s): <em>Coming Soon</em></p> 
							<p>Room: <em>Coming Soon</em></p>
							<p>Information Coming Soon</p>
							<br/>
							<p>This club meets <em>TBA</em></p>
						</div>
					</div>
				</div>			
			</div><!-- end "row-fluid" -->
			
			<br />
			
		</div>
	
	
	<div id="footer_spacer"></div>
	</div><!-- end "content" -->
	
	<div id="footer">
		<?php include('../../tools/footer.shtml') ?>
		
		<div class="container">
			<div class="pull-right">
					This page was last updated by Alex LaFroscia on September 10, 2012.
			</div>
		</div>
	
	</div>
	
</body>
</html>
