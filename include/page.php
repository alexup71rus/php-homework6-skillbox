<?php
require_once "./route/sitemap.php";
/*
 * Роутинг страниц. Функция служит для отображения страницы с конкретным названием и содержимым
 * @param карта сайта
 * @return возвращает страницу в виде строки
 */
function generatePage()
{
    $map = $GLOBALS['sitemap'];
    $request_uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    $uri = trim($request_uri, "/");
    if ($map[$uri]) {
        return $map[$uri];
    } else {
        header('HTTP/1.1 404 Not Found');
    }
}
?>