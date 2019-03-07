<?php
// created: 2018-12-10 23:06:42
$subpanel_layout['list_fields'] = array (
  'name' => 
  array (
    'vname' => 'LBL_NAME',
    'widget_class' => 'SubPanelDetailViewLink',
    'width' => '45%',
    'default' => true,
  ),
  'beneficiary_name_cn' => 
  array (
    'type' => 'varchar',
    'vname' => 'LBL_BENEFICIARY_NAME_CN',
    'width' => '10%',
    'default' => true,
  ),
  'bsb' => 
  array (
    'type' => 'varchar',
    'vname' => 'LBL_BSB',
    'width' => '10%',
    'default' => true,
  ),
  'account_number' => 
  array (
    'type' => 'varchar',
    'vname' => 'LBL_ACCOUNT_NUMBER',
    'width' => '10%',
    'default' => true,
  ),
  'beneficiary_bank_name_cn' => 
  array (
    'type' => 'varchar',
    'vname' => 'LBL_BENEFICIARY_BANK_NAME_CN',
    'width' => '10%',
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
  'edit_button' => 
  array (
    'vname' => 'LBL_EDIT_BUTTON',
    'widget_class' => 'SubPanelEditButton',
    'module' => 'acc_CustomerBankAccount',
    'width' => '4%',
    'default' => true,
  ),
  'remove_button' => 
  array (
    'vname' => 'LBL_REMOVE',
    'widget_class' => 'SubPanelRemoveButton',
    'module' => 'acc_CustomerBankAccount',
    'width' => '5%',
    'default' => true,
  ),
);