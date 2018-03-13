<?php include('server.php')?>

	<div class="headerlogin">
	<form method="post" action="register.php">
		<h2>Register</h2>
		<?php include('errors.php'); ?>

		<div class="input-grouplogin">
			<label>Username</label>
			<input type="text" name="username" value="<?php echo $username; ?>">
		</div>
		<div class="input-grouplogin">
			<label>Email</label>
			<input type="email" name="email" value="<?php echo $email; ?>">
		</div>
		<div class="input-grouplogin">
			<label>Password</label>
			<input type="password" name="password_1">
		</div>
		<div class="input-grouplogin">
			<label>Confirm password</label>
			<input type="password" name="password_2">
		</div>
		<div class="input-grouplogin">
			<button type="submit" class="btn" name="reg_user">Register</button>
		</div>
		<p>
			Already a member? <a href="?p=login">Sign in</a>
		</p>
	</form>
	<img src="img/fundo.png" alt="" class="imgcen center coluna col12" />
	</div
</div>
</header>
