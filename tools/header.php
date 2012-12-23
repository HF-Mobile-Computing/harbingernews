<?php 
session_start();
?>
<script type="text/javascript">
	function logOut() {
    	$.get("/harbingenews/logout.php");
    	return false;
    }
</script>
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
					<li id="nav_sports"><a href="/harbingernews/sports/index.html">Sports</a></li>
					<li id="nav_clubs"><a href="/harbingernews/clubs/index.html">Clubs</a></li>
				</ul>
				<ul class="nav pull-right visible-desktop">
					<?php 
						if(isLoggedIn())
						{	
							echo "<li class=\"dropdown\">";
							echo "<a class=\"dropdown-toggle\" href=\"#\" data-toggle=\"dropdown\">" . $_SESSION['username'] . "<b class=\"caret\"></b></a>";
							echo "<ul class=\"dropdown-menu\">";
							echo "<li><a href=\"#\">Test.</a></li>";
							echo "<li class=\"divider\"></li>";
							echo "<li><a href=\"#\" onclick=\"logOut();\">Log Out</a></li>";
							echo "</ul>";
							echo "</li>";
						} else {
							$page = $_SERVER['PHP_SELF'];
							echo "<li class=\"dropdown\">";
							echo "<a class=\"dropdown-toggle\" href=\"#\" data-toggle=\"dropdown\">Log In<b class=\"caret\"></b></a>";
							echo "<div class=\"dropdown-menu\" style=\"padding: 15px; padding-bottom: 0px;\">";
							echo "<form name=\"login\" action=\"/harbingernews/login_submit.php\" method=\"post\">";
							echo "Username: <input type=\"text\" name=\"username\" /><br />";
							echo "Password: <input type=\"password\" name=\"password\" /><br />";
							echo "<input class=\"btn btn-primary\" style=\"clear: left; width: 100%; height: 32px; font-size: 13px;\" type=\"submit\" value=\"login\" />";
							echo "</form";
							echo "</div>";
						}
					?>
				</ul>
				<div class="pull-right visible-desktop">
					
				</div>
			</div>
		</div>
	</div>
</div>
