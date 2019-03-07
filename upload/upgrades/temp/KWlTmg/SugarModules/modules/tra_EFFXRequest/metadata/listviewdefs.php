<?php
$module_name = 'tra_EFFXRequest';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'SOLD_EF_BANK_ACCOUNT' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_SOLD_EF_BANK_ACCOUNT',
    'id' => 'ACC_EFBANKACCOUNT_ID_C',
    'link' => true,
    'width' => '10%',
    'default' => true,
  ),
  'BOUGHT_EF_BANK_ACCOUNT' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_BOUGHT_EF_BANK_ACCOUNT',
    'id' => 'ACC_EFBANKACCOUNT_ID1_C',
    'link' => true,
    'width' => '10%',
    'default' => true,
  ),
  'STATUS' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_STATUS',
    'width' => '10%',
    'default' => true,
  ),
  'SOLD_CURRENCY' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_SOLD_CURRENCY',
    'width' => '10%',
    'default' => true,
  ),
  'SOLD_AMOUNT' => 
  array (
    'type' => 'currency',
    'label' => 'LBL_SOLD_AMOUNT',
    'currency_format' => true,
    'width' => '10%',
    'default' => true,
  ),
  'BOUGHT_CURRENCY' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_BOUGHT_CURRENCY',
    'width' => '10%',
    'default' => true,
  ),
  'BOUGHT_AMOUNT' => 
  array (
    'type' => 'currency',
    'label' => 'LBL_BOUGHT_AMOUNT',
    'currency_format' => true,
    'width' => '10%',
    'default' => true,
  ),
  'RATE' => 
  array (
    'type' => 'decimal',
    'label' => 'LBL_RATE',
    'width' => '10%',
    'default' => true,
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '9%',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => false,
  ),
);
;
?>
