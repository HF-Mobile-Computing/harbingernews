<!DOCTYPE html>
<html>

<head>

	<title>Clubs</title>
	
	<meta charset="utf-8">
	
	<!-- enable webapp on iPhone -->
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<link rel="apple-touch-icon" href="/img/Apple-Icon.png" />
	<link rel="apple-touch-icon" sizes="114x114" href="/img/Apple-Icon-Retina.png" />
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
	<meta http-equiv="X-UA-Compatible" content="chrome=1">
	
	<link rel="stylesheet" href="/css/bootstrap.css" type="text/css">
	<link rel="stylesheet" href="/css/bootstrap-responsive.css" type="text/css">
	<link rel="stylesheet" href="/css/jquery.fancybox.css" type="text/css">
	<link rel="stylesheet" href="/css/all.css" type="text/css">
	
	<script src="/js/jquery-1.8.0.min.js"></script>
	<script src="/js/bootstrap.js" type="text/javascript"></script>
	<script src="/js/jquery.fancybox.pack.js" type="text/javascript"></script>
		
	<script type="text/javascript">
			
		// Fancybox
		$(function() {
			$('.fancy').fancybox({
				'hideOnContentClick' : false,
				'openEffect' : 'fade',
			});
			$('#nav_clubs').addClass('active');
		});
	
	</script>
	
	<style type="text/css">
	
		@media (max-width: 480px) {
			#page {
				padding-left: 0px !important;
				padding-right: 0px !important;
			}
		}
	
		.nav li a {
			color: #629b63;
			background: inherit;
		}
		
		.nav li {
			background: inherit;
		}
	
		.nav li :hover {
			background: #eeeeee !important;
			color: #416847;
		}
		
		.nav > .active > a {
			background: white !important;
		}
		
		.nav-collapse > .nav > .active > a {
			background: #629b63 !important;
		}
	
		#page {
			margin-top: 10px;
			background: white;
			margin-bottom: 10px;
			padding-top: 5px;
			padding-left: 10px;
			padding-right: 10px;
		}
				
		.accordion-heading {
			background: #ededed;
		}
		
		.row {
			padding-left: 10px;
		}
		
		.club-bottom {
			display: block;
			background: white;
			clear: both;
			border-top: 1px solid #efefef;
			padding-top: 5px;
			padding-bottom: 5px;
		}
		
		.image {
			
		}
		
		.description {
			font-size: 1.15em;
			display: block;
			margin-right: 30px;
		}
		
		.accordion-inner {
			background: white;
		}
		
		.accordion-group {
			margin-bottom: 10px;
		}
		
	</style>
	
</head>

<body>

	<div id="content">
	
		<?php include($_SERVER['DOCUMENT_ROOT'].'/header.php') ?>
		
		<div id="page" class="container">
		
			<ul class="nav nav-tabs">
				<li class="active"><a href="#announcements" data-toggle="tab">Announcements</a></li>
				<li><a href="#arts" data-toggle="tab">Arts</a></li>
				<li><a href="#academic" data-toggle="tab">Academic</a></li>
				<li><a href="#cservice" data-toggle="tab">Community Service</a></li>
				<li><a href="#cultural" data-toggle="tab">Cultural</a></li>
				<li><a href="#science" data-toggle="tab">Science</a></li>
				<li><a href="#sservices" data-toggle="tab">Student Services</a></li>
			</ul>
			
			<div class="tab-content">
			
				<!-- !Announcements -->
				<div class="tab-pane active" id="announcements">
				
				
				</div><!-- end "announcements" -->
				
				<!-- !Art -->
				<div class="tab-pane" id="arts">
				
					<div class="accordion" id="art_accord">
					
						<!-- Art -->
						<div class="accordion-group">
							<div class="accordion-heading">
								<a class="accordion-toggle" data-toggle="collapse" data-parent="#art_accord" href="#art">Art</a>
							</div>
							<div id="art" class="accordion-body collapse">
								<div class="accordion-inner">
									Lipsum Lorem
								</div>
							</div>
							<div class="club-bottom">
								<div class="row">
									<div class="span5">
										<img src="http://placehold.it/300x200" class="image" />
									</div>
									<div class="description span6">The Art Club meets weekly to create various arts and crafts projects. Students can work in a group or individually. The club also participates in many community service activities related to art, such as designing posters and an arts and crafts table during Black History Month. The club participates in some art contests and has at times had guest artists speak. They also participate in some fundraising activities. Art activities are usually student initiated. The Art Club meets weekly and there are no requirements to join. Refreshments are sometimes provided!</div>
								</div>
							</div>
						</div>
						
						<!-- Harbinger -->
						<div class="accordion-group">
							<div class="accordion-heading">
								<a class="accordion-toggle" data-toggle="collapse" data-parent="#art_accord" href="#harbinger">Harbinger</a>
							</div>
							<div id="harbinger" class="accordion-body collapse">
								<div class="accordion-inner">
									Lipsum Lorem
								</div>
							</div>
							<div class="club-bottom">
								<div class="row">
									<div class="span5">
										<img src="http://placehold.it/300x200" class="image" />
									</div>
									<div class="description span6">Members of the Tornado News Team produce Harborfields’ official student newspaper and news website. They are journalists, photojournalists and artists, typically 15 or so, who are committed to informing and entertaining readers, and to bringing students and staff members pertinent news in a timely, lively and appealing manner. From news to sports, to profiles and entertainment reviews, students write, edit, photograph, and design page layouts and artwork aimed at best representing the activities and opinions of Harborfields’ students and staff.<br /><br />
The club also attends workshops and conferences at area colleges that are designed to aid and educate high school journalists about the latest trends and technology in scholastic publishing. Working on The Harbinger can help to generate a sense of pride and accomplishment. A finished paper, “hot off the press” is always a product of hard work, teamwork, and fun. There are no requirements to join except that students should be willing to contribute an article, photograph or piece of art to the paper on a regular basis.</div>
								</div>
							</div>
						</div>
						
						<!-- HTco -->
						<div class="accordion-group">
							<div class="accordion-heading">
								<a class="accordion-toggle" data-toggle="collapse" data-parent="#art_accord" href="#htco">HTco</a>
							</div>
							<div id="htco" class="accordion-body collapse">
								<div class="accordion-inner">
									Lipsum Lorem
								</div>
							</div>
							<div class="club-bottom">
								<div class="row">
									<div class="span5">
										<img src="http://placehold.it/300x200" class="image" />
									</div>
									<div class="description span6">The Theater Company is a terrific and exciting organization whose members are talented and fun- loving students wholeheartedly in love with all the different aspects of theater. In addition to improving performance skills in acting, singing, and dancing, the members of the company learn how to build and paint scenery, hang and focus lights, and use sound equipment. The Theater Company produces four shows each year: a Drama or Comedy in the fall semester, a mid-year student-written and directed short play festival called PlayFest, a traditional spring musical, and an end of the year celebration of classical theater called Shakespeare in the Courtyard. Cast and crew meet according to published rehearsal schedules, generally five days a week in the afternoons and on Saturday mornings. Members of the company have a varied range of interests and talents. The company currently has more than 55 active members of whom 18 are Honors Thespians. To become an Honors Thespian, a student must maintain better than average grades in all score subjects and participate in some capacity in all four productions.</div>
								</div>
							</div>
						</div>
						
						<!-- Jazz Band -->
						<div class="accordion-group">
							<div class="accordion-heading">
								<a class="accordion-toggle" data-toggle="collapse" data-parent="#art_accord" href="#jazz">Jazz Band</a>
							</div>
							<div id="jazz" class="accordion-body collapse">
								<div class="accordion-inner">
									Lipsum Lorem
								</div>
							</div>
							<div class="club-bottom">
								<div class="row">
									<div class="span5">
										<img src="http://placehold.it/300x200" class="image" />
									</div>
									<div class="description span6">Donec ullamcorper nulla non metus auctor fringilla. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Etiam porta sem malesuada magna mollis euismod. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Cras mattis consectetur purus sit amet fermentum.</div>
								</div>
							</div>
						</div>
						
						<!-- Music Appreciation -->
						<div class="accordion-group">
							<div class="accordion-heading">
								<a class="accordion-toggle" data-toggle="collapse" data-parent="#art_accord" href="#musicap">Music Appreciation</a>
							</div>
							<div id="musicap" class="accordion-body collapse">
								<div class="accordion-inner">
									Lipsum Lorem
								</div>
							</div>
							<div class="club-bottom">
								<div class="row">
									<div class="span5">
										<img src="http://placehold.it/300x200" class="image" />
									</div>
									<div class="description span6">The “Trax” Music Appreciation Club encourages students to share their musical interests with one another by discussing and analyzing contemporary music. The club aims to raise music awareness at Harborfields by publishing articles in the school newspaper, organizing music- related contests, and attending concert performances by local and popular bands. The club meets routinely after school on a weekly/biweekly basis and all students are welcome.</div>
								</div>
							</div>
						</div>
						
						<!-- Playfest -->
						<div class="accordion-group">
							<div class="accordion-heading">
								<a class="accordion-toggle" data-toggle="collapse" data-parent="#art_accord" href="#playfest">Playfest</a>
							</div>
							<div id="playfest" class="accordion-body collapse">
								<div class="accordion-inner">
									Lipsum Lorem
								</div>
							</div>
							<div class="club-bottom">
								<div class="row">
									<div class="span5">
										<img src="http://placehold.it/300x200" class="image" />
									</div>
									<div class="description span6">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Maecenas faucibus mollis interdum. Nulla vitae elit libero, a pharetra augue. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Maecenas sed diam eget risus varius blandit sit amet non magna.</div>
								</div>
							</div>
						</div>
						
						<!-- Zephyr -->
						<div class="accordion-group">
							<div class="accordion-heading">
								<a class="accordion-toggle" data-toggle="collapse" data-parent="#art_accord" href="#zephyr">Zephyr</a>
							</div>
							<div id="zephyr" class="accordion-body collapse">
								<div class="accordion-inner">
									Lipsum Lorem
								</div>
							</div>
							<div class="club-bottom">
								<div class="row">
									<div class="span5">
										<img src="http://placehold.it/300x200" class="image" />
									</div>
									<div class="description span6">The Zephyr is the school’s literary magazine. The club meets to discuss topics and publish the magazine. They use computers to scan images and lay out text on a pagemaker program to prepare the publication for print. The literary magazine club is made up of 5 to 10 students. They meet periodically, and there are no requirements to join, but students should have an interest in art, literature and poetry, computers and/or typing.</div>
								</div>
							</div>
						</div>
						
					</div><!-- end "accordion" & "art_accord" -->
				</div><!-- end "arts" -->
				
				<!-- !Academic -->
				<div class="tab-pane" id="academic">
				
					<div class="accordion" id="ac_accord">
					
						<!-- Academic Club -->
						<div class="accordion-group">
							<div class="accordion-heading">
								<a class="accordion-toggle" data-toggle="collapse" data-parent="#ac_accord" href="#academicclub">Academic Club</a>
							</div>
							<div id="academicclub" class="accordion-body collapse">
								<div class="accordion-inner">
									Lipsum Lorem
								</div>
							</div>
							<div class="club-bottom">
								<div class="row">
									<div class="span5">
										<img src="http://placehold.it/300x200" class="image" />
									</div>
									<div class="description span6">The Academic Team selects teams that participate in various academic competitions. These competitions include the Long Island Challenge and several other trivia challenge contests. There are no requirements to join. However, students who are interested in the academic team should have a strong academic record and enjoy trivia questions and games.</div>
								</div>
							</div>
						</div>
						
						<!-- Future Educators -->
						<div class="accordion-group">
							<div class="accordion-heading">
								<a class="accordion-toggle" data-toggle="collapse" data-parent="#ac_accord" href="#fedu">Future Educator's Club</a>
							</div>
							<div id="fedu" class="accordion-body collapse">
								<div class="accordion-inner">
									Lipsum Lorem
								</div>
							</div>
							<div class="club-bottom">
								<div class="row">
									<div class="span5">
										<img src="http://placehold.it/300x200" class="image" />
									</div>
									<div class="description span6">Future Educators is a club designed for students who have expressed an interest in pursuing the field of education after high school. Students meet monthly at the high school to discuss teaching strategies, placement experiences, and community service ideas. Our students are afforded the opportunity to work in an elementary classroom one day a week after school. In this venue they have the chance to experience first hand what happens in a classroom. In addition, students participate in a variety of activities that support the community including Safe Halloween and Special Olympics. This club is open to students in grades 9-12. Future Educators meeting the requirements can join the Future Educators National Honor Society.</div>
								</div>
							</div>
						</div>
						
						<!-- Matheletes -->
						<div class="accordion-group">
							<div class="accordion-heading">
								<a class="accordion-toggle" data-toggle="collapse" data-parent="#ac_accord" href="#matheletes">Mathelete's</a>
							</div>
							<div id="matheletes" class="accordion-body collapse">
								<div class="accordion-inner">
									Lipsum Lorem
								</div>
							</div>
							<div class="club-bottom">
								<div class="row">
									<div class="span5">
										<img src="http://placehold.it/300x200" class="image" />
									</div>
									<div class="description span6">The math department encourages strong math students to test their abilities in competition against other schools in Suffolk County. There are no requirements to join other than a strong interest in math.</div>
								</div>
							</div>
						</div>

					</div><!-- end "accordion" & "ac_accord" -->
				</div><!-- end "academic" & "tab pane" -->
				
				<!-- !Community Service -->
				<div class="tab-pane" id="cservice">
					<div class="accordion" id="cs_accord">
					
						<!-- Community Outreach -->
						<div class="accordion-group">
							<div class="accordion-heading">
								<a class="accordion-toggle" data-toggle="collapse" data-parent="#cs_accord" href="#outreach">Community Outreach</a>
							</div>
							<div id="outreach" class="accordion-body collapse">
								<div class="accordion-inner">
									Lipsum Lorem
								</div>
							</div>
							<div class="club-bottom">
								<div class="row">
									<div class="span5">
										<img src="http://placehold.it/300x200" class="image" />
									</div>
									<div class="description span6">The Community Outreach Club is an organization committed to serving those families in need within our own community. Students participate in food shopping, stocking our food pantry, and preparing all of the food baskets that are delivered directly to our families’ front doors. The Club was honored their first year with the ANTI─HUNGER ACTION AWARD presented by LONG ISLAND HEALTH AND WELFARE COUNCIL for their amazing work to stamp out hunger on Long Island. Community service hours are available.</div>
								</div>
							</div>
						</div>
						
						<!-- Global Justice -->
						<div class="accordion-group">
							<div class="accordion-heading">
								<a class="accordion-toggle" data-toggle="collapse" data-parent="#cs_accord" href="#gjustice">Global Justice</a>
							</div>
							<div id="gjustice" class="accordion-body collapse">
								<div class="accordion-inner">
									Lipsum Lorem
								</div>
							</div>
							<div class="club-bottom">
								<div class="row">
									<div class="span5">
										<img src="http://placehold.it/300x200" class="image" />
									</div>
									<div class="description span6">The Harborfields High School Students for Global Justice Club is an organization that was founded to help educate the Harborfields community about social issues affecting people across the globe. The goal is to attract students to participate on a local level and demonstrate how their actions can have far reaching effects. This club meets bi-monthly and works on various group projects throughout the year. Students involved in this club should have a desire to help others and an interest in global issues.</div>
								</div>
							</div>
						</div>
						
						<!-- Habitat -->
						<div class="accordion-group">
							<div class="accordion-heading">
								<a class="accordion-toggle" data-toggle="collapse" data-parent="#cs_accord" href="#habitat">Habitat for Humanity</a>
							</div>
							<div id="habitat" class="accordion-body collapse">
								<div class="accordion-inner">
									Lipsum Lorem
								</div>
							</div>
							<div class="club-bottom">
								<div class="row">
									<div class="span5">
										<img src="http://placehold.it/300x200" class="image" />
									</div>
									<div class="description span6">The Habitat for Humanity club at Harborfields High School provides students the opportunity to work together with needy families on long Island. The students have many fund raisers throughout the year. This money allows them to be involved in a hands-on building experience and to help hard working families fulfill their dreams of owning their own home. The club meets bi weekly. All students are welcome to join. The privilege to build is based on years of participation and age of each student.</div>
								</div>
							</div>
						</div>
						
						<!-- Interact -->
						<div class="accordion-group">
							<div class="accordion-heading">
								<a class="accordion-toggle" data-toggle="collapse" data-parent="#cs_accord" href="#interact">Interact</a>
							</div>
							<div id="Interact" class="accordion-body collapse">
								<div class="accordion-inner">
									Lipsum Lorem
								</div>
							</div>
							<div class="club-bottom">
								<div class="row">
									<div class="span5">
										<img src="http://placehold.it/300x200" class="image" />
									</div>
									<div class="description span6">The Interact Club is a community service club. Some of their activities include hosting the annual Safe Halloween program here at the high school and buying gifts for needy children around the holidays. They also hold an annual blood drive. There are no requirements to join the Interact Club. There is no scheduled meeting time. They meet as needed depending on their activities.</div>
								</div>
							</div>
						</div>
						
						<!-- SHOC -->
						<div class="accordion-group">
							<div class="accordion-heading">
								<a class="accordion-toggle" data-toggle="collapse" data-parent="#cs_accord" href="#shoc">SHOC</a>
							</div>
							<div id="shoc" class="accordion-body collapse">
								<div class="accordion-inner">
									Lipsum Lorem
								</div>
							</div>
							<div class="club-bottom">
								<div class="row">
									<div class="span5">
										<img src="http://placehold.it/300x200" class="image" />
									</div>
									<div class="description span6"> Donec sed odio dui. Vestibulum id ligula porta felis euismod semper.</div>
								</div>
							</div>
						</div>
					
					</div><!-- end "accordion" & "cs_accord"-->
				</div><!-- end "community service" & "tab-pane" -->
				
				<!-- !Cultural -->
				<div class="tab-pane" id="cultural">
					<div class="accordion" id="cult_accord">
						
						<!-- caribbean -->
						<div class="accordion-group">
							<div class="accordion-heading">
								<a class="accordion-toggle" data-toggle="collapse" data-parent="#cult_accord" href="#caribbean">Caribbean Club</a>
							</div>
							<div id="caribbean" class="accordion-body collapse">
								<div class="accordion-inner">
									Lipsum Lorem
								</div>
							</div>
							<div class="club-bottom">
								<div class="row">
									<div class="span5">
										<img src="http://placehold.it/300x200" class="image" />
									</div>
									<div class="description span6">The Caribbean Club is open to all students to come together and learn from each other about different Caribbean cultures, languages, food and music. Our club also has a social service component where we raise awareness and participate in community service activities. We also have a holiday and year end party featuring a Caribbean feast!</div>
								</div>
							</div>
						</div>
						
						<!-- French Club -->
						<div class="accordion-group">
							<div class="accordion-heading">
								<a class="accordion-toggle" data-toggle="collapse" data-parent="#cult_accord" href="#french">French Club</a>
							</div>
							<div id="french" class="accordion-body collapse">
								<div class="accordion-inner">
									Lipsum Lorem
								</div>
							</div>
							<div class="club-bottom">
								<div class="row">
									<div class="span5">
										<img src="http://placehold.it/300x200" class="image" />
									</div>
									<div class="description span6">Le Cercle Francais is an active club which explores many aspects of the French culture. Club members enjoy French food tasting, listening to French music, watching French movies, and celebrating French holidays such as Mardi Gras! They organize trips to museums, restaurants, concerts, and hockey games. The club holds bake sales and earns money to donate to humanitarian organizations working in Africa and other Francophone countries. Members also enjoy teaching basic French to the younger students at the elementary and primary schools as well visiting Middle School students to share their enthusiasm for the French language and culture. Our end of the year soiree includes a variety of delicious French dishes and desserts! The French Club meets once every two weeks and is open to anyone who is interested in French culture! New members and new ideas are always welcome!</div>
								</div>
							</div>
						</div>
						
						<!-- Italian Club -->
						<div class="accordion-group">
							<div class="accordion-heading">
								<a class="accordion-toggle" data-toggle="collapse" data-parent="#cult_accord" href="#italian">Italian Club</a>
							</div>
							<div id="italian" class="accordion-body collapse">
								<div class="accordion-inner">
									Lipsum Lorem
								</div>
							</div>
							<div class="club-bottom">
								<div class="row">
									<div class="span5">
										<img src="http://placehold.it/300x200" class="image" />
									</div>
									<div class="description span6">Il Circolo Italiano is the Italian club of Harborfields High School. In 2010-2011, we went to see "Pinocchio, the Musical" in Manhattan, learned cooking skills at the A La Carte Culinary School in Lynbrook, New York, raised money for the Fukushima, Japan Tsumami relief efforts, learned to play Scopa (a traditional Italian Card Game) and played Bocce outdoors. The Circolo meets every two weeks and is always open to new members. You don't need to speak Italian to join us. Ci vediamo lì! (See you there!)</div>
								</div>
							</div>
						</div>
						
						<!-- Multicultural Club -->
						<div class="accordion-group">
							<div class="accordion-heading">
								<a class="accordion-toggle" data-toggle="collapse" data-parent="#cult_accord" href="#multicultural">Multi-Cultural Club</a>
							</div>
							<div id="multicultural" class="accordion-body collapse">
								<div class="accordion-inner">
									Lipsum Lorem
								</div>
							</div>
							<div class="club-bottom">
								<div class="row">
									<div class="span5">
										<img src="http://placehold.it/300x200" class="image" />
									</div>
									<div class="description span6">This committee is dedicated to recognizing and celebrating the diversity in the Harborfields community. Students work together to organize various cultural events in the high school as well as in the district. The committee assists in organizing activities centered around such programs as Mix-it-up-at-lunch, Black History Month, and Women’s History Month. Students cooperatively learn about other cultures through a monthly film selection and discussion as well.</div>
								</div>
							</div>
						</div>
						
						<!-- Spanish Club -->
						<div class="accordion-group">
							<div class="accordion-heading">
								<a class="accordion-toggle" data-toggle="collapse" data-parent="#cult_accord" href="#spanish">Spanish Club</a>
							</div>
							<div id="spanish" class="accordion-body collapse">
								<div class="accordion-inner">
									Lipsum Lorem
								</div>
							</div>
							<div class="club-bottom">
								<div class="row">
									<div class="span5">
										<img src="http://placehold.it/300x200" class="image" />
									</div>
									<div class="description span6">El club de español is a lively club that explores Spanish and Hispanic cultures. Members enjoy Spanish and Hispanic food, movies and music. Members have the opportunity to celebrate and learn about cultural holidays such as El día de los muertos, El cinco de mayo and La tomatina. Students are also actively involved in raising funds for humanitarian organizations as well as club expenses. The end of the year fiesta includes tasty authentic treats and cultural music and dancing. Our club also participates in school functions such as Safe-Halloween and La Sociedad Honoraria Hispánica.</div>
								</div>
							</div>
						</div>
					
					</div><!-- end "accordion" & "cult_accord" -->
				</div><!-- end "cultural" & "tab-pane" -->
				
				<!-- !Science -->
				<div class="tab-pane" id="science">
					<div class="accordion" id="sci_accord">
					
						<!-- Environmental Club -->
						<div class="accordion-group">
							<div class="accordion-heading">
								<a class="accordion-toggle" data-toggle="collapse" data-parent="#sci_accord" href="#environmental">Environmental Club</a>
							</div>
							<div id="environmental" class="accordion-body collapse">
								<div class="accordion-inner">
									Lipsum Lorem
								</div>
							</div>
							<div class="club-bottom">
								<div class="row">
									<div class="span5">
										<img src="http://placehold.it/300x200" class="image" />
									</div>
									<div class="description span6">The Environmental Club meets to discuss environmental issues that are having an impact either locally or nationally. Sometimes, the club writes letters to Congressmen asking them to act on these environmental concerns and they might attend town board meetings when environmental issues are being discussed or voted on. The group is committed to raising awareness of environmental issues throughout the school and is also responsible for various school-wide recycling programs including ink cartridges/toner, cell phones, and paper. The group is often involved in beach clean-ups and beautification projects at the high school. The only requirement to join the Environmental Club is a commitment to the environment.</div>
								</div>
							</div>
						</div>
						
						<!-- Forensics Club -->
						<div class="accordion-group">
							<div class="accordion-heading">
								<a class="accordion-toggle" data-toggle="collapse" data-parent="#sci_accord" href="#forensics">Forensics Club</a>
							</div>
							<div id="forensics" class="accordion-body collapse">
								<div class="accordion-inner">
									Lipsum Lorem
								</div>
							</div>
							<div class="club-bottom">
								<div class="row">
									<div class="span5">
										<img src="http://placehold.it/300x200" class="image" />
									</div>
									<div class="description span6">The Forensics Club meets to discuss modern methods of investigating crimes. Members will solve various mock crimes, brain teasers and help to create their own mock criminal case and crime scene. The club will also meet to watch various movies, shows and documentaries that deal with Forensic Science. Some members of the Forensics club will be selected to participate in the Suffolk County Forensics C.S.I. challenge. There are no requirements to join the Forensics club.</div>
								</div>
							</div>
						</div>
						
						<!-- Science and Engineering -->
						<div class="accordion-group">
							<div class="accordion-heading">
								<a class="accordion-toggle" data-toggle="collapse" data-parent="#sci_accord" href="#engineering">Science and Engineering Club</a>
							</div>
							<div id="engineering" class="accordion-body collapse">
								<div class="accordion-inner">
									Lipsum Lorem
								</div>
							</div>
							<div class="club-bottom">
								<div class="row">
									<div class="span5">
										<img src="http://placehold.it/300x200" class="image" />
									</div>
									<div class="description span6"> Donec sed odio dui. Vestibulum id ligula porta felis euismod semper.</div>
								</div>
							</div>
						</div>
						
						<!-- Technology Club -->
						<div class="accordion-group">
							<div class="accordion-heading">
								<a class="accordion-toggle" data-toggle="collapse" data-parent="#sci_accord" href="#technology">Technology Club</a>
							</div>
							<div id="technology" class="accordion-body collapse">
								<div class="accordion-inner">
									Lipsum Lorem
								</div>
							</div>
							<div class="club-bottom">
								<div class="row">
									<div class="span5">
										<img src="http://placehold.it/300x200" class="image" />
									</div>
									<div class="description span6">Electronic Multimedia Studies is a club available to Harborfields High School students who are interested in electronics, media, computers, and entertainment systems. There are workshops and activities about computer maintenance and repair, custom computer creation, video game system repair, and general electronic repair. We also host weekly game (video and card) competitions and tournaments, allowing students to meet and interact with other students with similar interests. If you enjoy Computers, Electronics, or Games - EMS will provide a welcoming atmosphere and a creative environment for learning and exploring today's cutting edge tech.</div>
								</div>
							</div>
						</div>
					
					</div><!-- end "accordion" & "sci_accord" -->
				</div><!-- end "tab-pane" & "science" -->
				
				<!-- !Student Services -->
				<div class="tab-pane" id="sservices">
					<div class="accordion" id="ss_accord">
						
						<!-- Athletes Helping Athletes -->
						<div class="accordion-group">
							<div class="accordion-heading">
								<a class="accordion-toggle" data-toggle="collapse" data-parent="#ss_accord" href="#athletes">Athletes Helping Athletes</a>
							</div>
							<div id="athletes" class="accordion-body collapse">
								<div class="accordion-inner">
									Lipsum Lorem
								</div>
							</div>
							<div class="club-bottom">
								<div class="row">
									<div class="span5">
										<img src="http://placehold.it/300x200" class="image" />
									</div>
									<div class="description span6">The Athletes Helping Athletes program of Harborfields High School recognizes the role of sports and athletes in developing and encouraging youngsters to be responsible members of their community. In delivering an early intervention drug, alcohol , tobacco and violence prevention program to fifth and sixth grade students, and by processing the issues of sportsmanship, civility, bullying, and teasing, the student-athlete leaders of Athletes Helping Athletes seek to encourage students to stay in school, avoid substance abuse and violence, as well as be respectful of both themselves and others. It is the mission of the student-athlete role models to inspire the youth in our community to make healthy choices, positive decisions, and to have respectful interactions; and consequently, improve the quality of life in our community.</div>
								</div>
							</div>
						</div>
						
						<!-- Best Buddies -->
						<div class="accordion-group">
							<div class="accordion-heading">
								<a class="accordion-toggle" data-toggle="collapse" data-parent="#ss_accord" href="#bbuddies">Best Buddies</a>
							</div>
							<div id="bbuddies" class="accordion-body collapse">
								<div class="accordion-inner">
									Lipsum Lorem
								</div>
							</div>
							<div class="club-bottom">
								<div class="row">
									<div class="span5">
										<img src="http://placehold.it/300x200" class="image" />
									</div>
									<div class="description span6">The primary mission of Best Buddies is to extend the borders of the school community, and make sure everyone feels that they are a part of the Harborfields family. As a group, Best Buddies strives to bridge the gap between cliques, giving individuals a chance to interact with other people that they may not usually associate with. Best Buddies is not composed of jocks or preps, but of Harborfields students who are interested in meeting new people and making a difference in their immediate community.</div>
								</div>
							</div>
						</div>
						
						<!-- GSA -->
						<div class="accordion-group">
							<div class="accordion-heading">
								<a class="accordion-toggle" data-toggle="collapse" data-parent="#ss_accord" href="#gsa">Gay/Straight Alliance</a>
							</div>
							<div id="gsa" class="accordion-body collapse">
								<div class="accordion-inner">
									Lipsum Lorem
								</div>
							</div>
							<div class="club-bottom">
								<div class="row">
									<div class="span5">
										<img src="http://placehold.it/300x200" class="image" />
									</div>
									<div class="description span6">This extracurricular club welcomes students of all grade levels and of wide-ranging interests and talents. A friendly and supportive group of students, this social club seeks to cultivate awareness and acceptance of lesbian, gay, bi-sexual, and transgender students in the high school community. The club offers a safe forum for the discussion of issues relevant to LGBT teens. The GSA also supports and encourages the alliance of straight and LGBT students which allows them to work cooperatively to reduce harassment, discrimination, and bias based on sexual orientation or gender identity. Finally, club members engage in various cultural and educational activities, such as film study, reading groups, hosting of guest speakers, museum and theater outings and various other activities.</div>
								</div>
							</div>
						</div>
					
					</div><!-- end "accordion" & "ss_accord"-->
				</div><!-- end "tab-pane" & "sservices"-->
				
			</div>
			</div><!-- end "tab-content" -->
			
			<div id="footer_spacer"></div>

	</div><!-- end "content" -->
			
	<div id="footer">
	
		<!--#include virtual="/footer.shtml" -->
		
		<div class="container">
			<div class="pull-right" style="margin-top: 20px;">
					This page was last updated by Alex LaFroscia on September 10, 2012.
			</div>
		</div>
	</div> <!-- end "footer" -->

</body>

</html>