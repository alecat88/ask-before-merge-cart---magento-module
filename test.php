<?php
/**
 * Created by PhpStorm.
 * User: acatania
 * Date: 21/01/2018
 * Time: 23:35
 */

require_once 'app/Mage.php';

Mage::app();

//$popup = Mage::getModel("Lalatteria/Popup");
$popup = new Lalatteria_Cartpopup_Model_Popup;

$popup->sayHello();
