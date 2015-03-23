<?php
/**
 * Paymgztop plugin
 *
 * @package paymgztop
 * @version 1.0
 * @author CMSWorks Team
 * @copyright Copyright (c) CMSWorks.ru, littledev.ru
 * @license BSD
 */

defined('COT_CODE') or die('Wrong URL.');

/**
 * Module Config
 */
$L['cfg_cost'] = array('Стоимость за день размещения', '');

$L['paymgztop_buy_title'] = (isset($L['paymgztop_buy_title'])) ? $L['paymgztop_buy_title'] : 'Закрепить проект';
$L['paymgztop_buy_paydesc'] = (isset($L['paymgztop_buy_paydesc'])) ? $L['paymgztop_buy_paydesc'] : 'Услуга "Закрепленный проект"';
$L['paymgztop_costofday'] = (isset($L['paymgztop_costofday'])) ? $L['paymgztop_costofday'] : 'Стоимость за день';
$L['paymgztop_error_days'] = (isset($L['paymgztop_error_days'])) ? $L['paymgztop_error_days'] : 'Укажите срок действия услуги';

$L['paymgztop_buy'] = (isset($L['paymgztop_buy'])) ? $L['paymgztop_buy'] : 'Купить';
$L['paymgztop_day'] = (isset($L['paymgztop_day'])) ? $L['paymgztop_day'] : 'день';

$L['paymgztop_buy_prodlit'] = (isset($L['paymgztop_buy_prodlit'])) ? $L['paymgztop_buy_prodlit'] : "Закреплен до %1\$s. <a href=\"%2\$s\">Продлить</a>";

?>