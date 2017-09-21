<?php
/**
 * Created by PhpStorm.
 * User: alexandrk
 * Date: 21/09/2017
 * Time: 14:22
 */

$our_user = "Vasile";
$our_user_pass = "Hello123";

session_start();

function submit_form ($our_user, $our_user_pass, $post_user_name, $post_password) {
    if (empty($post_user_name) || empty($post_password)) {
        return "<p style='color:red;'>Please provide login and pass</p>";
    } else {
        $user = $post_user_name;
        $user_pass = $post_password;
        return session_data($our_user, $our_user_pass, $user, $user_pass);
    }
}
function session_data($our_user, $our_user_pass, $user, $user_pass) {
    if ($our_user === stripslashes($user) && $our_user_pass === stripslashes($user_pass)) {
        $_SESSION['user'] = $user;
        $_SESSION['password'] = $user_pass;
        header("Location: welcome_page.php");
        exit;
    } else {
        return "<p style='color:red;'>Wrong pass or name</p>";
    }
}

function check_data($our_user, $our_user_pass) {
    if ($_SESSION['user'] ===  $our_user && $_SESSION['password'] === $our_user_pass) {
        return 1;
    } else {
        return 0;
    }
}

if  (isset($_POST["submit"])){
    echo submit_form($our_user, $our_user_pass, $_POST["user_name"], $_POST["password"]);
}
if (isset($_POST["destroy"])) {
    echo "destroy";
    session_destroy();
}