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
		
	<style type="text/css">
		#concert {
			background-color: white;
			box-shadow: 0px 2px 2px 0px;
			padding-left: 10px;
			padding-right: 10px;
			padding-bottom: 10px;
			margin-bottom: 15px;
			width: 70%;
		}
		
		#concert h4 {
			text-align: center;
			padding-top: 10px;
			margin-bottom: 0px;
		}
		
		#concert img {
			display: block;
			margin: 0 auto;
		}
		
		#concert p {
			margin-top: 10px;
		}
	</style>
	
	
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
			<div class="row">
				<div class = "about">
					<h4 class = "offset1">About Global Justice</h4>
					<p>Advisor: Ms. DaSilva-Burke </p> 
					<p>Room: 406 (?)</p>
					<p>The Harborfields High School Students for Global Justice Club is an organization that was founded to help educate the Harborfields community about social issues affecting people across the globe. The goal is to attract students to participate on a local level and demonstrate how their actions can have far reaching effects. This club meets bi-monthly and works on various group projects throughout the year. Students involved in this club should have a desire to help others and an interest in global issues.</p>
					<br/>
					<p>This club meets on alternating Thursdays. See advisors for details.</p>

				</div>
			
			</div><!-- end "row" -->
			
			<br />
			
			<div class="row">
				<div id="concert">
					<h4>The Annual Global Justice Charity Concert</h4>
					<a href="557.jpg"><img src="557.jpg" /></a>
					<hr />
					<h4>Global Justice: Rockin' for Charity<small> by Jake Deluca</small></h4>
					<p>Whether you’re a regular attendee, a musical participant or a member of the club itself, chances are you’ve heard of the Global Justice Concert. The club has been doing the concert for about five years now, ever since it first came about as an “extension of World History AP.”</p>
<p>Mrs. DaSilva, who has been teaching World History AP (better known in its colloquial form: WHAP) for years, sat down with me to talk about both the club and the concert. The club was initiated by an old student of hers who felt that there should have been a group that practiced the principals discussed in WHAP. It was first created with the hopes of bringing the larger-scale worldwide problems, i.e. the privation of food, water and/or shelter, warfare, and human rights violation, to light on a more local level. The club has achieved many of its goals since its start; Global Justice has raised money for the construction of a school in Ecuador, as well as charitable funds for groups who have similar goals, and has also encouraged the students of Harborfields to educate themselves on significant global events like the recent story of Malala Yousafzai.</p>
<p>As for the concert, the idea originated from the compiled efforts of Mrs. DaSilva and Mr. Leary, who used Mrs. DaSilva’s classroom as a means of recording an album of student-made music for the financial benefit of charity. The concert was a by-product of that album, a sort of “release performance,” and every year since the club has encouraged students to audition to perform in the event.</p>
<p>Mrs. DaSilva, who is both musically talented and passionate about influencing the world for the better, explained that music was always her “comfort zone,” and thought that it was a great way to raise money for groups like The Magic Penny.</p>
<p>This year, the Annual Global Justice Concert will be on March 1st at 7 pm at the high school, will feature 2 acts and 12 performances respectively, and will also feature a flee market held in the lobby of student made sales.  Come down to the high school on the first and share in an enriching and beneficial event!</p>

				</div>
			</div>
			
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
