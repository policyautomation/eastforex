<?php
$module_name = 'acc_CustomerBankAccount';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'ACC_CUSTOMERBANKACCOUNT_ACCOUNTS_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_ACC_CUSTOMERBANKACCOUNT_ACCOUNTS_FROM_ACCOUNTS_TITLE',
    'id' => 'ACC_CUSTOMERBANKACCOUNT_ACCOUNTSACCOUNTS_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'BENEFICIARY_NAME' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_BENEFICIARY_NAME',
    'width' => '10%',
    'default' => true,
  ),
  'BSB' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_BSB',
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
  'BENEFICIARY_BANK_NAME' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_BENEFICIARY_BANK_NAME',
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
