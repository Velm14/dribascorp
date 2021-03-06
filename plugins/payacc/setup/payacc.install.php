<?php
/**
 * Created by PhpStorm.
 * User: Velm
 * Date: 14.03.2015
 * Time: 10:20
 */
/**
 * Installation handler
 *
 * @package paypro
 * @version 1.0.2
 * @author CMSWorks Team
 * @copyright Copyright (c) CMSWorks.ru, littledev.ru
 * @license BSD
 */

defined('COT_CODE') or die('Wrong URL');

global $db_users, $db_projects;

require_once cot_incfile('projects', 'module');
require_once cot_incfile('extrafields');

// Add field if missing
if (!$db->fieldExists($db_users, "user_acc"))
{
    $dbres = $db->query("ALTER TABLE `$db_users` ADD COLUMN `user_acc` int(10) NOT NULL");
}

cot_extrafield_add($db_projects, 'foracc', 'checkbox', $R['input_checkbox'],'','','','', '','');