<?php
class Lalatteria_StopCartMerge_Model_Observer {

    public function stopCartMerge(Varien_Event_Observer $observer) {
        //Mage::getSingleton('checkout/cart')->truncate()->save();
        if ($observer->getSource()->hasItems()) {
            if (is_object($observer->getQuote()) && $observer->getQuote()->getId()) {
                $observer->getQuote()->removeAllItems();
            }
        }
        return $this;
    }
}