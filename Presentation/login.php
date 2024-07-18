<!DOCTYPE html>
<html>
<head>
	<title>Slide Navbar</title>
	<link rel="stylesheet" type="text/css" href="login.css">
<link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
</head>
<body>
	<div class="main">  	
		<input type="checkbox" id="chk" aria-hidden="true">

			<div class="signup">
				<form action="http://localhost/stock/DAO/authentification.php" method="POST">
					
					<label for="chk" aria-hidden="true">Login</label>
					<input type="text" name="login" placeholder="Login" required="">
					<input type="password" name="mot_de_passe" placeholder="Password" required="">

					<button type="submit">Connexion</button>
				</form>
			</div>

	</div>
</body>
</html>