<!DOCTYPE html>
<html>

<head>

	<title>The Harbinger Online</title>
	
	<!-- This is a test -->
	
	<!-- enable webapp on iPhone -->
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<link rel="apple-touch-icon" href="img/Apple-Icon.png" />
	<link rel="apple-touch-icon" sizes="114x114" href="img/Apple-Icon-Retina.png" />
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0 user-scalable=no">
	<meta http-equiv="X-UA-Compatible" content="chrome=1">
	
	<link rel="stylesheet" href="/harbingernews/css/jquery.fancybox.css" type="text/css">
	<link rel="stylesheet" href="/harbingernews/css.css" type="text/css">
	<link rel="stylesheet" href="/harbingernews/css/all.css" type="text/css">
	<link rel="stylesheet" href="/harbingernews/css/bootstrap.css" type="text/css">
	<link rel="stylesheet" href="/harbingernews/css/bootstrap-responsive.css" type="text/css">
	
	<script src="js/jquery-1.8.0.min.js"></script>
	<script src="js/bootstrap.js" type="text/javascript"></script>
	<script src="js/jquery.news_stories.js" type="text/javascript"></script>
	<script src="js/jquery.fancybox.pack.js" type="text/javascript"></script>

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
	
	<?php
	$starttime = explode(' ', microtime());
	$starttime = $starttime[1] + $starttime[0];
	include_once('autoloader.php');
	include_once('idn/idna_convert.class.php');
	$feed = new SimplePie();
	$feed->set_feed_url('http://hf-announcements.blogspot.com/feeds/posts/default');
	$feed->enable_cache(false);
	$success = $feed->init();
	$feed->handle_content_type();
	$feed2 = new SimplePie();
	$feed2->set_feed_url('http://hfannouncements.blogspot.com/feeds/posts/default');
	$feed2->enable_cache(false);
	$success2 = $feed2->init();
	$feed2->handle_content_type();
	?>

</head>

<body>
	
	<div id="content">

		<?php include('tools/header.shtml') ?>
				
		<div id="news">
			
			<div class="row">
				<div class="span10 offset2" id="news_title_row"><h2 id="news_title">Harborfields News</h2></div>
			</div>
				
			<div id="container_box">
			<img id="back_button" src="images/Prev.png" alt="Prev" width="35" height="35" />
			<img id="forward_button" src="images/Next.png" alt="Next" width="35" height="35" />
	
				<div id="outerbox">
					<div id="innerbox">
					
						<a class="fancy fancybox.iframe" href="harbinger/2012/september/manning.html"><div id="manning" class="article">
							
							<h3>Meet Dr. Manning</h3>
							
							<img src="stories/Meet%20Dr.%20Manning/manning.jpg" alt="manning" width="170" height="230" />
							
							<p>Click here to learn more and read our interview with HF's new principal!</p>
							
						</div></a> <!-- end "manning" --> 
						
						<div class="article">
						
							<div class="empty_article">
							
								<a href="pages/getinvolved.html"><h2>Your article could appear here!</h2></a>
							
							</div>
							
						</div>
						
						<div class="article">
						
							<div class="empty_article">
							
								<a href="pages/getinvolved.html"><h2>Your article could appear here!</h2></a>
							
							</div>
						
						</div>
						
						<div class="article">
						
							<div class="empty_article">
							
								<a href="pages/getinvolved.html"><h2>Your article could appear here!</h2></a>
							
							</div>
						
						</div>
						
						<div class="article">
						
							<div class="empty_article">
							
								<a href="pages/getinvolved.html"><h2>Your article could appear here!</h2></a>
							
							</div>
						
						</div>
						
						<div class="article">
						
							<div class="empty_article">
							
								<a href="pages/getinvolved.html"><h2>Your article could appear here!</h2></a>
							
							</div>
						
						</div>
						
	
					</div> <!-- end "innerbox" -->
				</div> <!-- end "outerbox" -->
			</div> <!-- end "container_box" -->
		</div> <!-- end "news" -->
		
		<div class="container" id="important_stuff">
			<div class="row">
				<div class="span8">
					<div id="announcements">
						<a href="http://hf-announcements.blogspot.com/"><h2>Today's Announcements</h2></a>
						<?php
							if ($feed->error())
							{
								echo '<div class="sp_errors">' . "\r\n";
									echo '<p>' . htmlspecialchars($feed->error()) . "</p>\r\n";
								echo '</div>' . "\r\n";
							}
						?>
						<div id="sp_results">
							<?php if ($success): ?>
								<?php foreach($feed->get_items(0, 1) as $item): ?>
									<div class="chunk">			
										<h4><?php if ($item->get_permalink()) echo '<a href="' . $item->get_permalink() . '">'; echo $item->get_title(); if ($item->get_permalink()) echo '</a>'; ?>&nbsp;<span class="footnote"></span></h4>
										<?php echo $item->get_content(); ?>
									</div><!-- end "chunk" -->
								<?php endforeach; ?>
							<?php endif; ?>
						</div><!-- end "sp_results"-->
					</div><!-- end "announcements"-->
				</div><!-- end "span6" -->
				
				<div class="span4">
					<div id="important">
						<h2 style="margin-bottom: 0px;">Important Reminders</h2>
						<?php
							if ($feed->error())
							{
								echo '<div class="sp_errors">' . "\r\n";
									echo '<p>' . htmlspecialchars($feed->error()) . "</p>\r\n";
								echo '</div>' . "\r\n";
							}
						?>
						<div id="sp_results">
							<?php if ($success2): ?>
								<?php foreach($feed2->get_items(0, 1) as $item): ?>
									<div class="chunk">			
										<?php echo $item->get_content(); ?>
									</div><!-- end "chunk" -->
								<?php endforeach; ?>
							<?php endif; ?>
						</div><!-- end "sp_results"-->
			
					</div><!-- end "important"-->
					<div id="upcoming">
					
					</div>
				</div><!-- end "span6" -->
			</div><!-- end "row" -->
		</div><!-- end "container" -->
		
		<div id="footer_spacer"></div>
		
	</div><!-- end "content"-->
	
	<div id="footer">
	
		<?php include('tools/footer.shtml') ?>
		
		<div class="container">
			<div class="pull-right" style="margin-top: 20px;">
					This page was last updated by Alex LaFroscia on September 5, 2012.
			</div>
		</div>
		
	</div> <!-- end "footer" -->

</body>

</html>