<?php

/**
 * [BEGIN_COT_EXT]
 * Hooks=projects.addofferform.main
 * [END_COT_EXT]
 */
defined('COT_CODE') or die('Wrong URL.');

require_once cot_incfile('payacc', 'plug');

if (!cot_getuseracc() && $item['item_userid'] != $usr['id'] && !$usr['isadmin'])
{
	if ($cfg['plugin']['payacc']['offerslimit'] > 0)
	{
		$countoffersofuser = cot_getcountoffersofuser($usr['id']);
		if ($countoffersofuser >= $cfg['plugin']['payacc']['offerslimit'])
		{
			$addoffer_enabled = false;
			$t_o->parse("MAIN.OFFERSLIMITEMPTY");
		}
	}
	
	if($item['item_foracc'])
	{
		$addoffer_enabled = false;
		$t_o->parse("MAIN.PROJECTFORACC");
	}
}
