<?php
// created: 2018-12-10 23:16:31
$subpanel_layout['list_fields'] = array (
  'name' => 
  array (
    'vname' => 'LBL_NAME',
    'widget_class' => 'SubPanelDetailViewLink',
    'width' => '45%',
    'default' => true,
  ),
  'currency' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'vname' => 'LBL_CURRENCY',
    'width' => '10%',
    'default' => true,
  ),
  'tt_balance' => 
  array (
    'type' => 'currency',
    'vname' => 'LBL_TT_BALANCE',
    'currency_format' => true,
    'width' => '10%',
    'default' => true,
  ),
  'cash_balance' => 
  array (
    'type' => 'currency',
    'vname' => 'LBL_CASH_BALANCE',
    'currency_format' => true,
    'width' => '10%',
    'default' => true,
  ),
  'edit_button' => 
  array (
    'vname' => 'LBL_EDIT_BUTTON',
    'widget_class' => 'SubPanelEditButton',
    'module' => 'acc_Balance',
    'width' => '4%',
    'default' => true,
  ),
  'remove_button' => 
  array (
    'vname' => 'LBL_REMOVE',
    'widget_class' => 'SubPanelRemoveButton',
    'module' => 'acc_Balance',
    'width' => '5%',
    'default' => true,
  ),
);