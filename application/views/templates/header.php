<div class="navbar navbar-static-top">
	<div class="navbar-inner">
		<div class="container">
			<a type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</a>
			<a class="brand" href="/harbingernews/">The Harbinger Online</a>
			<div class="nav-collapse">
				<ul class="nav">
					<li id="nav_home"><a href="/harbingernews/">Home</a></li>
					<li id="nav_news"><a href="/harbingernews/news/">News</a></li>
					<li id="nav_sports"><a href="/harbingernews/sports/">Sports</a></li>
					<li id="nav_clubs"><a href="/harbingernews/clubs/">Clubs</a></li>
				</ul>
				<ul class="nav pull-right visible-desktop">
					<?php
						$user = $this->ion_auth->user()->row();
						if($this->ion_auth->logged_in())
						{	
							echo "<li class=\"dropdown\">";
							echo "<a class=\"dropdown-toggle\" href=\"#\" data-toggle=\"dropdown\">" . $user->username . "<b class=\"caret\"></b></a>";
							echo "<ul class=\"dropdown-menu\">";
							echo "<li><a href=\"#\">Test.</a></li>";
							echo "<li class=\"divider\"></li>";
							echo "<li class=\"logout\"><a href=\"#\">Log Out</a></li>";
							echo "</ul>";
							echo "</li>";
							if($this->ion_auth->is_admin())
							{
								echo "<li><a href=\"#\">Test</a></li>";
							}
						} else {
							$page = $_SERVER['PHP_SELF'];
							echo "<li class=\"dropdown\">";
							echo "<a class=\"dropdown-toggle\" href=\"#\" data-toggle=\"dropdown\">Log In<b class=\"caret\"></b></a>";
							echo "<div class=\"dropdown-menu\" style=\"padding: 15px; padding-bottom: 0px;\">";
							echo form_open("auth/quicklogin");
							echo '<p>';
							echo '<label for="identity">Email/Username:</label>';
							echo form_input('identity');
							echo '</p>';
							echo '<p>';
							echo '<label for="password">Password:</label>';
							echo form_input('password');
							echo '</p>';
							echo '<p>' . form_submit('submit', 'Login') . '</p>';
							echo form_close();
							echo "</div>";
						}
					?>
				</ul>
			</div>
		</div>
	</div>
</div>
<!-- <?php echo base_url() . 'index.php/auth/quicklogout'; ?> -->
<script type="text/javascript">
	$(function(){
		$('.logout').click(function(e) {
			e.preventDefault();
			$.ajax({
				type: "POST",
				url: '<?php echo base_url() . 'index.php/auth/quicklogout'; ?>',
				data: "",
				dataType: 'json',
				success: function() {
					location.reload();
				}
			})
	    });
	});
</script>