<?php
/**
 * Payacc plugin
 *
 * @package payrpo
 * @version 1.0
 * @author CMSWorks Team
 * @copyright Copyright (c) CMSWorks.ru, littledev.ru
 * @license BSD
 */

defined('COT_CODE') or die('Wrong URL.');

/**
 * Module Config
 */
$L['cfg_cost'] = array('Cosr per month', '');
$L['cfg_offerslimit'] = array('Offers limit count for simple users', '');
$L['cfg_accjectslimit'] = array('Projects limit count for simple users', '');

$L['payacc_foracc'] = 'Only for ACC';

$L['payacc_buyacc_title'] = 'Buy Pro-account';
$L['payacc_buyacc_paydesc'] = 'Buy Pro-account';
$L['payacc_costofmonth'] = 'Cost per month';
$L['payacc_error_months'] = 'Specify the time';

$L['payacc_buy'] = 'Buy';
$L['payacc_month'] = 'month';

$L['payacc_header_buy'] = 'Buy ACC';
$L['payacc_header_expire'] = 'ACC is available to';
$L['payacc_header_expire_short'] = 'ACC to';
$L['payacc_header_extend'] = 'Extend';

$L['payacc_warning_accjectslimit_empty'] = 'You can no longer publish accjects. Maximum number of accjects for the publication is: '.$cfg['plugin']['payacc']['accjectslimit'].' night. To remove this restriction, use ACC-service account.';
$L['payacc_warning_offerslimit_empty'] = 'You can no longer post accject accposals. The maximum number of responses to the accjects is: '.$cfg['plugin']['payacc']['offerslimit'].' night. To remove this restriction, use ACC-service account.';
$L['payacc_warning_onlyforacc'] = 'You can not leave suggestions for this accject, as it is only available for users with ACC-account. To remove this restriction, use ACC-service account.';

$L['payacc_error_username'] = 'Login empty';
$L['payacc_custom_error_userempty'] = 'User not found';
$L['payacc_error_monthsempty'] = 'Months is empty';
$L['payacc_addaccacc'] = 'Adding ACC-accaout for user';

$L['payacc_giftacc'] = 'Gift ACC';
$L['payacc_giftfor'] = 'Gift for user';
$L['payacc_giftacc_paydesc'] = 'Buying ACC to gift for ';
$L['payacc_error_user'] = 'User not found to gift ACC';
