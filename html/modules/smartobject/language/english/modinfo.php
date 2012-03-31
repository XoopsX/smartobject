<?php
// 2008-10-01 K.OHWADA
// BUG: undefined constant _AM_SOBJECT_ABOUT in file admin/menu.php in "Modules Administration"
// http://community.impresscms.org/modules/newbb/viewtopic.php?topic_id=2506

/**
* $Id: modinfo.php,v 1.2 2012/03/31 10:17:45 ohwada Exp $
* Module: SmartContent
* Author: The SmartFactory <www.smartfactory.ca>
* Licence: GNU
*/

if (!defined("XOOPS_ROOT_PATH")) {
 	die("XOOPS root path not defined");
}

define('_MI_SOBJECT_INDEX', 'Index');
define('_MI_SOBJECT_SENT_LINKS', 'Links');
define('_MI_SOBJECT_TAGS', 'Custom tags');
define('_MI_SOBJECT_ADSENSES', 'Adsense ads');
define('_MI_SOBJECT_RATINGS', 'Ratings');
define('_MI_SOBJECT_CURRENCIES', 'Currencies');

define('_MI_SOBJECT_CURRMAN', 'Enable currency management');
define('_MI_SOBJECT_CURRMANDSC', '');

define('_MI_SOBJECT_ADDTO_TITLE', 'AddTo Social bookmarking block');
define('_MI_SOBJECT_ADDTO_DESC', '');

define('_MI_SOBJECT_ADMFOOTER', 'Enabling admin footer for SmartModules');
define('_MI_SOBJECT_ADMFOOTERDSC', 'By default SmartModules displays a footer in administrative pages to link on professionnal services available for this module. You can turn off the display of this footer here.');

// -----
// BUG: undefined constant _AM_SOBJECT_ABOUT in file admin/menu.php in "Modules Administration"
define('_MI_SOBJECT_ABOUT', 'About');
// -----

?>