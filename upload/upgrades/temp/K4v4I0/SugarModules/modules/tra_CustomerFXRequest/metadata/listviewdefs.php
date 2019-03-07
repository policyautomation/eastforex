<?php
$module_name = 'tra_CustomerFXRequest';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'FX_NUMBER' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_FX_NUMBER',
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
  'SOLD_CURRENCY_1' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_SOLD_CURRENCY_1',
    'width' => '10%',
    'default' => true,
  ),
  'SOLD_TERM_1' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_SOLD_TERM_1',
    'width' => '10%',
    'default' => true,
  ),
  'SOLD_AMOUNT_1' => 
  array (
    'type' => 'currency',
    'label' => 'LBL_SOLD_AMOUNT_1',
    'currency_format' => true,
    'width' => '10%',
    'default' => true,
  ),
  'BOUGHT_CURRENCY_1' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_BOUGHT_CURRENCY_1',
    'width' => '10%',
    'default' => true,
  ),
  'BOUGHT_TERM_1' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_BOUGHT_TERM_1',
    'width' => '10%',
    'default' => true,
  ),
  'BOUGHT_AMOUNT_1' => 
  array (
    'type' => 'currency',
    'label' => 'LBL_BOUGHT_AMOUNT_1',
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
