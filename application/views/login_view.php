<form method="post" action="/codeigniter/user">
	<?php echo validation_errors(); ?>
	<div>
		<label>Email</label>
		<input type="text" name="email">
	</div>

	<div>
		<label>Password</label>
		<input type="password" name="password">
	</div>

	<input type="submit">
</form>