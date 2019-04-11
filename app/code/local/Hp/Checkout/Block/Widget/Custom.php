<?php


/**
 * Block to load customer's custom attributes
 *
 * @category   Hp
 * @package    Hp_Checkout
 * @author     Joe Nguyen <hungphuong.nv@gmail.com>
 */
class Hp_Checkout_Block_Widget_Custom extends Mage_Customer_Block_Widget_Abstract
{
    /**
     * Initialize block
     */
    public function _construct()
    {
        parent::_construct();
    }

    /**
     * Check if has_rewards attribute enabled in system
     *
     * @return bool
     */
    public function isHasRewardsEnabled()
    {
        return (bool)$this->_getAttribute('has_rewards')->getIsVisible();
    }

    /**
     * Get current customer from session
     *
     * @return Mage_Customer_Model_Customer
     */
    public function getCustomer()
    {
        return Mage::getSingleton('customer/session')->getCustomer();
    }
}
