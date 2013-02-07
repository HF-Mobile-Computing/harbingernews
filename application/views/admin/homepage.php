<html>
<head>

	<title>Homepage | Admin Console</title>
	
	<!-- enable webapp on iPhone -->
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<link rel="apple-touch-icon" href="<?php echo base_url(); ?>assets/img/Apple-Icon.png" />
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo base_url(); ?>assets/img/Apple-Icon-Retina.png" />
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
	<meta http-equiv="X-UA-Compatible" content="chrome=1">
	
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/jquery.fancybox.css" type="text/css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/admin_homepage.css" type="text/css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.css" type="text/css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap-responsive.css" type="text/css">
	
	<script src="<?php echo base_url(); ?>assets/js/jquery-1.8.0.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/bootstrap.js" type="text/javascript"></script>
	
	<!-- markitup -->
	<script src="<?php echo base_url(); ?>assets/markitup/jquery.markitup.js" type="text/javascript"></script>
	<script src="<?php echo base_url(); ?>assets/markitup/sets/default/set.js" type="text/javascript"></script>
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/markitup/skins/markitup/style.css" type="text/css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/markitup/sets/default/style.css" type="text/css">
	<script type="text/javascript">
		$(function(){
			$('textarea').markItUp(mySettings);
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
		
		<div class="container" id="everything">
			<div id="announcements">
				<div class="row-fluid">
					<div class="span9">
						<h1>Announcements <small>Add a new post to the announcements feed</small></h1>
						<?php echo form_open('admin/homepage'); ?>
							<fieldset>
								<input name="date" type="text" placeholder="Enter Today's Date">
								<select name="a_or_b">
									<option value="empty" selected="selected">Select A or B Day</option>
									<option value="A">A</option>
									<option value="B">B</option>
								</select>
								<button type="submit" name="submit" value="Submit" class="btn pull-right">Submit</button>
								<br />
								<textarea name="announcements"></textarea>
							</fieldset>
						<?php echo form_close(); ?>
					</div>
				</div>
			</div><!-- end "announcements" -->
		</div><!-- end "everything" -->