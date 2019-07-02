<?php
require_once "./template/alert.php";
$GLOBALS["alerts_store"] = [];
/*
 * Эта функция предназначена для создания единого глобального массива со всеми уведомлениями, которые нужно показать за раз. 
 * @param массив из уведомлений
 * @param массив со всеми возможными 
 * @return void
 */
function addAlerts(array $arr)
{
    $GLOBALS["alerts_store"] = array_merge($GLOBALS["alerts_store"], $arr);
}
/*
 * Функция
 */
function showAlerts()
{
    if ($GLOBALS["alerts_store"]) {
        foreach ($GLOBALS["alerts_store"] as $item)
        {
            if ($res = $GLOBALS['array_alerts'][$item]) {
                newAlert(file_get_contents($res));
            }
        }
    }
}
?>