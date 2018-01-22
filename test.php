<?php
/**
 * Created by PhpStorm.
 * User: acatania
 * Date: 21/01/2018
 * Time: 23:35
 */

require_once 'app/Mage.php';

Mage::app();

$popup = Mage::getModel("lalatteria/Popup");
$popup->sayHello();
