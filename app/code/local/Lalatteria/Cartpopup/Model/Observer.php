<?php
/**
 * Created by PhpStorm.
 * User: acatania
 * Date: 22/01/2018
 * Time: 00:38
 */
class Lalatteria_CartPopup_Model_Observer{

    public function showPopup($observer){
        echo "showpopup";
        $customer = $customer->getCustomer();
        Mage::log($customer->getName() . " has logged in" , nulln , "customer.log");

        //v1
        // Mage::getSingleton('checkout/cart')->truncate();
        //  maybe save after truncate?//Mage::getSingleton('checkout/cart')->save();

        //v2
        // Mage::getSingleton('checkout/session')->clear();

        //v3?
        //$quote = Mage::getSingleton('checkout/session')->getQuote();
        //$quote->delete();
    }
    /*public function stopCartMerge(Varien_Event_Observer $observer) {
        echo "stopcartmerge";
    }*/
    public function stopCartMerge($observer) {
        Mage::getSingleton('checkout/cart')->truncate()->save();
        if ($observer->getSource()->hasItems()) {
            if (is_object($observer->getQuote()) && $observer->getQuote()->getId()) {
                $observer->getQuote()->removeAllItems();
            }
        }
        return $this;
    }
}