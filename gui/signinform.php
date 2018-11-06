 
<!DOCTYPE html>
<html>
<head>
	<title>register</title>
	<meta charset="UTF-8">
		<meta name="description" content="Guagym is the place where you will become and stay healthy">
  		<meta name="author" content="Aleksandar Grujic i Ivan Kovrlija">
  		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>GUAGYM</title>
		<link rel="stylesheet" href="css/style.css">
		<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
</head>
<body  class="register_background">
	<div id="signinbox" class="loginbox">
		<img src="images/avatar.png" class="avatar">
		<h1>Crate your account</h1>
		<form action="" method="post" accept-charset="utf-8">
			Name: <input type="text" name="u_name" placeholder="Enter Username">
			Last name: <input type="text" name="u_last" placeholder="Enter Late name">
			Email: <input type="text" name="u_mail" placeholder="Enter Email">
			Username: <input type="text" name="u_id" placeholder="Enter Username">
			Password: <input type="password" name="u_pass" placeholder="Enter Password">
			Confirm password: <input type="password" name="u_cpass" placeholder="Re enter Password">
			<p>Gender:<span id="checkbox_right">male <input type="radio" value="male" name="gender"> female <input type="radio" value="female" name="gender"></span></p>
			<input class="" type="submit" name="submit" value="SIGN UP">

			<a href="loginform.php">Already registrated?</a>
		</form>
	</div>
</body>
</html>