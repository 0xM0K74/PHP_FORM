<?php include("server.php"); ?>

<!DOCTYPE html>
<html>

<head>
    <title>login form</title>
    <link href="style.css" rel="stylesheet">
</head>

<body>
    <dev >
        <h2 class= "header">Login</h2>
    </dev>
    <form method="post" action="login.php">
    <?php include("errors.php"); ?>

        <dev class="input_group">
            <label>Email</label>
            <input type="email" name="email">
        </dev>
        <dev class="input_group">
            <label>Password</label>
            <input type="password" name="password">
        </dev>
        <dev class="input_group">
            <button type="submit" name="login" class="btn">Login</button>
        </dev>
        <p> don't a member? <a href="register.php">Sign Up</a></p>
    </form> 
</body>






</html>