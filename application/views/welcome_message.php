<!DOCTYPE html>
<html>
<head>

	<title>The Harbinger Online</title>
	
	<!-- This is a test -->
	
	<!-- enable webapp on iPhone -->
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<link rel="apple-touch-icon" href="<?php echo base_url(); ?>assets/img/Apple-Icon.png" />
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo base_url(); ?>assets/img/Apple-Icon-Retina.png" />
	<link rel="icon" type="image/png" href="<?php echo base_url(); ?>assets/img/favicon.ico">
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0 user-scalable=no">
	<meta http-equiv="X-UA-Compatible" content="chrome=1">
	
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.css" type="text/css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap-responsive.css" type="text/css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/jquery.fancybox.css" type="text/css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/homepage.css" type="text/css">
	
	<script src="<?php echo base_url(); ?>assets/js/jquery-1.8.0.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/bootstrap.js" type="text/javascript"></script>
	<script src="<?php echo base_url(); ?>assest/js/jquery.news_stories.js" type="text/javascript"></script>
	<script src="<?php echo base_url(); ?>assets/js/jquery.fancybox.pack.js" type="text/javascript"></script>

	<script src="http://ajax.googleapis.com/ajax/libs/chrome-frame/1/CFInstall.min.js"></script>

	<script type="text/javascript">
		
		// Fancybox
		$(function() {
			$('.fancy').fancybox({
				'hideOnContentClick' : false,
				'openEffect' : 'fade',
			});
			// Set the Home tab to 'active'
			$('#nav_home').addClass('active');
		});
	</script>
	
	<!-- Google Analytics -->
	<script type="text/javascript">
		var _gaq = _gaq || [];
		_gaq.push(['_setAccount', 'UA-35687930-1']);
		_gaq.push(['_trackPageview']);
		(function() {
	    	var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	    	ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	    	var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	    })();
	</script>

</head>

<body>
	
	<div id="content">

		<?php include('templates/header.php') ?>
			
		<div class="container" id="all">
			<div class="container-fluid" id="stuff">
				<div class="row-fluid"><!-- header -->
					<div class="span12" id="header">
						<h1>Harborfields High School</h1>
					</div>
				</div><!-- end header -->
				<div class="row-fluid" id="announcements">
					<h3>Today's Announcements</h3>
					<div id="basic_info">
						<span class="pull-left"><?php echo $date; ?></span>
						<span class="pull-right">Today is an <?php echo $a_or_b; ?> Day</span>
					</div>
					<div id="bullets">
						<ul class="clearfix">
							<?php echo $announcements; ?>
						</ul>
					</div>
				</div>
				<div class="row-fluid" id="postits">
					<a href="http://www.yearbookforever.com/ssDeepLink.aspx?sid=1-23J-32132&dest=BAYB"><div class="span4" id="yearbook">
						<img src="<?php echo base_url(); ?>assets/img/ssDeepLink.png" alt="Buy a Yearbook" />
					</div></a>
					<div class="span4" id="snowflake">
						<h4>Support LB Storm Clean-Up</h4>
						<p>Buy a Secret Snowflake from Leadership</p>
					</div>
					<div class="span4" id="playfest">
						<h4>Join playfest!</h4>
						<p>Contact your grade's government for more information about how you can get involved</p>
					</div>
				</div>
				<div class="row-fluid" id="events">
					<div class="span6" id="upcoming">
						<h3><?php echo $upcomingName; ?></h3>
						<?php echo $upcomingContent; ?>
					</div>
					<div class="span6" id="recent">
						<h3><?php echo $recentName; ?></h3>
						<?php echo $recentContent; ?>
					</div>
				</div>
			</div>
			<div class="well" id="sidebar">
				<a href="http://www.yearbookforever.com/ssDeepLink.aspx?sid=1-23J-32132&dest=BAYB"><div id="yearbook">
					<img src="<?php echo base_url(); ?>assets/img/ssDeepLink.png" alt="Buy a Yearbook" />
				</div></a>
				<div id="snowflake">
					<h4>Support LB Storm Clean-Up</h4>
					<p>Buy a Secret Snowflake from Leadership</p>
				</div>
				<div id="playfest">
					<h4>Join playfest!</h4>
					<p>Contact your grade's government for more information about how you can get involved</p>
				</div>
			</div>
		</div>		
		<div id="footer_spacer"></div>
		
	</div><!-- end "content"-->
	
	<div id="footer">
	
		<?php include('templates/footer.php') ?>
		
		<div class="container">
			<div class="pull-right" style="margin-top: 20px;">
				<?php echo "This page was last updated on " . date ("F d Y.", getlastmod()); ?>
			</div>
		</div>
		
	</div> <!-- end "footer" -->

</body>
<?php mysql_close($con); ?>
</html>