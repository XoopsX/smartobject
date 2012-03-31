<?php

/**
 * Contains the SmartObjectControl class
 *
 * @license GNU
 * @author marcan <marcan@smartfactory.ca>
 * @version $Id: smartformyesnoelement.php,v 1.1 2012/03/31 09:52:52 ohwada Exp $
 * @link http://smartfactory.ca The SmartFactory
 * @package SmartObject
 * @subpackage SmartObjectForm
 */
class SmartFormYesnoElement extends XoopsFormRadioYN {
    function SmartFormYesnoElement($object, $key) {
        $this->XoopsFormRadioYN($object->vars[$key]['form_caption'], $key, $object->getVar($key,'e'));
    }
}
?>