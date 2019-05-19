<?php
session_start();
require_once $_SERVER['DOCEMENT_ROOT']."./helpers.php";
if ($_POST) {
    require_once $_SERVER['DOCEMENT_ROOT']."/include/logins.php";
    require_once $_SERVER['DOCEMENT_ROOT']."/include/passwords.php";

    if (array_search($_POST['login'], $logins) && array_search($_POST['password'], $passwords)){
        $_SESSION['auth'] = "true|msg";
        header("Location: /");
    } else {
        $_SESSION['auth'] = "false|msg";
    }
}

require_once $_SERVER['DOCUMENT_ROOT']."/route/main_menu.php";
require_once $_SERVER['DOCUMENT_ROOT']."/route/router.php";
$page = route();
require_once $_SERVER['DOCUMENT_ROOT']."/template/header.php";
require_once $_SERVER['DOCUMENT_ROOT']."/template/menu.php";

?>
<body>
    <?
    if ($_SESSION['auth'] == "false|msg") {
        $_SESSION['auth'] = "false";
        ?>
        <script>
            alert("<?php require_once $_SERVER['DOCEMENT_ROOT']."/include/error.php"?>");
        </script>
        <?
    } elseif ($_SESSION['auth'] == "true|msg" && $_SERVER['REQUEST_URI'] === "/") {
        $_SESSION['auth'] = "true";
        ?>
        <script>
            alert("<?php require_once $_SERVER['DOCEMENT_ROOT']."/include/success.php"?>");
        </script>
        <?
    }
    ?>

    <div class="header">
    	<div class="logo"><img src="/i/logo.png" width="68" height="23" alt="Project"></div>
        <div class="clearfix"></div>
    </div>

    <div class="clear">
        <?showMenu($mainMenuItems, SORT_ASC)?>
    </div>

	<table width="100%" border="0" cellspacing="0" cellpadding="0">
    	<tr>
            <?=$page?>
            <?php if ($_GET['login'] === "yes"): ?>
                <td class="right-collum-index">
                    
                    <div class="project-folders-menu">
                        <ul class="project-folders-v">
                            <li class="project-folders-v-active"><a href="#">Авторизация</a></li>
                            <li><a href="#">Регистрация</a></li>
                            <li><a href="#">Забыли пароль?</a></li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    
                    <div class="index-auth">
                        <form action="" method="post">
                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                <tr>
                                    <td class="iat">
                                        <label for="login_id">Ваш e-mail:</label>
                                        <input id="login_id" size="30" name="login" value="<?=isset($_POST['login'])?strip_tags($_POST['login']):''?>" >
                                    </td>
                                </tr>
                                <tr>
                                    <td class="iat">
                                        <label for="password_id">Ваш пароль:</label>
                                        <input id="password_id" size="30" name="password" type="password" value="<?=isset($_POST['password'])?strip_tags($_POST['password']):''?>">
                                    </td>
                                </tr>
                                <tr>
                                    <td><input type="submit" value="Войти"></td>
                                </tr>
                            </table>
                        </form>
                    </div>
                
                </td>
            <?php endif; ?>
        </tr>
    </table>
    
    <div class="clearfix">
        <?showMenu($mainMenuItems, SORT_ASC, "bottom")?>
    </div>

    <div class="footer">&copy;&nbsp;<nobr>2018</nobr> Project.</div>

<?
require_once $_SERVER['DOCUMENT_ROOT']."/template/footer.php";
?>