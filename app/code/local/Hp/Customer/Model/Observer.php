<?php

/**
 * Class Hp_Customer_Model_Observer
 *
 * Observer class for catching customer events
 */
class Hp_Customer_Model_Observer
{

    /**
     * Observer method catches event after customer logs in
     *
     * @param Varien_Event_Observer $observer
     */
    public function customerLogin(Varien_Event_Observer $observer)
    {
        //Get customer quote
        $quote = Mage::getSingleton('checkout/session')->getQuote();

        //Get total number of items from quote
        $numberOfItems = $quote->getItemsCount();
        if ($numberOfItems) {
            //Set cookie value for the key "show_abandoned_cart"
            Mage::getSingleton('core/cookie')->set('show_abandoned_cart', '1', 60 * 60 * 24 * 30);
        }
    }

}