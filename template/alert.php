<?php
/*
 * Шаблон сообщения
 * @зaram текст уведомления
 */
function newAlert(string $textAlert)
{
    ?>
    <div class="alert">
        <div class="alert_bg" onclick="this.nextSibling.nextSibling.classList.toggle('shake')"></div>
        <div class="alert_window" onclick="this.parentNode.remove()">
            <span class="alert_window__container-text"><?=$textAlert?></span>
        </div>
    </div>
    <?
}
?>