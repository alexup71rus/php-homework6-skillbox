<?php
session_start();
require_once "./include/helpers.php"; // Функции помощники
require_once "./include/alerts.php"; // Система уведомлений
require_once "./include/check-login.php"; // Проверка авторизации
require_once "./include/page.php";
$pageDynamicInfo = generatePage($sitemap); // генерирую динамику страницы

require_once "./route/main-menu.php";
require_once "./route/bottom-menu.php";

require_once "./template/header.php";
require_once "./template/head.php";
require_once "./template/menu.php";
require_once "./template/main-page.php";
require_once "./template/bottom-links.php";
require_once "./template/footer.php";

newHeader();
newHead();
showAlerts();
newMenu(Helper\arraySortByKey($mainMenuItems, "sort", SORT_ASC));
newMain($pageDynamicInfo);
newMenuLinks(Helper\arraySortByKey($linksMenuItems, "sort", SORT_ASC), ["bottom-links"]);
newFooter();
?>