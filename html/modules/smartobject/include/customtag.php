<?php

/**
* $Id: customtag.php,v 1.1 2012/03/31 09:52:15 ohwada Exp $
* Module: SmartRental
* Author: The SmartFactory <www.smartfactory.ca>
* Licence: GNU
*/
if (!defined("XOOPS_ROOT_PATH")) {
	die("XOOPS root path not defined");
}

function smart_customtag_initiate() {
	global $xoopsTpl, $smartobject_customtag_handler;
	if (is_object($xoopsTpl)) {
		foreach($smartobject_customtag_handler->objects as $k=>$v) {
			$xoopsTpl->assign($k, $v->render());
		}
	}
}

if (!defined('SMARTOBJECT_URL')) {
	include_once(XOOPS_ROOT_PATH . '/modules/smartobject/include/common.php');
}

smart_loadLanguageFile('smartobject', 'customtag');

include_once XOOPS_ROOT_PATH."/modules/smartobject/include/functions.php";
include_once(SMARTOBJECT_ROOT_PATH . "class/customtag.php");

$smartobject_customtag_handler = xoops_getModuleHandler('customtag', 'smartobject');
$smartobject_customTagsObj = $smartobject_customtag_handler->getCustomtagsByName();
?>