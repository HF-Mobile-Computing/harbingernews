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
							<?php foreach ($fall as $sports_item): ?>
							<div class="sport" style="background-image: url(<?php echo base_url() . $sports_item['photo_path']; ?>);">
								<div class="inner">
							  		<h2><?php echo $sports_item['title'] ?></h2>
						  			<div class="holder">
						  				<div class="pull-left">
											<h3><a href="<?php echo base_url() . 'index.php/sports/view/' . $sports_item['slug'] ?>">Varsity</a></h3>
										</div>
										<div class="pull-right">
											<h3 class="disabled"><a href="#">Junior Varisty</a></h3>
										</div>
									</div>
								</div>
							</div>
							<?php endforeach ?>
														
						</div><!-- end "fall" -->
						
						<!-- WINTER -->
						<div class="tab-pane active" id="winter">
							<?php foreach ($winter as $sports_item): ?>
							<div class="sport" style="background-image: url(<?php echo base_url() . $sports_item['photo_path']; ?>);">
								<div class="inner">
							  		<h2><?php echo $sports_item['title'] ?></h2>
						  			<div class="holder">
						  				<div class="pull-left">
											<h3><a href="<?php echo base_url() . 'index.php/sports/view/' . $sports_item['slug'] ?>">Varsity</a></h3>
										</div>
										<div class="pull-right">
											<h3 class="disabled"><a href="#">Junior Varisty</a></h3>
										</div>
									</div>
								</div>
							</div>
							<?php endforeach ?>
						</div><!-- end "winter" -->
					
						<div class="tab-pane" id="spring">
							<?php foreach ($spring as $sports_item): ?>
							<div class="sport" style="background-image: url(<?php echo base_url() . $sports_item['photo_path']; ?>);">
								<div class="inner">
							  		<h2><?php echo $sports_item['title'] ?></h2>
						  			<div class="holder">
						  				<div class="pull-left">
											<h3><a href="<?php echo base_url() . 'index.php/sports/view/' . $sports_item['slug'] ?>">Varsity</a></h3>
										</div>
										<div class="pull-right">
											<h3 class="disabled"><a href="#">Junior Varisty</a></h3>
										</div>
									</div>
								</div>
							</div>
							<?php endforeach ?>
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