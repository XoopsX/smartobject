<?php

/**
 * Contains the SmartObjectControl class
 *
 * @license GNU
 * @author marcan <marcan@smartfactory.ca>
 * @version $Id: smartformlanguageelement.php,v 1.1 2012/03/31 09:52:52 ohwada Exp $
 * @link http://smartfactory.ca The SmartFactory
 * @package SmartObject
 * @subpackage SmartObjectForm
 */
class SmartFormLanguageElement extends XoopsFormSelectLang {

    function SmartFormLanguageElement($object, $key) {

        $var = $object->vars[$key];
        $control = $object->controls[$key];
        $all = isset($control['all']) ? true : false;

		$this->XoopsFormSelectLang($var['form_caption'], $key, $object->getVar($key, 'e'));
		if ($all) {
			$this->addOption('all', _ALL);
		}
    }
}
?>