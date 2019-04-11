<?php

/**
 * Class Hp_Checkout_Model_Observer
 *
 */
class Hp_Checkout_Model_Observer
{
    /**
     * Set Rewards Code From Billing To Cookie
     *
     * @param Varien_Event_Observer $observer
     */
    public function setRewardsCode(Varien_Event_Observer $observer)
    {
        $post= Mage::app()->getRequest()->getPost('billing');
        Mage::getModel('core/cookie')->set('rewards-code', $post['rewards-code']);
    }

    /**
     * Save Rewards Code Into Order Comments
     *
     * @param Varien_Event_Observer $observer
     */
    public function saveRewardsCode(Varien_Event_Observer $observer)
    {
        //Get Rewards Code From Cookie
        $rewardsCode = Mage::getModel('core/cookie')->get('rewards-code');
        if ($rewardsCode) {
            $_order = $observer->getEvent()->getOrder();
            $_order->addStatusToHistory($_order->getStatus(), "Rewards Code: {$rewardsCode}", false);
            $_order->save();
            Mage::getModel('core/cookie')->delete('rewards-code'); //Remove Cookie Value After Save
        }
    }
}