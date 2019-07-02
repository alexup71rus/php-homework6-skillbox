<?php
require_once "logins.php";
require_once "passwords.php";
require_once "./route/alerts.php";

if ($_COOKIE['PHPSESSID']) {setcookie("PHPSESSID", $_COOKIE['PHPSESSID'], time() + (86400), "/");}
if ($_COOKIE['login']) {setcookie("login", $_COOKIE['login'], time() + (86400 * 30), "/");}
if (isset($_POST["sign-in"])) {
    $index = array_search($_POST['login'], $logins);
    if ($index !== false && $passwords[$index] == $_POST['password']) {
        setcookie("login", $_POST['login'], time() + (86400 * 30), "/");
        $_SESSION['auth'] = "true";
        addAlerts(["success"]);
    } else {
        addAlerts(["error"]);
    }
} elseif (isset($_GET['sign-out'])) {
    unset($_SESSION['auth']);
}

?>