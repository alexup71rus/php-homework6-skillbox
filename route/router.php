<?
$GLOBALS['sitemap'] = [
    ""=>[
        "title" => "Home",
        "path" => "/route/home/",
        "sort" => "",
    ],
    "route/home"=>[
        "title" => "Home",
        "path" => "/route/home/",
        "sort" => "",
    ],
    "route/about"=>[
        "title" => "About",
        "path" => "/route/about/",
        "sort" => "",
    ],
    "route/contacts"=>[
        "title" => "Contacts",
        "path" => "/route/contacts/",
        "sort" => "",
    ],
    "route/news"=>[
        "title" => "News",
        "path" => "/route/news/",
        "sort" => "",
    ],
    "route/catalog"=>[
        "title" => "Catalog",
        "path" => "/route/catalog/",
        "sort" => "",
    ],
];

/*
* Роутинг страниц
* @param карта сайта
* @return возвращает страницу в виде строки
*/
function route()
{
    $map = $GLOBALS['sitemap'];
    $request_uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    $uri = trim($request_uri, "/");
    if ($map[$uri]) {
        return "<td class=\"left-collum-index\">
            <h1>".$map[$uri]['title']."</h1>
            <p>".$map[$uri]['path']."</p>
        </td>";
    } else {
        header('HTTP/1.1 404 Not Found');
        return Helper\requireToVar($_SERVER['DOCUMENT_ROOT']."/route/404.php");
    }
}