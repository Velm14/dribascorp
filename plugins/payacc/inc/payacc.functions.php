<?php

/**
 * PayAcc plugin
 *
 * @package payacc
 * @version 1.0
 * @author CMSWorks Team
 * @copyright Copyright (c) CMSWorks.ru, littledev.ru
 * @license BSD
 */
defined('COT_CODE') or die('Wrong URL');

// Requirements
require_once cot_langfile('payacc', 'plug');
require_once cot_incfile('payments', 'module');

// Global variables
global $db_users_acc, $db_x;
$db_users_acc = (isset($db_users_acc)) ? $db_users_acc : $db_x . 'users_acc';

function cot_getuseracc($user = '')
{
    global $db, $db_users, $sys, $usr;

    if(empty($user) && $usr['accfile']['user_acc'] > 0)
    {
        $uacc = $usr['accfile']['user_acc'];
        $userid = $usr['id'];
    }
    elseif(!empty($user) && !is_array($user))
    {
        $uacc = $db->query("SELECT user_acc FROM $db_users WHERE user_id=".$user)->fetchColumn();
        $userid = $user;
    }
    elseif(is_array($user))
    {
        $uacc = $user['user_acc'];
        $userid = $user['user_id'];
    }

    if($uacc > $sys['now'])
    {
        return $uacc;
    }
    elseif($uacc > 0)
    {
        $db->update($db_users, array('user_acc' => 0), "user_id=".$userid);
    }
    return false;
}

//
//function cot_getcountprjofuser($userid)
//{
//    global $sys, $db, $db_accjects;
//
//    list($year, $month, $day) = explode('-', @date('Y-m-d', $sys['now_offset']));
//    $currentday = cot_mktime(0, 0, 0, $month, $day, $year);
//
//    $count = $db->query("SELECT COUNT(*) FROM $db_accjects WHERE item_userid=" . $userid . " AND item_date<" . $sys['now'] . " AND item_date>" . $currentday . "")->fetchColumn();
//
//    return $count;
//}

//function cot_getcountoffersofuser($userid)
//{
//    global $sys, $db, $db_accjects_offers;
//
//    list($year, $month, $day) = explode('-', @date('Y-m-d', $sys['now_offset']));
//    $currentday = cot_mktime(0, 0, 0, $month, $day, $year);
//
//    $sql = $db->query("SELECT COUNT(*) as count FROM $db_accjects_offers WHERE item_userid=" . $userid . " AND item_date<" . $sys['now_offset'] . " AND item_date>" . $currentday . "");
//    $count = $sql->fetchColumn();
//
//    return $count;
//}

?>