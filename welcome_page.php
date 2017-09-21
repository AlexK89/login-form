<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>WELCOME</h1>
    <?php
        include ("function.php");
        if (!check_data($our_user, $our_user_pass)) {
            header("Location: log_in.php");
            exit;
        }
    ?>
    <p>
        <a href="log_in.php">Go back</a>
    </p>
    <form action="log_in.php" method="post">
        <input type="submit" name="destroy" value="Log out">
    </form>
</body>
</html>