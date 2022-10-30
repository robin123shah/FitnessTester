<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign-up</title>
    <link rel="stylesheet" href="css\Sign-up.css">
</head>
<body>
	<header>
        <h1 style="font-size: 30px;font-style: italic;">ONE FINDS LIMITS</h1>
        <h1 style="font-size: 30px;font-style: italic;">BY PUSHING THEM.</h1>
        <h1 style="font-size: smaller;">-HERBERT SIMON</h1>
        <div style="text-align: center;font-weight: 1000;">START EXERCISING IN AN EFFICIENT WAY HERE</div>
    </header>
	<div class='Signup_box'>
    <img src="avatar.jpg" class="avatar">
    <h1>Sign up</h1>
	<form method="post" action="register.php">

		<?php include('errors.php'); ?>
 
		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" value="<?php echo $username; ?>">
		</div>
		<div class="input-group">
			<label>Email</label>
			<input type="email" name="email" value="<?php echo $email; ?>">
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password_1">
		</div>
		<div class="input-group">
			<label>Confirm password</label>
			<input type="password" name="password_2">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="reg_user">Register</button>
		</div>
		<p>
			Already a member? <a href="login.php">Sign in</a>
		</p>
	</form>
</div>
</body>
</html>