<!DOCTYPE html>
<html>
<head>
	<title>Membuat login</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<br/>
	<br/>
	<center><h2>Welcome</h2></center>	
	<br/>
	<div class="kotak_login">
	<p class="login_text">Silahkan Login</p>
	<br/>
		<form action="login.php" method="post">
			<div>
				<label>Username:</label>
				<input type="text" name="username" placeholder="username" class="form_login"/>
			</div>
			<div>
				<label>Password:</label>
				<input type="password" name="password" placeholder="password" class="form_login" />
			</div>			
			<div>
				<input type="submit" value="Login" class="tombol_login">
			</div>
		</form>
	</div>
</body>
</html>