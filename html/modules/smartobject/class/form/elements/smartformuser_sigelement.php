<?php
/**
 * Contains the set password tray class
 *
 * @license GNU
 * @author marcan <marcan@smartfactory.ca>
 * @version $Id: smartformuser_sigelement.php,v 1.1 2012/03/31 09:52:52 ohwada Exp $
 * @link http://smartfactory.ca The SmartFactory
 * @package SmartObject
 * @subpackage SmartObjectForm
 */
if (!defined('XOOPS_ROOT_PATH')) {
	die("XOOPS root path not defined");
}

class SmartFormUser_sigElement extends XoopsFormElementTray {

	function SmartFormUser_sigElement($object, $key){

	    $var = $object->vars[$key];
	    $control = $object->controls[$key];

     	$this->XoopsFormElementTray($var['form_caption'], '<br /><br />', $key . '_signature_tray');

		$signature_textarea = new XoopsFormDhtmlTextArea('', $key, $object->getVar($key, 'e'));
		$this->addElement($signature_textarea);

		$attach_checkbox = new XoopsFormCheckBox('', 'attachsig', $object->getVar('attachsig', 'e'));
		$attach_checkbox->addOption(1, _US_SHOWSIG);
		$this->addElement($attach_checkbox);
	}
}
?>