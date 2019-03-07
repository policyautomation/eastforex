<?php
$module_name = 'acc_EFBankAccount';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'BSB_NUMBER' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_BSB_NUMBER',
    'width' => '10%',
    'default' => true,
  ),
  'ACCOUNT_NUMBER' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_ACCOUNT_NUMBER',
    'width' => '10%',
    'default' => true,
  ),
  'BANK_BRANCH_NAME' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_BANK_BRANCH_NAME',
    'width' => '10%',
    'default' => true,
  ),
  'ACCOUNT_GROUP' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_ACCOUNT_GROUP',
    'width' => '10%',
    'default' => true,
  ),
  'CURRENCY' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_CURRENCY',
    'width' => '10%',
    'default' => true,
  ),
);
;
?>
