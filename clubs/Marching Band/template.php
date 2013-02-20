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
				
				<div id="upcoming_events">
					<h4>Upcoming Events</h4>
					<ul>
						<li>Global Justice Concert: March 1st @ 7pm</li>
					</ul>
					
				</div>		
		
			</div>
			
			<div class="span4 row-fluid" id="pictures">
				<strong><p>Other Photos</p></strong>
				<div class="span10 offset1"> <!--Keep pictures in div with small border around.-->
					<a href="big/Marching Band Seniors.jpg"><img src="small/Marching Band Seniors.png" alt="Marching Band Seniors" title="Click here to view full size." style="margin-bottom: 10px"></a>
				</div>
			</div>
			
			<div class="row-fluid">
				<div class = "about">
					<h4 class = "offset1">About Marching Band</h4>
					<div class="row-fluid">
							<a href="big/Marching Band.jpg"><img src="small/Marching Band.png" alt="Marching Band" title="Click here to view full size." align = "right" style = "margin: 10px;"></a>
						<div>
							<p>Advisor: Ms. Scilla</p> 
							<p>Room: <em>Coming Soon</em></p>
							<p>The Harborfields High School Marching Band is made up of band, orchestra, and choral students from Harborfields High School. The marching band season officially begins in August at our annual summer clinic, run by the Long Island Summer Music Workshop at SUNY Farmingdale.  This summer’s clinic is Thursday – Saturday, August 15th – 17th.  The band rehearses on Thursday evenings from 6:30 – 8:30 pm at the high school, beginning the first week of school through the end of October.  The band performs throughout the school year at various evenings, including football games, parades, the Newsday Marching Band Festival and special field trips.  In the past, the Marching Band has traveled to Busch Gardens in Virginia, Disney World in Orlando, Florida and will be returning to perform at Hershey Park this May.</p>
							<br/>
							<p>If you have any questions about joining the marching band, please email the director Ms. Allison Scilla at scillaa@harborfieldscsd.org</p>
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
