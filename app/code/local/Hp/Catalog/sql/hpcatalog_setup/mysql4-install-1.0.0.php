<?php
$installer = $this;
$installer->startSetup();

/**
 * Create Product Attribute - View In Ebay
*/
$installer->addAttribute('catalog_product', 'view_in_ebay', array(
    'type'              => 'varchar',
    'backend'           => '',
    'frontend'          => '',
    'label'             => 'View In Ebay',
    'group'             => 'General',
    'input'             => 'text',
    'class'             => '',
    'source'            => '',
    'global'            => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_GLOBAL,
    'visible'           => true,
    'required'          => false,
    'user_defined'      => true,
    'default'           => '',
    'searchable'        => false,
    'filterable'        => false,
    'comparable'        => false,
    'visible_on_front'  => true,
    'used_in_product_listing' => true,
    'unique'            => false,
    'apply_to'             => '',
    'is_configurable'   => false,
    'is_used_for_promo_rules' => false,
));
$installer->endSetup();