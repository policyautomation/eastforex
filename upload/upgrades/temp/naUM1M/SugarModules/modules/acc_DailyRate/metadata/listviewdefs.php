<?php
$module_name = 'acc_DailyRate';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'CURRENCY_PAIR' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_CURRENCY_PAIR',
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
  'RATE_DATE' => 
  array (
    'type' => 'date',
    'label' => 'LBL_RATE_DATE',
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
