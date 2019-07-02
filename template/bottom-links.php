<?
/*
 * Функция для вывода меню
 * @зaram массив меню
 * @зaram дополнительный класс при необходимости
 * @зaram добавить дополнительные классы к блоку меню
 */
function newMenuLinks(array $menuItems, array $classes = [])
{
    ?>
    <div class="clear">
        <ul class="menu-links <?=implode(" ", $classes)?>">
            <?foreach ($menuItems as $item): ?>
                <? if ($item['for_authorized_user'] == $_SESSION['auth']): ?>
                    <li><a href="<?=$item['path']?>" title="<?=$item['title']?>"><?=Helper\limiter($item['title'], 0, 20)?></a></li>
                <? endif; ?>
            <? endforeach;?>
        </ul>
    </div>
    <?
}