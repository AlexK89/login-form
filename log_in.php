<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,400,700" rel="stylesheet">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Login form</title>
</head>
<body>
<form action="log_in.php" method="POST">
    <h1 class="title">Log in</h1>
    <div class="data_inputs">
        <label for="user_name"></label>
        <input type="text" name="user_name" placeholder="Name">
    </div>
    <div class="data_inputs">
        <label for="password"></label>
        <input type="password" name="password" placeholder="Password">
    </div>
    <div class="submit_button">
        <input type="submit" name="submit" value="Log In">
    </div>
    <?php
    include ("function.php");
    if (check_data($our_user, $our_user_pass)) {
        header("Location: welcome_page.php");
        exit;
    }
    ?>
</form>
</body>
</html>