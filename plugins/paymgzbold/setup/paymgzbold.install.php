<?php
/**
 * Installation handler
 *
 * @package payprjbold
 * @version 1.0.0
 * @author CMSWorks Team
 * @copyright Copyright (c) CMSWorks.ru, littledev.ru
 * @license BSD
 */

defined('COT_CODE') or die('Wrong URL');

require_once cot_incfile('market', 'module');

global $db_market;

// Add field if missing
if (!$db->fieldExists($db_market, "item_bold"))
{
	$dbres = $db->query("ALTER TABLE `$db_market` ADD COLUMN `item_bold` int(10) NOT NULL");
}

?>