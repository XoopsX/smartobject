<?php

/**
* $Id: smarttip.php,v 1.1 2012/03/31 09:52:50 ohwada Exp $
* Module: SmartObject
* Author: The SmartFactory <www.smartfactory.ca>
* Licence: GNU
*/

if (!defined("XOOPS_ROOT_PATH")) {
die("XOOPS root path not defined");
}

class SmartTip
{
	var $id;
	var $caption;
	var $message;
	var $visible;
	var $_tpl;

	function SmartTip($id, $caption, $message, $visible=false)
	{
		$this->id = $id;
		$this->caption = $caption;
		$this->message = $message;
		$this->visible = $visible;
		$this->_tpl =& new XoopsTpl();
	}

	function render($outputNow=true) {
		$aTip = array(	'id' => $this->id,
						'caption' => $this->caption,
						'message' => $this->message,
						'visible' => $this->visible ? 'block' : 'none');
		$this->_tpl->assign('tip', $aTip);
		if ($outputNow) {
			$this->_tpl->display( 'db:smartobject_tip.html' );
		} else {
			return $this->_tpl->fetch( 'db:smartobject_tip.html');
		}
	}
}

?>
