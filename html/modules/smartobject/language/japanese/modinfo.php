<?php
// $Id: modinfo.php,v 1.2 2012/03/31 10:52:09 ohwada Exp $

// 2008-10-01 K.OHWADA
// BUG : undefined constant _AM_SOBJECT_ABOUT in file admin/menu.php in "Modules Administration"

//=========================================================
// Japanese language for SmartObject Module
// 2008-10-01 K.OHWADA <http://linux.ohwada.jp/>
// 有朋自遠方来
//=========================================================

/**
* Module: SmartContent
* Author: The SmartFactory <www.smartfactory.ca>
* Licence: GNU
*/

if (!defined("XOOPS_ROOT_PATH")) {
 	die("XOOPS root path not defined");
}

define('_MI_SOBJECT_INDEX', '目次');
define('_MI_SOBJECT_SENT_LINKS', 'リンク');
define('_MI_SOBJECT_TAGS', 'カスタム・タグ');
define('_MI_SOBJECT_ADSENSES', 'アドセンス');
define('_MI_SOBJECT_RATINGS', '評価');
define('_MI_SOBJECT_CURRENCIES', '通貨');

define('_MI_SOBJECT_CURRMAN', '通貨管理を有効にする');
define('_MI_SOBJECT_CURRMANDSC', '');

define('_MI_SOBJECT_ADDTO_TITLE', 'ソーシャル・ブックマーク・ブロックに追加する');
define('_MI_SOBJECT_ADDTO_DESC', '');

define('_MI_SOBJECT_ADMFOOTER', 'SmartModules の管理者フッターを有効にする');
define('_MI_SOBJECT_ADMFOOTERDSC', 'デフォルトでは、SmartModules は管理者ページに専門的なサービスに対
するリンクを示すフッターを表示する。貴方はこのリンクを表示しないようにできます。');

// -----
// BUG : undefined constant _AM_SOBJECT_ABOUT in file admin/menu.php in "Modules Administration"
define('_MI_SOBJECT_ABOUT', 'このモジュールについて');
// -----

?>