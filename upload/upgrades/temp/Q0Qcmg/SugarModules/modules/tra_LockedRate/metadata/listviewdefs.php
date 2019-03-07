<?php
$module_name = 'tra_LockedRate';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'TRA_LOCKEDRATE_ACCOUNTS_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_TRA_LOCKEDRATE_ACCOUNTS_FROM_ACCOUNTS_TITLE',
    'id' => 'TRA_LOCKEDRATE_ACCOUNTSACCOUNTS_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'RATE_DATE' => 
  array (
    'type' => 'date',
    'label' => 'LBL_RATE_DATE',
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
  'SOLD_TERM' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_SOLD_TERM',
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
  'BOUGHT_TERM' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_BOUGHT_TERM',
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
  'FINAL_RATE' => 
  array (
    'type' => 'decimal',
    'label' => 'LBL_FINAL_RATE',
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
