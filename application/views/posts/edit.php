<div class="form-group">
<?php echo validation_errors(); ?>
<?php echo form_open('posts/update'); ?>
			<input type="hidden" name="
			id" value="<?php echo $post['id']; ?>" />
			<h4 style="color: #888; text-align: center;font-size: 20px;">Tasks</h4>
			<input type="text" placeholder="Name" name="task" value="<?php echo $tasks['task']; ?>" /><br>
			<input type="date" placeholder="Date" name="date" value="<?php echo $tasks['date']; ?>"/><br>
			<input type="text" placeholder="Priority" name="time"value="<?php echo $tasks['time']; ?>"/><br>
			<textarea placeholder="Notes" name="notes"value="<?php echo $tasks['notes']; ?>"></textarea><br>
			<button type="submit" id="save">Save</button>
			<button type="reset" id="cancelbtn">Cancel</button>
			</form>
</div>