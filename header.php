<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="description" content="Meta description example">
		<meta name="viewport" content="width=device-width, initial scale=1">
		<title>TAN</title>
		<link rel="icon" href="img/eastlakee.ico">
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>

		<header>
			<nav>
				<a href="#">
					<img src="img/EHSLogo.jpg">
				</a>
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="#">Portfolio</a></li>
					<li><a href="#">About Me</a></li>
					<li><a href="#">Contact</a></li>
				</ul>
				<div>
					<form action="includes/login.inc.php" method="post">
						<input type="text" name="mailuid" placeholder="Username/E-mail...">
						<input type="password" name="pwd" placeholder="Password...">
						<button type="submit" name="login-submit">Login</button>
					</form>
					<a href="signup.php">Sign Up</a>
					<form action="includes/logout.inc.php" method="post">
						<button type="submit" name="logout-submit">Logout</button>
					</form> 
				</div>
			</nav>
		</header>
