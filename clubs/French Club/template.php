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
					<h4 class = "offset1">About the French Club</h4>
					<p>Advisor: Ms. D'Amore</p> 
					<p>Room: 213</p>
					<p>Le Cercle Francais is an active club which explores many aspects of the French culture. Club members enjoy French food tasting, listening to French music, watching French movies, and celebrating French holidays such as Mardi Gras! They organize trips to museums, restaurants, concerts, and hockey games. The club holds bake sales and earns money to donate to humanitarian organizations working in Africa and other Francophone countries. Members also enjoy teaching basic French to the younger students at the elementary and primary schools as well visiting Middle School students to share their enthusiasm for the French language and culture. Our end of the year soiree includes a variety of delicious French dishes and desserts! The French Club meets once every two weeks and is open to anyone who is interested in French culture! New members and new ideas are always welcome!</p>
					<br/>
					<p>This club meets on alternating Tuesdays at 2:30pm.</p>

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
