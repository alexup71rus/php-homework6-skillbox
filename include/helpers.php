<?php
namespace Helper;

/*
* Буферизация php файла
* @param путь к подключаемому файлу
* @param переменные для шаблона
* @return возвращает содержимое файла в формате string
*/
function requireTemplate(string $file, array $args): string {
    ob_start();
    require($file);
    return ob_get_clean();
}

/*
* Обрезает текст оставляя в конце троеточие
* @param текстовое содержимое, которое нужно обрезать
* @param стартовая позиция
* @param конечная позиция
* @return возвращает обрезанную строку
*/
function limiter(string $text, int $start, int $end): string {
    return mb_strlen($text) <= $end ? $text : mb_substr($text, $start, $end-3)."...";
}

/*
* Сортирует массив по ключу
* @param массив
* @param ключ по которому будет производиться сортировка
* @param тип сортировки
* @return возвращает обрезанную строку
*/
function arraySortByKey(array $array, $key = 'sort', int $sort = SORT_ASC) {
    usort($array, function($a, $b) use ($key, $sort) {
        if ($sort === SORT_ASC) {
            return $a[$key] <=> $b[$key];
        } elseif ($sort === SORT_DESC) {
            return $a[$key] < $b[$key] ? 1 : -1;
        }
    });
    return $array;
}