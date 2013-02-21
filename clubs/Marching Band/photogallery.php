<!DOCTYPE html>
<html>
<head>
	<title>Photo Gallery</title>
	
	<meta charset="utf-8">

	<link rel="stylesheet" href="/harbingernews/css/bootstrap.css" type="text/css">
	<link rel="stylesheet" href="/harbingernews/css/bootstrap-responsive.css" type="text/css">
	<link rel="stylesheet" href="/harbingernews/css/all.css" type="text/css">
	<link rel="stylesheet" href="/harbingernews/css/clubs.css" type="text/css">

	<script type="text/javascript" src="/harbingernews/js/jquery-1.8.0.min.js"></script>
	<script type="text/javascript" src="/harbingernews/js/bootstrap.min.js"></script>
	

	<style type="text/css">
		h2 {
			text-align: center;
		}

		.picture div {
			height: 100%;
			margin: 5px 5px 5px 5px;
		}
		p {
			text-align: center;
		}
		.holder {
			border-style: groove;
			border-width: 3px;
		}
		

	</style>
	
</head>
<body>
	<div id = "content" style ="">
		<?php include('../../tools/header.shtml') ?>
		<?php include('../header2.shtml') ?>
		
		<div id="info" class="container">
			<div class="row-fluid">
				<div class = "span12">
					<h2>Photo Gallery</h2>
					<div class = "span11" style = "margin-bottom: 10px;">
						<div class = "picture span2 offset1 holder">
							<a href="big/Marching Band.jpg" title="#"><img src="small/Marching Band.png" /></a>
							
						</div>

						<div class = "picture span2 holder">
							<a href="big/drums-big.jpg"  title="#"><img src="small/drums-small.jpg" /></a>
							
						</div>
						<div class = "picture span2 holder">
							<a href="big/flag-big.jpg" title="NYS Champion Basketball parade March 2012."><img src="small/flag-small.jpg" /></a>
							
						</div>
						<div class = "picture span2 holder">
							<a href="big/group-big.jpg" title="Our Marchimg Band Seniors."><img src="small/group-small.jpg" /></a>
							
						</div>
						<div class = "picture span2 holder">
							<a href="big/hf-big.jpg" title="'HF' at Band Camp."><img src="small/hf-small.jpg" /></a>
							
						</div>
					</div>
					<div class = "span11" style = "margin-bottom: 10px;">
						<div class = "picture span2 offset3 holder">
							<a href="big/Marching Band Seniors.jpg" title="#"><img src="small/Marching Band Seniors.png" /></a>
						</div>

						<div class = "picture span2 offset2 holder">
							<a href="big/DMA-big.jpg" title="Our 3 drum majors at the George N. Parks Drum Major Academy in Pennsylvania."><img src="small/DMA-small.jpg" /></a>
							
						</div>
					</div>
					</div>
				</div>
			</div>
		</div>
	
	<div id="footer_spacer"></div>
	</div><!-- end "content" -->
	
	<div id="footer">
		<?php include('../../tools/footer.shtml') ?>
		
		<div class="container">
			<div class="pull-right">
					This page was last updated by Brian Kelley on January 15, 2013.
			</div>
		</div>
	
	</div>
	
</body>
</html>
