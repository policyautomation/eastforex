<?php
$dashletData['acc_EFBankAccountDashlet']['searchFields'] = array (
  'account_name' => 
  array (
    'default' => '',
  ),
  'currency' => 
  array (
    'default' => '',
  ),
  'account_group' => 
  array (
    'default' => '',
  ),
);
$dashletData['acc_EFBankAccountDashlet']['columns'] = array (
  'name' => 
  array (
    'width' => '40%',
    'label' => 'LBL_LIST_NAME',
    'link' => true,
    'default' => true,
    'name' => 'name',
  ),
  'bsb_number' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_BSB_NUMBER',
    'width' => '10%',
    'default' => true,
  ),
  'account_number' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_ACCOUNT_NUMBER',
    'width' => '10%',
    'default' => true,
  ),
  'bank_branch_name' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_BANK_BRANCH_NAME',
    'width' => '10%',
    'default' => true,
  ),
  'currency' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_CURRENCY',
    'width' => '10%',
    'default' => true,
  ),
  'date_modified' => 
  array (
    'width' => '15%',
    'label' => 'LBL_DATE_MODIFIED',
    'name' => 'date_modified',
    'default' => false,
  ),
  'account_name' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_ACCOUNT_NAME',
    'width' => '10%',
    'default' => false,
  ),
  'date_entered' => 
  array (
    'width' => '15%',
    'label' => 'LBL_DATE_ENTERED',
    'default' => false,
    'name' => 'date_entered',
  ),
  'created_by' => 
  array (
    'width' => '8%',
    'label' => 'LBL_CREATED',
    'name' => 'created_by',
    'default' => false,
  ),
  'assigned_user_name' => 
  array (
    'width' => '8%',
    'label' => 'LBL_LIST_ASSIGNED_USER',
    'name' => 'assigned_user_name',
    'default' => false,
  ),
);
