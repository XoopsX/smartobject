<?php
// $Id: modinfo.php,v 1.2 2012/03/31 10:52:09 ohwada Exp $

// 2008-10-01 K.OHWADA
// BUG : undefined constant _AM_SOBJECT_ABOUT in file admin/menu.php in "Modules Administration"

//=========================================================
// Japanese language for SmartObject Module
// 2008-10-01 K.OHWADA <http://linux.ohwada.jp/>
// ͭ����������
//=========================================================

/**
* Module: SmartContent
* Author: The SmartFactory <www.smartfactory.ca>
* Licence: GNU
*/

if (!defined("XOOPS_ROOT_PATH")) {
 	die("XOOPS root path not defined");
}

define('_MI_SOBJECT_INDEX', '�ܼ�');
define('_MI_SOBJECT_SENT_LINKS', '���');
define('_MI_SOBJECT_TAGS', '�������ࡦ����');
define('_MI_SOBJECT_ADSENSES', '���ɥ���');
define('_MI_SOBJECT_RATINGS', 'ɾ��');
define('_MI_SOBJECT_CURRENCIES', '�̲�');

define('_MI_SOBJECT_CURRMAN', '�̲ߴ�����ͭ���ˤ���');
define('_MI_SOBJECT_CURRMANDSC', '');

define('_MI_SOBJECT_ADDTO_TITLE', '��������롦�֥å��ޡ������֥�å����ɲä���');
define('_MI_SOBJECT_ADDTO_DESC', '');

define('_MI_SOBJECT_ADMFOOTER', 'SmartModules �δ����ԥեå�����ͭ���ˤ���');
define('_MI_SOBJECT_ADMFOOTERDSC', '�ǥե���ȤǤϡ�SmartModules �ϴ����ԥڡ���������Ū�ʥ����ӥ�����
�����󥯤򼨤��եå�����ɽ�����롣�����Ϥ��Υ�󥯤�ɽ�����ʤ��褦�ˤǤ��ޤ���');

// -----
// BUG : undefined constant _AM_SOBJECT_ABOUT in file admin/menu.php in "Modules Administration"
define('_MI_SOBJECT_ABOUT', '���Υ⥸�塼��ˤĤ���');
// -----

?>