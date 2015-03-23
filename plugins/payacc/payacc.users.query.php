<?php

/**
 * [BEGIN_COT_EXT]
 * Hooks=users.query
 * Order=1
 * [END_COT_EXT]
 */
/**
 * PayAcc plugin
 *
 * @package payacc
 * @version 1.0
 * @author CMSWorks Team
 * @copyright Copyright (c) CMSWorks.ru, littledev.ru
 * @license BSD
 */
defined('COT_CODE') or die('Wrong URL.');

require_once cot_incfile('payacc', 'plug');

$join_columns .= ', (user_acc > 0) as isacc';
$sqlorder = "isacc DESC";

?>