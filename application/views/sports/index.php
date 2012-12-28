<?php foreach ($sports as $sports_item): ?>

  	<h2><?php echo $sports_item['title'] ?></h2>
  	<div id="main">
  		<?php echo $sports_item['content'] ?>
	</div>
	<p><a href="news/<?php echo $sports_item['slug'] ?>">View article</a></p>

<?php endforeach ?>
