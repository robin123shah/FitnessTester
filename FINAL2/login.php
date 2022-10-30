<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fitness Tester</title>
    <link rel="stylesheet" href="Sign-in.css">
</head>
<body>

<header>
        <h1 style="font-size: 30px;font-style: italic;">ONE FINDS LIMITS</h1>
        <h1 style="font-size: 30px;font-style: italic;">BY PUSHING THEM.</h1>
        <h1 style="font-size: smaller;">HERBERT SIMON</h1>
        <div style="text-align: center;font-weight: 1000;">START EXERCISING IN AN EFFICIENT WAY HERE</div>
</header>
<div class='loginbox'>
    <img src="avatar.jpg" class="avatar">
    <h1>Login Here</h1>	
	<form method="post" action="login.php">

		<?php include('errors.php'); ?>

		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" >
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="login_user">Login</button>
		</div>
		<p>
			Not yet a member? <a href="register.php">Sign up</a>
		</p>
	</form>
</div>

</body>
</html>