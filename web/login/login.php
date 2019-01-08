<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Prijavi/Registriraj se</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<div class="header">
		<h2>Prijavi se</h2>
	</div>

	<form method="post" action="login.php">

		<?php include('errors.php'); ?>

		<div class="input-group">
			<label>Korisničko ime</label>
			<input type="text" name="username" >
		</div>
		<div class="input-group">
			<label>Lozinka</label>
			<input type="password" name="password">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="login_user">Prijavi se</button>
		</div>
		<p>
			Niste još član? <a href="register.php">Registriraj se</a>
		</p>
	</form>


</body>
</html>