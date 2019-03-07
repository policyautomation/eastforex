<?php
$dashletData['acc_CustomerBankAccountDashlet']['searchFields'] = array (
  'account_number' => 
  array (
    'default' => '',
  ),
  'beneficiary_name' => 
  array (
    'default' => '',
  ),
  'beneficiary_bank_name' => 
  array (
    'default' => '',
  ),
);
$dashletData['acc_CustomerBankAccountDashlet']['columns'] = array (
  'acc_customerbankaccount_accounts_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_ACC_CUSTOMERBANKACCOUNT_ACCOUNTS_FROM_ACCOUNTS_TITLE',
    'id' => 'ACC_CUSTOMERBANKACCOUNT_ACCOUNTSACCOUNTS_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'beneficiary_name' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_BENEFICIARY_NAME',
    'width' => '10%',
    'default' => true,
  ),
  'bsb' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_BSB',
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
    'name' => 'currency',
  ),
  'account_number' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_ACCOUNT_NUMBER',
    'width' => '10%',
    'default' => true,
  ),
  'beneficiary_bank_name' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_BENEFICIARY_BANK_NAME',
    'width' => '10%',
    'default' => true,
  ),
  'name' => 
  array (
    'width' => '40%',
    'label' => 'LBL_LIST_NAME',
    'link' => true,
    'default' => false,
    'name' => 'name',
  ),
  'date_modified' => 
  array (
    'width' => '15%',
    'label' => 'LBL_DATE_MODIFIED',
    'name' => 'date_modified',
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
