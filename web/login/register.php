<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Registtracija/Prijava</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="header">
		<h2>Registriraj se</h2>
	</div>

	<form method="post" action="register.php">

		<?php include('errors.php'); ?>

		<div class="input-group">
			<label>Korisničko ime</label>
			<input type="text" name="username" value="<?php echo $username; ?>">
		</div>
		<div class="input-group">
			<label>Email</label>
			<input type="email" name="email" value="<?php echo $email; ?>">
		</div>
		<div class="input-group">
			<label>Lozinka</label>
			<input type="password" name="password_1">
		</div>
		<div class="input-group">
			<label>Potvrdi lozinku</label>
			<input type="password" name="password_2">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="reg_user">Registriraj se</button>
		</div>
		<p>
			Već ste član? <a href="login.php">Prijavi se</a>
		</p>
	</form>
</body>
</html>