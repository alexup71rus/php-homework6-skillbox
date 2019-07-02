<?
/**
 * Функция для вывода меню
 * @зaram массив меню
 */
function newMenu(array $mainMenuItems)
{
    ?>
    <div class="clear">
        <ul class="main-menu">
            <? foreach ($mainMenuItems as $item): ?>
                <li><a href="<?=$item['path']?>" title="<?=$item['title']?>"><?= Helper\limiter($item['title'], 0, 15)?></a></li>
            <? endforeach;?>
        </ul>
    </div>
    <?
}