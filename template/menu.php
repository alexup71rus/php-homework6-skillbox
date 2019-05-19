<?
/**
 * Функция для вывода меню
 * @зaram массив меню
 * @зaram дополнительный класс при необходимости
 * @зaram 
 */
function showMenu(array $mainMenuItems, int $sortType, string $className = "")
{
    $mainMenuItems = Helper\arraySortByKey($mainMenuItems, "sort", $sortType); // фильтрация
    ?><ul class="main-menu <?=$className?>">
        <?foreach ($mainMenuItems as $item): ?>
            <li><a href="<?=$item['path']?>" title="<?=$item['title']?>"><?= Helper\limiter($item['title'], 0, 15)?></a></li>
        <? endforeach;?>
    </ul><?
}