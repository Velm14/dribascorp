<?php
/* ====================
[BEGIN_COT_EXT]
Hooks=recentitems.recentpages.first
[END_COT_EXT]
==================== */

/**
 * Joins into the main recentitems query
 *
 * @package comments
 * @version 0.9.1
 * @author Cotonti Team
 * @copyright Copyright (c) Cotonti Team 2008-2014
 * @license BSD
 */

defined('COT_CODE') or die('Wrong URL');

global $db_com;

require_once cot_incfile('comments', 'plug');

$join_columns .= ", (SELECT COUNT(*) FROM `$db_com` WHERE com_area = 'page' AND com_code = p.page_id) AS com_count";
