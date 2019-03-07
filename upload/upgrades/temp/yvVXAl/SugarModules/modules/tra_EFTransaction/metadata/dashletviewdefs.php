<?php
$dashletData['tra_EFTransactionDashlet']['searchFields'] = array (
  'transaction_date' => 
  array (
    'default' => '',
  ),
  'transaction_type' => 
  array (
    'default' => '',
  ),
  'status' => 
  array (
    'default' => '',
  ),
  'bank_reference_number' => 
  array (
    'default' => '',
  ),
);
$dashletData['tra_EFTransactionDashlet']['columns'] = array (
  'name' => 
  array (
    'width' => '40%',
    'label' => 'LBL_LIST_NAME',
    'link' => true,
    'default' => true,
    'name' => 'name',
  ),
  'transaction_type' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_TRANSACTION_TYPE',
    'width' => '10%',
    'default' => true,
  ),
  'tra_efdailytransaction_acc_efbankaccount_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_TRA_EFDAILYTRANSACTION_ACC_EFBANKACCOUNT_FROM_ACC_EFBANKACCOUNT_TITLE',
    'id' => 'TRA_EFDAILYTRANSACTION_ACC_EFBANKACCOUNTACC_EFBANKACCOUNT_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'transaction_date' => 
  array (
    'type' => 'date',
    'label' => 'LBL_TRANSACTION_DATE',
    'width' => '10%',
    'default' => true,
  ),
  'status' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_STATUS',
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
