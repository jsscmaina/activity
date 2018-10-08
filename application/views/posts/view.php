<h2><?php echo $tasks['title']; ?></h2>
<div class="post-task">
	<?php echo $tasks['tasks']; ?>
	<small class="post-date]">Posted on: <?php echo $tasks['Date']; ?></small>
</div>
<?php echo form_open('/posts/delete/' $task['id']);?>
	<input type="submit" value="delete" class="btn-delete">
</form>
<a class="btn-default" href="posts/edit/<?php echo $posts['slug'];?>">Edit</a>