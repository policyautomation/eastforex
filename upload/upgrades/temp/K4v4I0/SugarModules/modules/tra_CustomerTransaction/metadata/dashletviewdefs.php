<?php
$dashletData['tra_CustomerTransactionDashlet']['searchFields'] = array (
  'transaction_date' => 
  array (
    'default' => '',
  ),
  'tra_customertransaction_accounts_name' => 
  array (
    'default' => '',
  ),
  'type' => 
  array (
    'default' => '',
  ),
  'tra_customertransaction_acc_efbankaccount_name' => 
  array (
    'default' => '',
  ),
  'tra_customertransaction_acc_customerbankaccount_name' => 
  array (
    'default' => '',
  ),
);
$dashletData['tra_CustomerTransactionDashlet']['columns'] = array (
  'name' => 
  array (
    'width' => '40%',
    'label' => 'LBL_LIST_NAME',
    'link' => true,
    'default' => true,
    'name' => 'name',
  ),
  'transaction_number' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_TRANSACTION_NUMBER',
    'width' => '10%',
    'default' => true,
    'name' => 'transaction_number',
  ),
  'transaction_date' => 
  array (
    'type' => 'date',
    'label' => 'LBL_TRANSACTION_DATE',
    'width' => '10%',
    'default' => true,
    'name' => 'transaction_date',
  ),
  'tra_customertransaction_accounts_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_TRA_CUSTOMERTRANSACTION_ACCOUNTS_FROM_ACCOUNTS_TITLE',
    'id' => 'TRA_CUSTOMERTRANSACTION_ACCOUNTSACCOUNTS_IDA',
    'width' => '10%',
    'default' => true,
    'name' => 'tra_customertransaction_accounts_name',
  ),
  'type' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_TYPE',
    'width' => '10%',
    'default' => true,
    'name' => 'type',
  ),
  'status' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_STATUS',
    'width' => '10%',
    'default' => true,
    'name' => 'status',
  ),
  'date_modified' => 
  array (
    'width' => '15%',
    'label' => 'LBL_DATE_MODIFIED',
    'name' => 'date_modified',
    'default' => false,
  ),
  'created_by' => 
  array (
    'width' => '8%',
    'label' => 'LBL_CREATED',
    'name' => 'created_by',
    'default' => false,
  ),
  'date_entered' => 
  array (
    'width' => '15%',
    'label' => 'LBL_DATE_ENTERED',
    'default' => false,
    'name' => 'date_entered',
  ),
  'assigned_user_name' => 
  array (
    'width' => '8%',
    'label' => 'LBL_LIST_ASSIGNED_USER',
    'name' => 'assigned_user_name',
    'default' => false,
  ),
);
