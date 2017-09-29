<?php
include ("function.php");
if (!check_data($our_user, $our_user_pass)) {
    header("Location: log_in.php");
    exit;
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,400,700" rel="stylesheet">
    <link rel="stylesheet" href="./css/normalize.css">
    <link rel="stylesheet" href="css/welcome.css">
    <title>Sign in form</title>
</head>
<body>
    <form action="log_in.php" method="post">
        <h1 class="title">WELCOME</h1>
        <div class="submit_button">
            <label for="destroy"></label>
            <input type="submit" name="destroy" value="Log out">
        </div>
    </form>
</body>
</html>