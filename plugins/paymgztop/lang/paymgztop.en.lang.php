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
$L['cfg_cost'] = array('Cost of day', '');

$L['paymgztop_buy_title'] = (isset($L['paymgztop_buy_title'])) ? $L['paymgztop_buy_title'] : 'Activate Top-project';
$L['paymgztop_buy_paydesc'] = (isset($L['paymgztop_buy_paydesc'])) ? $L['paymgztop_buy_paydesc'] : 'Top-project';
$L['paymgztop_costofday'] = (isset($L['paymgztop_costofday'])) ? $L['paymgztop_costofday'] : 'Cost of day';
$L['paymgztop_error_days'] = (isset($L['paymgztop_error_days'])) ? $L['paymgztop_error_days'] : 'Period';

$L['paymgztop_buy'] = (isset($L['paymgztop_buy'])) ? $L['paymgztop_buy'] : 'Buy';
$L['paymgztop_day'] = (isset($L['paymgztop_day'])) ? $L['paymgztop_day'] : 'day';

$L['paymgztop_buy_prodlit'] = (isset($L['paymgztop_buy_prodlit'])) ? $L['paymgztop_buy_prodlit'] : "Top by %1\$s. <a href=\"%2\$s\">Extend</a>";

?>