<!--
Row of club dropdown menus to go underneath the Harbinger header.
-->
<script src="/harbingernews/js/jquery-1.8.0.min.js"></script>
<script type="text/javascript">
    $(function() {
                $('#nav_clubs').addClass('active');
            });
</script>

<div class="navbar navbar-static-top" style = "border-bottom: #629b63; z-index: 0;">
    <div class = "navbar-inner">
    	<div class = "container">
        	<ul class = "nav pull-left">
            	<li class="dropdown" id="menu1"><!-- Starts the "Arts" dropdown menu-->
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    	Arts
                    	<b class="caret"></b>
                    	</a>
                    <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu">
                        	<?php foreach ($arts as $club_item): ?>
                                <a href="<?php echo base_url() . 'index.php/clubs/view/' . $club_item['slug'] ?>"><?php echo "<li style='margin-top: 5px; color: #466843; margin-left: 10px;'>", $club_item["name"], "</li>"  ?></a>
                            <?php endforeach ?>
                	</ul>
                </li><!--Ends dropdown menu-->

            </ul>
            <ul class = "nav pull-left">
                <li class="dropdown" id="menu2"><!-- Starts the "Academics" dropdown menu-->
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    Academic
                    <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu">
                        <?php foreach ($academic as $club_item): ?>
                            <a href="<?php echo base_url() . 'index.php/clubs/view/' . $club_item['slug'] ?>"><?php echo "<li style='margin-top: 5px; color: #466843; margin-left: 10px;'>", $club_item["name"], "</li>"  ?></a>
                        <?php endforeach ?>
                    </ul>
                </li><!--Ends dropdown menu-->

            </ul>
            <ul class = "nav pull-left">
                <li class="dropdown" id="menu3"><!-- Starts the "Community Service" dropdown menu-->
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    Community Service
                    <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu">
                        <?php foreach ($community as $club_item): ?>
                            <a href="<?php echo base_url() . 'index.php/clubs/view/' . $club_item['slug'] ?>"><?php echo "<li style='margin-top: 5px; color: #466843; margin-left: 10px;'>", $club_item["name"], "</li>"  ?></a>
                        <?php endforeach ?>
                    </ul>
                </li><!--Ends dropdown menu-->

            </ul>
            <ul class = "nav pull-left">
                <li class="dropdown" id="menu4"><!-- Starts the "Cultural" dropdown menu-->
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    Cultural
                    <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu;">
                        <?php foreach ($cultural as $club_item): ?>
                            <a href="<?php echo base_url() . 'index.php/clubs/view/' . $club_item['slug'] ?>"><?php echo "<li style='margin-top: 5px; color: #466843; margin-left: 10px;'>", $club_item["name"], "</li>"  ?></a>
                        <?php endforeach ?>
                    </ul>
                </li><!--Ends dropdown menu-->

            </ul>
            <ul class = "nav pull-left">
                <li class="dropdown" id="menu5"><!-- Starts the "Sciences" dropdown menu-->
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    Sciences
                    <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu">
                        <?php foreach ($science as $club_item): ?>
                            <a href="<?php echo base_url() . 'index.php/clubs/view/' . $club_item['slug'] ?>"><?php echo "<li style='margin-top: 5px; color: #466843; margin-left: 10px;'>", $club_item["name"], "</li>"  ?></a>
                        <?php endforeach ?>
                    </ul>
                </li><!--Ends dropdown menu-->

            </ul>
            <ul class = "nav pull-left">
                <li class="dropdown" id="menu6"><!-- Starts the "Student Services" dropdown menu-->
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    Student Services
                    <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu">
                        <?php foreach ($services as $club_item): ?>
                            <a href="<?php echo base_url() . 'index.php/clubs/view/' . $club_item['slug'] ?>"><?php echo "<li style='margin-top: 5px; color: #466843; margin-left: 10px;'>", $club_item["name"], "</li>"  ?></a>
                        <?php endforeach ?>
                    </ul>
                </li><!--Ends final dropdown menu-->
            </ul>
        </div>
    </div>
</div>