<?php

/* ====================
  [BEGIN_COT_EXT]
 * Hooks=standalone
  [END_COT_EXT]
  ==================== */

defined('COT_CODE') && defined('COT_PLUG') or die('Wrong URL');

require_once cot_incfile('payacc', 'plug');

list($auth_read, $auth_write, $auth_admin) = cot_auth('plug', 'payacc');
cot_block($auth_write);

$id = cot_import('id', 'G', 'INT');

if ($a == 'buy')
{
	$months = cot_import('months', 'P', 'INT');
	
	cot_check(empty($months), 'payacc_error_months');
	
	if(!empty($id) && $usr['id'] != $id)
	{
		$user = $db->query("SELECT * FROM $db_users WHERE user_id = ? LIMIT 1", array($id))->fetch();
		cot_check(empty($user), 'payacc_error_user');
	}
	
	if (!cot_error_found())
	{

		$summ = $months * $cfg['plugin']['payacc']['blacost'];
		$options['time'] = $months * 30 * 24 * 60 * 60;
		$options['desc'] = (!empty($id)) ? $L['payacc_giftacc_paydesc'] . $user['user_name'] : $L['payacc_buyacc_paydesc'];
		$options['code'] = (!empty($id) && $usr['id'] != $id) ? $id : $usr['id'];
		
		cot_payments_create_order('acc', $summ, $options);
	}
}

$t = new XTemplate(cot_tplfile('payacc', 'plug'));

cot_display_messages($t);

$t->assign(array(
	'ACC_FORM_ACTION' => cot_url('plug', 'e=payacc&a=buy&id=' . $id),
	'ACC_FORM_PERIOD' => cot_selectbox('', 'months', range(1, 12), range(1, 12), false),
));

if(!empty($id))
{
	$t->assign(cot_generate_usertags($id, 'ACC_FORM_USER_'));
}

?>