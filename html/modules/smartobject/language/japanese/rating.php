<?php
// $Id: rating.php,v 1.2 2012/03/31 10:52:09 ohwada Exp $

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

define('_SOBJECT_RATING_RATE', 'これを評価する！');
define('_SOBJECT_RATING_DUPLICATE_ENTRY', '申し訳ない！ 貴方はすでにこれを評価しています！ 貴方は２回評価することは出来ません。');
define('_SOBJECT_RATING_ERROR', 'エラーが発生したので、貴方の評価を保存できなかった。');
define('_SOBJECT_RATING_SUCCESS', '貴方の評価を保存した。ご協力に感謝します！');
define('_SOBJECT_RATING_RATE_THIS', '役に立ちました？ (１は <i>役に立たない</i> ５は <i>大変役に立った</i>)');
define('_SOBJECT_RATING_ALREADY_RATED', '貴方の評価: ');
define('_SOBJECT_RATING_VOTERS_TOTAL', '投票者の合計: ');
define('_SOBJECT_RATING_AVERAGE', '平均: ');
?>