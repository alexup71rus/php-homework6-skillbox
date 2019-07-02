<?php
/**
 * Функция для вывода
 * @Param Принимает массив с информацией о динамической странице
 */
function newMain($pageDynamicInfo)
{
    ?>
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
            <?
            if ($pageDynamicInfo) {
                require_once "./template/page.php";
                newPage($pageDynamicInfo['title'], $pageDynamicInfo['path']);
            } else {
                require_once "./template/404.php";
                new404();
            }
            ?>
            <?
            require_once "./template/right-column.php";
            newRightColumn();
            ?>
        </tr>
    </table>
    <?
}
?>