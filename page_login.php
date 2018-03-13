

<?php include('server.php') ?>
	<div class="headerlogin">

	

	<form method="post" action="?p=login">

		<?php include('errors.php'); ?>
		<h2>Login</h2>
		<div class="input-grouplogin">
			<label>Username</label>
			<input type="text" name="username" >
		</div>
		<div class="input-grouplogin">
			<label>Password</label>
			<input type="password" name="password">
		</div>
		<div class="input-grouplogin">
			<button type="submit" class="btnlogin" name="login_user">Login</button>
		</div>
		<p>
			Not yet a member? <a href="?p=register">Sign up</a>
		</p>
	</form>
	<img src="img/fundo.png" alt="" class="imgcen center coluna col12" />
	</div>
</div>
</header>