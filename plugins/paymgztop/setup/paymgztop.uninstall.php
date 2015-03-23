<?php
/**
 * Uninstallation handler
 *
 * @package paymgztop
 * @version 1.0.0
 * @author CMSWorks Team
 * @copyright Copyright (c) CMSWorks.ru, littledev.ru
 * @license BSD
 */

defined('COT_CODE') or die('Wrong URL');

require_once cot_incfile('market', 'module');

global $db_market;

// Remove column from table
if ($db->fieldExists($db_market, "item_top"))
{
	$db->query("ALTER TABLE `$db_market` DROP COLUMN `item_top`");
}

?>