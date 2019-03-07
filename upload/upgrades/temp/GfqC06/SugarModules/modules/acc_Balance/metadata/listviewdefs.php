<?php
$module_name = 'acc_Balance';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'TT_BALANCE' => 
  array (
    'type' => 'currency',
    'label' => 'LBL_TT_BALANCE',
    'currency_format' => true,
    'width' => '10%',
    'default' => true,
  ),
  'CASH_BALANCE' => 
  array (
    'type' => 'currency',
    'label' => 'LBL_CASH_BALANCE',
    'currency_format' => true,
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
