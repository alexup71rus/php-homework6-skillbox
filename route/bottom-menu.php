<?php
$linksMenuItems = [
    [
        "title" => "Политика конфиденциальнсоти",
        "path" => "/Политика_конфиденциальнсоти",
        "for_authorized_user" => false,
        "sort" => 1,
    ],
    [
        "title" => "Настройки",
        "path" => "./?settings=yes",
        "for_authorized_user" => true,
        "sort" => 3,
    ],
    [
        "title" => "Выйти",
        "path" => "./?sign-out",
        "for_authorized_user" => true,
        "sort" => 2,
    ],
    [
        "title" => "Регистрация",
        "path" => "./?register=yes",
        "for_authorized_user" => false,
        "sort" => 5,
    ],
    [
        "title" => "Авторизация",
        "path" => "./?login=yes",
        "for_authorized_user" => false,
        "sort" => 4,
    ],
];