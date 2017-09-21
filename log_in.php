<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign in form</title>
</head>
<body>
<h1>Our form</h1>
<form action="log_in.php" method="POST">
    <p class="data_inputs">
        <input type="text" name="user_name" placeholder="Name">
    </p>
    <p class="data_inputs">
        <input type="password" name="password" placeholder="Password">
    </p>
    <p class="submit_button">
        <input type="submit" name="submit" value="Log In">
    </p>
</form>
<?php
    include ("function.php");
    if (check_data($our_user, $our_user_pass)) {
        header("Location: welcome_page.php");
        exit;
    }
?>
</body>
</html>