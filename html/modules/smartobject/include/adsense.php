<?php

/**
* $Id: adsense.php,v 1.1 2012/03/31 09:52:15 ohwada Exp $
* Module: SmartRental
* Author: The SmartFactory <www.smartfactory.ca>
* Licence: GNU
*/
if (!defined("XOOPS_ROOT_PATH")) {
	die("XOOPS root path not defined");
}

function smart_adsense_initiate_smartytags() {
	global $xoopsTpl, $smartobject_adsense_handler;
	if (is_object($xoopsTpl)) {
		foreach($smartobject_adsense_handler->objects as $k=>$v) {
			$xoopsTpl->assign('adsense_' . $k, $v->render());
		}
	}
}

if (!defined('SMARTOBJECT_URL')) {
	include_once(XOOPS_ROOT_PATH . '/modules/smartobject/include/common.php');
}

include_once XOOPS_ROOT_PATH."/modules/smartobject/include/functions.php";
include_once(SMARTOBJECT_ROOT_PATH . "class/adsense.php");

$smartobject_adsense_handler = xoops_getModuleHandler('adsense', 'smartobject');
$smartobject_adsensesObj = $smartobject_adsense_handler->getAdsensesByTag();

?>