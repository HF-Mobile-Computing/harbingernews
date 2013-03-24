<!DOCTYPE html>
<html>

<head>

	<title>HF Sports</title>
	
	<!-- enable webapp on iPhone -->
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<link rel="apple-touch-icon" href="<?php echo base_url(); ?>assets/img/Apple-Icon.png" />
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo base_url(); ?>assets/img/Apple-Icon-Retina.png" />
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
	<meta http-equiv="X-UA-Compatible" content="chrome=1">
	
	<script src="http://ajax.googleapis.com/ajax/libs/chrome-frame/1/CFInstall.min.js"></script>
	
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/jquery.fancybox.css" type="text/css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/sports.css" type="text/css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.css" type="text/css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap-responsive.css" type="text/css">
	
	<script src="<?php echo base_url(); ?>assets/js/jquery-1.8.0.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/bootstrap.js" type="text/javascript"></script>
	<script src="<?php echo base_url(); ?>assets/js/jquery.fancybox.pack.js" type="text/javascript"></script>
	<script src="<?php echo base_url(); ?>assets/js/jquery-ui-1.9.1.custom.min.js" type="text/javascript"></script>
		
	<script type="text/javascript">
	
		// Fancybox
		$(function() {
			$('.fancy').fancybox({
				'hideOnContentClick' : false,
				'openEffect' : 'fade',
			});
			$('#nav_sports').addClass('active');
			$('.disabled a').removeAttr('href');
		});
		
		$(function(){
			$time = 150;
			$(".sport").hover( function() {
				$(this).find(".inner").addClass("tint", $time);
				$(this).find(".holder").fadeIn($time);
				$(this).find("h2").addClass("faded_text", $time);
			}, function() {
				$(this).find('.inner').removeClass("tint", $time);
				$(this).find('.holder').fadeOut($time);
				$(this).find('h2').removeClass("faded_text", $time);
			});
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
	
