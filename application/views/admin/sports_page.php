<html>
<head>

	<title>Admin Console | <?php echo $sports_item['title']; ?></title>
	
	<!-- enable webapp on iPhone -->
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<link rel="apple-touch-icon" href="<?php echo base_url(); ?>assets/img/Apple-Icon.png" />
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo base_url(); ?>assets/img/Apple-Icon-Retina.png" />
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
	<meta http-equiv="X-UA-Compatible" content="chrome=1">
	
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/jquery.fancybox.css" type="text/css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/admin_home.css" type="text/css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.css" type="text/css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap-responsive.css" type="text/css">
	
	<script src="<?php echo base_url(); ?>assets/js/jquery-1.8.0.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/bootstrap.js" type="text/javascript"></script>
	
	<script type="text/javascript">
		$(function() {
			$('#nav_admin').addClass('active');
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
	<?php $this->load->view('templates/header'); ?>
	
	<div id="content">
		<div class="container">
			<h1><?php echo $sports_item['title']; ?></h1>
		</div>