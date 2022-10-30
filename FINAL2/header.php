<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css\header.css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,800" rel="stylesheet">
    <title></title>
</head>
<body>
    <div class="header">
        <div class = "inner_header">
            <div class="logo_container">
        <h1>FITNESS<span>TESTER</span></h1>
</div>
        <ul class="navigation">
            <a href="index.php"><li>HOME</li></a>
            <a href="about.php"><li>About</li></a>
            <a href=""><li>WELCOME <div class="name"><?php echo $_SESSION['username']; ?></div></li></a>
            <a href="index.php?logout='1'" ><li><p class="p">Logout</p></li></a>
        </ul>

        </div>
    </div>
</body>
</html>
<?php

?>