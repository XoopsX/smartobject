<?php

/**
 * Contains the SmartObjectControl class
 *
 * @license GNU
 * @author marcan <marcan@smartfactory.ca>
 * @version $Id: smartformselect_multielement.php,v 1.1 2012/03/31 09:52:52 ohwada Exp $
 * @link http://smartfactory.ca The SmartFactory
 * @package SmartObject
 * @subpackage SmartObjectForm
 */
include_once (SMARTOBJECT_ROOT_PATH . "class/form/elements/smartformselectelement.php");

class SmartFormSelect_multiElement extends SmartFormSelectElement  {
    function SmartFormSelect_multiElement($object, $key) {
        $this->multiple = true;
        parent::SmartFormSelectElement($object, $key);
    }
}
?>