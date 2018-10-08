<h2>Add Task</h2>
<div class="form-group">
<?php echo validation_errors(); ?>
<?php echo form_open('posts/add2'); ?>
			<h4 style="color: #888; text-align: center;font-size: 20px;">Tasks</h4>
			<input type="text" placeholder="Name" name="task"/><br>
			<input type="date" placeholder="Date" name="date" /><br>
			<input type="text" placeholder="Priority" name="priority"/><br>
			<textarea placeholder="Notes" name="notes"></textarea><br>
			<button type="submit" id="save">Save</button>
			<button type="reset" id="cancelbtn">Cancel</button>
</form>
</div>