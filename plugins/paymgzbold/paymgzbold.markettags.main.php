<?php
/**
 * [BEGIN_COT_EXT]
 * Hooks=markettags.main
 * [END_COT_EXT]
 */

defined('COT_CODE') or die('Wrong URL.');

require_once cot_incfile('paymgzbold', 'plug');

if($item_data['item_bold'] > $sys['now'])
{
	$temp_array['PAYBOLD'] = sprintf($L['paymgzbold_buy_prodlit'], date('d.m.Y H:i',$item_data['item_bold']), cot_url('plug', 'e=paymgzbold&id='.$item_data['item_id']));
	$temp_array['BOLD'] = $item_data['item_top'];
	$temp_array['ISBOLD'] = 1;
}
else
{
	if($item_data['item_bold'] > 0)
	{
		$db->query("UPDATE $db_market SET item_bold=0 WHERE item_id=".$item_data['item_id']);
	}
	
	$temp_array['PAYBOLD'] = cot_rc_link(cot_url('plug', 'e=paymgzbold&id='.$item_data['item_id']), $L['paymgzbold_buy_title']);
	$temp_array['BOLD'] = 0;
	$temp_array['ISBOLD'] = 0;
}
	
?>