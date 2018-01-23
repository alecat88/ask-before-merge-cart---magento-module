<?php
class Lalatteria_EmptyCartOnLogin_Model_Observer {

    public function emptyCartOnLogin(Varien_Event_Observer $observer) {

        $customer = Mage::getSingleton('customer/session')->getCustomer();
        $log = Mage::getModel('log/customer')->load($customer->getId());
        $lastVisited = $log->getLastVisitAt();

        
        Mage::getSingleton('checkout/cart')->truncate()->save();

    }
}