<!DOCTYPE html>
<html>

<head>

	<title>The Harbinger Online</title>
	
	<!-- enable webapp on iPhone -->
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<link rel="apple-touch-icon" href="img/Apple-Icon.png" />
	<link rel="apple-touch-icon" sizes="114x114" href="img/Apple-Icon-Retina.png" />
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0 user-scalable=no">
	<meta http-equiv="X-UA-Compatible" content="chrome=1">


	<link rel="stylesheet" href="css/bootstrap.css" type="text/css">
	<link rel="stylesheet" href="css/bootstrap-responsive.css" type="text/css">
	<link rel="stylesheet" href="css/header.css" type="text/css" media="screen">
	<link rel="stylesheet" href="css/footer.css" type="text/css" media="screen">
	<link rel="stylesheet" href="css/all.css" type="text/css" media="screen">
	<link rel="stylesheet" href="css/jquery.fancybox.css" type="text/css">
	<link rel="stylesheet" href="css.css" type="text/css">
	<link rel="stylesheet" href="css/all.css" type="text/css">
	<link rel="stylesheet" href="css/footer.css" type="text/css">
	
	<script src="js/jquery-1.8.0.min.js"></script>
	<script src="js/bootstrap.js" type="text/javascript"></script>
	<script src="js/jquery.news_stories.js" type="text/javascript"></script>
	<script src="js/jquery.fancybox.pack.js" type="text/javascript"></script>

	<script src="http://ajax.googleapis.com/ajax/libs/chrome-frame/1/CFInstall.min.js"></script>

	<script type="text/javascript">
	
		// Disable jquery mobile loading message
		$.mobile.loadingMessage = false;
	
		// Fancybox
		$(function() {
			$('.fancy').fancybox({
				'hideOnContentClick' : false,
				'openEffect' : 'fade',
			});
		});
	</script>
	
	<?php
	$starttime = explode(' ', microtime());
	$starttime = $starttime[1] + $starttime[0];
	include_once('autoloader.php');
	include_once('idn/idna_convert.class.php');
	$feed = new SimplePie();
	$feed->set_feed_url('http://hfannouncements.blogspot.com/feeds/posts/default');
	$feed->enable_cache(false);
	$success = $feed->init();
	$feed->handle_content_type();
	?>

</head>

<body>
	
	<div id="content">
		
		<!--#include virtual="/~alex/Harbinger2/header.shtml"-->
				
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
				<div class="span6">
					<div id="announcements">
						<a href="http://hfannouncements.blogspot.com/"><h2>Today's Announcements</h2></a>
						
						<?php
							// Check to see if there are more than zero errors (i.e. if there are any errors at all)
							if ($feed->error())
							{
								// If so, start a <div> element with a classname so we can style it.
								echo '<div class="sp_errors">' . "\r\n";
				
									// ... and display it.
									echo '<p>' . htmlspecialchars($feed->error()) . "</p>\r\n";
				
								// Close the <div> element we opened.
								echo '</div>' . "\r\n";
							}
						?>
			
						<div id="sp_results">
			
							<!-- As long as the feed has data to work with... -->
							<?php if ($success): ?>
								<!-- Let's begin looping through each individual news item in the feed. -->
								<?php foreach($feed->get_items(0, 1) as $item): ?>
									<div class="chunk">			
										<!-- Display the item's primary content. -->
										<h4><?php if ($item->get_permalink()) echo '<a href="' . $item->get_permalink() . '">'; echo $item->get_title(); if ($item->get_permalink()) echo '</a>'; ?>&nbsp;<span class="footnote"></span></h4>
										<?php echo $item->get_content(); ?>
									</div><!-- end "chunk" -->
				
								<!-- Stop looping through each item once we've gone through all of them. -->
								<?php endforeach; ?>
				
							<!-- From here on, we're no longer using data from the feed. -->
							<?php endif; ?>
						</div><!-- end "sp_results"-->
					</div><!-- end "announcements"-->
				</div><!-- end "span6" -->
				
				<div class="span6">
					<div id="important">
						<h2>Important Reminders</h2>
						
						<ul>
							<li>This is a <a href="#">very important</a> reminder.</li>
							<li>There are very important things going on right now.</li>
							<li>It's too bad that it's summer right now, and in reality, there are no things going on.</li>
						</ul>
			
					</div><!-- end "important"-->
				</div><!-- end "span6" -->
		
				
			</div><!-- end "row" -->
			
		</div><!-- end "container" -->
		
		<div id="footer_spacer"></div>
		
	</div><!-- end "content"-->
	
	<a href="#">This is a test.</a>
	
	<div id="footer">
	
		<!--#include file="footer.shtml" -->
		
		<div class="container" id="edited_by">
			<div class="span6 offset6">
				<span id="edited_by">Last edited by Alex LaFroscia on August 22, 2012.</span>
			</div><!-- end "span6" -->
		</div><!-- end "edited_by" -->
	</div> <!-- end "footer" -->

</body>

</html>