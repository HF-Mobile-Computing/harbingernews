<html>
<head>

	<title>Create a New User | Harbinger News</title>
	
	<!-- enable webapp on iPhone -->
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<link rel="apple-touch-icon" href="<?php echo base_url(); ?>assets/img/Apple-Icon.png" />
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo base_url(); ?>assets/img/Apple-Icon-Retina.png" />
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
	<meta http-equiv="X-UA-Compatible" content="chrome=1">
	
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/jquery.fancybox.css" type="text/css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/new_user.css" type="text/css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.css" type="text/css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap-responsive.css" type="text/css">
	
	<script src="<?php echo base_url(); ?>assets/js/jquery-1.8.0.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/bootstrap.js" type="text/javascript"></script>
	
	<script type="text/javascript">
		$(function() {
			// $('#nav_admin').addClass('active');
			$('#form input:submit').addClass('btn').addClass('button').addClass('pull-right');
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
			<div class="row-fluid">
				<div id="form" class="span12">
					<h1>Add a new User</h1>
					<?php echo form_open('users/new_user'); ?>
					<!-- <?php echo form_fieldset('Test'); ?> -->
					<table cellspacing="5">
						<tbody>
							<tr>
								<td class="left">Username:</td>
								<td><?php echo form_input('username'); ?></td>
							</tr>
							<tr>
								<td class="left">Email Address:</td>
								<td><?php echo form_input('email'); ?></td>
							</tr>
							<tr>
								<td class="left">Password:</td>
								<td><?php echo form_password('password1'); ?></td>
							</tr>
							<tr>
								<td class="left">Retype Password:</td>
								<td><?php echo form_password('password2'); ?></td>
							</tr>
							<tr>
								<td></td>
								<td><?php echo form_submit('submit', 'Submit info!'); ?></td>
							</tr>
						</tbody>
					</table>
					<!-- <?php echo form_fieldset_close(); ?> -->
					<?php echo form_close(); ?>
					
				</div>
			</div>
		</div>