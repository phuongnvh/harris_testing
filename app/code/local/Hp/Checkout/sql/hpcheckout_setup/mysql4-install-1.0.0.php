<?php

$installer = $this;

$installer->startSetup();

$entityTypeId     = $installer->getEntityTypeId('customer');
$attributeSetId   = $installer->getDefaultAttributeSetId($entityTypeId);
$attributeGroupId = $installer->getDefaultAttributeGroupId($entityTypeId, $attributeSetId);

$installer->addAttribute("customer", "has_rewards",  array(
    "type"     => "int",
    "backend"  => "",
    "label"    => "Has Rewards",
    "input"    => "select",
    "source"   => "eav/entity_attribute_source_boolean",
    "visible"  => true,
    "required" => false,
    "default" => false,
    "frontend" => "",
    "unique"     => false,
    "note"       => "Has Rewards"
));

$attribute   = Mage::getSingleton("eav/config")->getAttribute("customer", "has_rewards");

$installer->addAttributeToGroup(
    $entityTypeId,
    $attributeSetId,
    $attributeGroupId,
    'has_rewards',
    '100'  //sort_order
);

$used_in_forms=array();

$used_in_forms[]="adminhtml_customer";
$attribute->setData("used_in_forms", $used_in_forms)
    ->setData("is_used_for_customer_segment", true)
    ->setData("is_system", 0)
    ->setData("is_user_defined", 0)
    ->setData("is_visible", 1)
    ->setData("sort_order", 100)
;
$attribute->save();

$installer->endSetup();