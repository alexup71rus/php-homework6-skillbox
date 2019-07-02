<?php
/**
 * Функция для вывода
 */
function newPage(string $title, string $path)
{
    ?>
    <td class="left-collum-index">
        <h1><?=$title?></h1>
        <p><?=$path?></p>
    </td>
    <?
}
?>