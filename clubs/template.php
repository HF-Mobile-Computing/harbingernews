<html>
<head>
	<title>Club Template</title>
	
	<meta charset="utf-8">
	
	<link rel="stylesheet" href="/css/bootstrap.css" type="text/css">
	<link rel="stylesheet" href="/css/bootstrap-responsive.css" type="text/css">
	<link rel="stylesheet" href="/css/all.css" type="text/css">
	
	<script type="text/javascript" src="../js/bootstrap.min.js"></script>
	
	<style type="text/css">
	
		#page_title {
			display: block;
			background: white;
			height: 80px;
			margin-top: 10px;
		}
		
		#page_title h1 {
			padding-left: 10px;
		}
		
		
		#basic_info {
			background: red;
			margin-bottom: 10px;
			margin-top: 10px;
		}
				
		#photos {
			background: green;
		}
		
		#upcoming_events {
			margin-bottom: 10px;
			margin-top: 10px;
			background: blue;
		}
		
		#upcoming_events h4 {
			text-align: center;
		}
		
		#photo_holder {
			background: grey;
		}
	
	</style>
	
</head>
<body>

	<?php include($_SERVER['DOCUMENT_ROOT'].'/header.php') ?>
	
	<div id="content" class="container">
	
		<div id="page_title">
			<h1>Template</h1>
		</div>
		
		<div id="info" class="container">
			<div class="row">
				<div class="span8" id="basic_info">
				things
				
				</div><!-- end "span8" & "basic_info" -->
				<div class="span4" id="upcoming_events">
					<h4>Upcoming Events</h4>
					<ul>
						<li>Event One</li>
						<li>Event Two</li>
						<li>Event Three</li>
						<li>Event Four</li>
					</ul>
					
				
				</div><!-- end "span4" & "upcoming_events" -->
		
		
			</div> <!-- end "row" -->
			<div class="row">
			
			</div><!-- end "row" -->
			<div class="row">
				<div class="span4" id="photo_holder">
					test
				</div>
				<div class="span4" id="photo_holder">
					test
				</div>
				
				<div class="span4" id="photo_holder">
					test
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
