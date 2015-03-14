<?php
/**
 * Payacc plugin
 *
 * @package payacc
 * @version 1.0
 * @author CMSWorks Team
 * @copyright Copyright (c) CMSWorks.ru, littledev.ru
 * @license BSD
 */

defined('COT_CODE') or die('Wrong URL.');

/**
 * Module Config
 */
$L['cfg_cost'] = array('Стоимость в месяц', '');
$L['cfg_offerslimit'] = array('Лимит ответов на проекты для обычных пользователей', '');
$L['cfg_accjectslimit'] = array('Лимит проектов для обычных пользователей', '');

$L['payacc_foracc'] = 'Только для ACC';

$L['payacc_buyacc_title'] = 'Покупка ACC';
$L['payacc_buyacc_paydesc'] = 'Покупка ACC';
$L['payacc_costofmonth'] = 'Стоимость за месяц';
$L['payacc_error_months'] = 'Укажите срок действия услуги';

$L['payacc_buy'] = 'Купить';
$L['payacc_month'] = 'месяц';

$L['payacc_header_buy'] = 'Купить ACC';
$L['payacc_header_expire'] = 'ACC действует до';
$L['payacc_header_expire_short'] = 'ACC до';
$L['payacc_header_extend'] = 'Продлить услугу';

$L['payacc_warning_accjectslimit_empty'] = 'Вы больше не можете публиковать проекты. Максимальное число проектов для публикации составляет: '.$cfg['plugin']['payacc']['accjectslimit'].' в сутки. Чтобы снять это ограничение, воспользуйтесь услугой ACC-аккаунт.';
$L['payacc_warning_offerslimit_empty'] = 'Вы больше не можете оставлять предложения по проектам. Максимальное число откликов на проекты составляет: '.$cfg['plugin']['payacc']['offerslimit'].' в сутки. Чтобы снять это ограничение, воспользуйтесь услугой ACC-аккаунт.';
$L['payacc_warning_onlyforacc'] = 'Вы не можете оставлять предложения по данному проекту, так как он доступен только для пользователей с ACC-аккаунтом. Чтобы снять это ограничение, воспользуйтесь услугой ACC-аккаунт.';

$L['payacc_error_username'] = 'Не указан логин пользователя';
$L['payacc_error_userempty'] = 'Такого пользователя не существует';
$L['payacc_error_monthsempty'] = 'Срок действия услуги не указан';
$L['payacc_addaccacc'] = 'Добавление ACC-аккаунта для пользователя';

$L['payacc_giftacc'] = 'Подарить ACC-аккаунт';
$L['payacc_giftfor'] = 'Подарить пользователю';
$L['payacc_giftacc_paydesc'] = 'Покупка ACC в подарок для ';
$L['payacc_error_user'] = 'Пользователь не найден';
