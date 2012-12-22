<?php 
session_start();
?>
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
							echo "<a class=\"dropdown-toggle\" href=\"#\" data-toggle=\"dropdown\">";
							echo $_SESSION['username'];
							echo "<b class=\"caret\"></b>";
							echo "</a>";
							echo "<ul class=\"dropdown-menu\">";
							echo "<li><a href=\"#\">Test.</a></li>";
							echo "</ul>";
							echo "</li>";
						} else {
							echo "test";
						}
					?>
				</ul>
				<div class="pull-right visible-desktop">
					
				</div>
			</div>
		</div>
	</div>
</div>
