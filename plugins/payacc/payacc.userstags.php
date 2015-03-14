<?php

/**
 * [BEGIN_COT_EXT]
 * Hooks=usertags.main
 * [END_COT_EXT]
 */
/**
 * PayPro plugin
 *
 * @package payacc
 * @version 1.0
 * @author CMSWorks Team
 * @copyright Copyright (c) CMSWorks.ru, littledev.ru
 * @license BSD
 */
defined('COT_CODE') or die('Wrong URL.');

require_once cot_incfile('payacc', 'plug');

$temp_array['ISACC'] = (!empty($user_data)) ? cot_getuseracc($user_data) : false;