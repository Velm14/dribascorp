<?php
/* ====================
[BEGIN_COT_EXT]
Hooks=module
[END_COT_EXT]
==================== */

/**
 * Home page main code
 *
 * @package index
 * @version 0.9.1
 * @author Cotonti Team
 * @copyright Copyright (c) Cotonti Team 2008-2014
 * @license BSD
 */

defined('COT_CODE') or die('Wrong URL.');

// Environment
define('COT_INDEX', true);
$env['location'] = 'home';

/* === Hook === */
foreach (cot_getextplugins('index.first') as $pl)
{
	include $pl;
}
/* ===== */
list($usr['auth_read'], $usr['auth_write'], $usr['isadmin']) = cot_auth('index', 'a');
cot_block($usr['auth_read']);

/* === Hook === */
foreach (cot_getextplugins('index.main') as $pl)
{
	include $pl;
}
/* ===== */

if ($_SERVER['REQUEST_URI'] == COT_SITE_URI . 'index.php')
{
	$sys['canonical_url'] = COT_ABSOLUTE_URL;
}

require_once $cfg['system_dir'].'/header.php';

$t = new XTemplate(cot_tplfile('index'));

/* === Hook === */
foreach (cot_getextplugins('index.tags') as $pl)
{
	include $pl;
}
/* ===== */
//CVarDumper::dump($t,6,1);
//var_dump($usr);
// check if user authorized
if(isset($usr['profile']) && !$_GET['tpl']){
    $t->parse('MAIN');
    $t->out('MAIN');
}
else{
    //Подключаем страничку входа для не авторизированых пользователей
    $tt = new XTemplate(cot_tplfile('index.greet', 'module'));
    $tt->parse('MAIN_GUEST');
    $tt->out('MAIN_GUEST');
}
require_once $cfg['system_dir'].'/footer.php';

if ($cache && $usr['id'] === 0 && $cfg['cache_index'])
{
	$cache->page->write();
}
