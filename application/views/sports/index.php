<!--
<?php foreach ($sports as $sports_item): ?>

  	<h2><?php echo $sports_item['title'] ?></h2>
  	<div id="main">
  		<?php echo $sports_item['content'] ?>
	</div>
	<p><a href="news/<?php echo $sports_item['slug'] ?>">View article</a></p>

<?php endforeach ?>
-->
		<div class="container" id="center">
		
			<ul class="nav nav-tabs affix-top container" data-spy="affix" data-offset-top="60" id="seasonsswitcher">
				<li id="firsttab"><a></a></li>
				<li><a href="#fall" data-toggle="tab">Fall</a></li>
				<li class="active"><a href="#winter" data-toggle="tab">Winter</a></li>
				<li><a href="#spring" data-toggle="tab">Spring</a></li>
			</ul>
			<div class="row">
				<div class="span8">
					<div class="tab-content">
						<div class="tab-pane" id="fall">
							<div class="sport" id="cheerleading">
								<div class="inner">
									<h2>Cheerleading</h2>
									<div class="holder">
										<div class="pull-left">
											<h3 class="disabled"><a href="#">Varsity</a></h3>
										</div>
										<div class="pull-right">
											<h3 class="disabled"><a href="#">Junior Varisty</a></h3>
										</div>
									</div>
								</div>
							</div>
							<div class="sport" id="crosscountry">
								<div class="inner">
									<h2>Cross Country</h2>
									<div class="holder">
										<div class="pull-left">
											<h3 class="disabled"><a href="#">Varsity</a></h3>
										</div>
										<div class="pull-right">
											<h3 class="disabled"><a href="#">Junior Varisty</a></h3>
										</div>
									</div>
								</div>
							</div>
							<div class="sport" id="fieldhockey">
								<div class="inner">
									<h2>Field Hockey</h2>
									<div class="holder">
										<div class="pull-left">
											<h3 class="disabled"><a href="#">Varsity</a></h3>
										</div>
										<div class="pull-right">
											<h3 class="disabled"><a href="#">Junior Varisty</a></h3>
										</div>
									</div>
								</div>
							</div>
							<div class="sport" id="football">
								<div class="inner">
								<h2>Football</h2>
									<div class="holder">
										<div class="pull-left">
											<h3 class="disabled"><a href="#">Varsity</a></h3>
										</div>
										<div class="pull-right">
											<h3 class="disabled"><a href="#">Junior Varisty</a></h3>
										</div>
									</div>
								</div>
							</div>
							<div class="sport" id="gymnastics">
								<div class="inner">
									<h2>Gymnastics</h2>
									<div class="holder">
										<div class="pull-left">
											<h3 class="disabled"><a href="#">Varsity</a></h3>
										</div>
										<div class="pull-right">
											<h3 class="disabled"><a href="#">Junior Varisty</a></h3>
										</div>
									</div>
								</div>
							</div>
							<div class="sport" id="bsoccer">
								<div class="inner">
									<h2>Soccer (Boys)</h2>
									<div class="holder">
										<div class="pull-left">
											<h3 class="disabled"><a href="#">Varsity</a></h3>
										</div>
										<div class="pull-right">
											<h3 class="disabled"><a href="#">Junior Varisty</a></h3>
										</div>
									</div>
								</div>
							</div>
							<div class="sport" id="gsoccer">
								<div class="inner">
									<h2>Soccer (Girls)</h2>
									<div class="holder">
										<div class="pull-left">
											<h3 class="disabled"><a href="#">Varsity</a></h3>
										</div>
										<div class="pull-right">
											<h3 class="disabled"><a href="#">Junior Varisty</a></h3>
										</div>
									</div>
								</div>
							</div>
							<div class="sport" id="gswimming">
								<div class="inner">
									<h2>Swimming (Girls)</h2>
									<div class="holder">
										<div class="pull-left">
											<h3 class="disabled"><a href="#">Varsity</a></h3>
										</div>
										<div class="pull-right">
											<h3 class="disabled"><a href="#">Junior Varisty</a></h3>
										</div>
									</div>
								</div>
							</div>
							<div class="sport" id="gtennis">
								<div class="inner">
									<h2>Tennis (Girls)</h2>
									<div class="holder">
										<div class="pull-left">
											<h3 class="disabled"><a href="#">Varsity</a></h3>
										</div>
										<div class="pull-right">
											<h3 class="disabled"><a href="#">Junior Varisty</a></h3>
										</div>
									</div>
								</div>
							</div>
							<div class="sport" id="volleyball">
								<div class="inner">
									<h2>Volleyball</h2>
									<div class="holder">
										<div class="pull-left">
											<h3 class="disabled"><a href="#">Varsity</a></h3>
										</div>
										<div class="pull-right">
											<h3 class="disabled"><a href="#">Junior Varisty</a></h3>
										</div>
									</div>
								</div>
							</div>
							
						</div><!-- end "fall" -->
						
						<!-- WINTER -->
						<div class="tab-pane active" id="winter">
							<div class="sport" id="bbasketball">
								<div class="inner">
									<h2>Basketball (Boys)</h2>
									<div class="holder">
										<div class="pull-left">
											<h3 class="disabled"><a href="#">Varsity</a></h3>
										</div>
										<div class="pull-right">
											<h3 class="disabled"><a href="#">Junior Varisty</a></h3>
										</div>
									</div>
								</div>
							</div>
							<div class="sport" id="gbasketball">
								<div class="inner">
									<h2>Basketball (Girls)</h2>
									<div class="holder">
										<div class="pull-left">
											<h3 class="disabled"><a href="#">Varsity</a></h3>
										</div>
										<div class="pull-right">
											<h3 class="disabled"><a href="#">Junior Varisty</a></h3>
										</div>
									</div>
								</div>
							</div>
							<div class="sport" id="bowling">
								<div class="inner">
									<h2>Bowling</h2>
									<div class="holder">
										<div class="pull-left">
											<h3 class="disabled"><a href="#">Varsity</a></h3>
										</div>
										<div class="pull-right">
											<h3 class="disabled"><a href="#">Junior Varisty</a></h3>
										</div>
									</div>
								</div>
							</div>			
							<div class="sport" id="bswimming">
								<div class="inner">
									<h2>Swimming (Boys)</h2>
									<div class="holder">
										<div class="pull-left">
											<h3 class="disabled"><a href="#">Varsity</a></h3>
										</div>
										<div class="pull-right">
											<h3 class="disabled"><a href="#">Junior Varisty</a></h3>
										</div>
									</div>
								</div>
							</div>
							<div class="sport" id="volleyball">
								<div class="inner">
									<h2>Volleyball</h2>
									<div class="holder">
										<div class="pull-left">
											<h3 class="disabled"><a href="#">Varsity</a></h3>
										</div>
										<div class="pull-right">
											<h3 class="disabled"><a href="#">Junior Varisty</a></h3>
										</div>
									</div>
								</div>
							</div>		
							<div class="sport" id="wrestling">
								<div class="inner">
									<h2>Wrestling</h2>
									<div class="holder">
										<div class="pull-left">
											<h3 class="disabled"><a href="#">Varsity</a></h3>
										</div>
										<div class="pull-right">
											<h3 class="disabled"><a href="#">Junior Varisty</a></h3>
										</div>
									</div>
								</div>
							</div>			
							
						</div><!-- end "winter" -->
					
						<div class="tab-pane" id="spring">
							<div class="sport" id="baseball">
								<div class="inner">
									<h2>Baseball</h2>
									<div class="holder">
										<div class="pull-left">
											<h3 class="disabled"><a href="#">Varsity</a></h3>
										</div>
										<div class="pull-right">
											<h3 class="disabled"><a href="#">Junior Varisty</a></h3>
										</div>
									</div>
								</div>
							</div>
							<div class="sport" id="golf">
								<div class="inner">
									<h2>Golf</h2>
									<div class="holder">
										<div class="pull-left">
											<h3 class="disabled"><a href="#">Varsity</a></h3>
										</div>
										<div class="pull-right">
											<h3 class="disabled"><a href="#">Junior Varsity</a></h3>
										</div>
									</div>
								</div>
							</div>
							<div class="sport" id="blacrosse">
								<div class="inner">
									<h2>Lacrosse (Boys)</h2>
									<div class="holder">
										<div class="pull-left">
											<h3 class="disabled"><a href="#">Varsity</a></h3>
										</div>
										<div class="pull-right">
											<h3 class="disabled"><a href="#">Junior Varisty</a></h3>
										</div>
									</div>
								</div>
							</div>
							<div class="sport" id="glacrosse">
								<div class="inner">
									<h2>Lacrosse (Girls)</h2>
									<div class="holder">
										<div class="pull-left">
											<h3 class="disabled"><a href="#">Varsity</a></h3>
										</div>
										<div class="pull-right">
											<h3 class="disabled"><a href="#">Junior Varisty</a></h3>
										</div>
									</div>
								</div>
							</div>
							<div class="sport" id="softball">
								<div class="inner">
									<h2>Softball</h2>
									<div class="holder">
										<div class="pull-left">
											<h3 class="disabled"><a href="#">Varsity</a></h3>
										</div>
										<div class="pull-right">
											<h3 class="disabled"><a href="#">Junior Varisty</a></h3>
										</div>
									</div>
								</div>
							</div>		
							<div class="sport" id="btennis">
								<div class="inner">
									<h2>Tennis (Boys)</h2>
									<div class="holder">
										<div class="pull-left">
											<h3 class="disabled"><a href="#">Varsity</a></h3>
										</div>
										<div class="pull-right">
											<h3 class="disabled"><a href="#">Junior Varisty</a></h3>
										</div>
									</div>
								</div>
							</div>			
							<div class="sport" id="track">
								<div class="inner">
									<h2>Track & Field</h2>
									<div class="holder">
										<div class="pull-left">
											<h3 class="disabled"><a href="#">Varsity</a></h3>
										</div>
										<div class="pull-right">
											<h3 class="disabled"><a href="#">Junior Varisty</a></h3>
										</div>
									</div>
								</div>
							</div>		
							
						</div><!-- end "spring" -->
					
					</div><!-- end "tab-content" -->
				</div><!-- end "span9" -->
				<div class="span4 hidden-phone" id="recent_events">
				
					<div class="well">
						<h3>Recent Events</h3>
					</div>
					
				</div>
			</div>
		</div>