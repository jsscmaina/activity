<h2><?= $title ?></h2>
<?php foreach ($tasks as $task); ?>
	<h3><?php echo $post['title']; ?> </h3>
	<small class="post-date]">Posted on: <?php echo $tasks['Date']; ?></small>
		<?php echo $tasks['Task']; ?>

	<?php endforeach; ?>