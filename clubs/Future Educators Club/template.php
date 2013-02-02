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
			<div class="row">
				<div class = "about">
					<h4 class = "offset1">About the Future Educators Club</h4>
					<p>Advisors: Ms. Turzer and Ms. Fleishman</p> 
					<p>Room: T18</p>
					<p>Future Educators is a club designed for students who have expressed an interest in pursuing the field of education after high school. Students meet monthly at the high school to discuss teaching strategies, placement experiences, and community service ideas. Our students are afforded the opportunity to work in an elementary classroom one day a week after school. In this venue they have the chance to experience first hand what happens in a classroom. In addition, students participate in a variety of activities that support the community including Safe Halloween and Special Olympics. This club is open to students in grades 9-12. Future Educators meeting the requirements can join the Future Educators National Honor Society.</p>
					<br/>
					<p>See advisors for details.</p>

				</div>
			
			</div><!-- end "row" -->
			
			<br />
			
			<div class="row" style = "display:none;">
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
		<?php include('../../tools/footer.shtml') ?>
		
		<div class="container">
			<div class="pull-right">
					This page was last updated by Brian Kelley on January 12, 2013.
			</div>
		</div>
	
	</div>
	
</body>
</html>
