<?php
$module_name = 'acc_Balance';
$searchdefs [$module_name] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'currency' => 
      array (
        'type' => 'enum',
        'studio' => 'visible',
        'label' => 'LBL_CURRENCY',
        'width' => '10%',
        'default' => true,
        'name' => 'currency',
      ),
      'acc_balance_accounts_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_ACC_BALANCE_ACCOUNTS_FROM_ACCOUNTS_TITLE',
        'id' => 'ACC_BALANCE_ACCOUNTSACCOUNTS_IDA',
        'width' => '10%',
        'default' => true,
        'name' => 'acc_balance_accounts_name',
      ),
      'acc_efbankaccount_acc_balance_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_ACC_EFBANKACCOUNT_ACC_BALANCE_FROM_ACC_EFBANKACCOUNT_TITLE',
        'id' => 'ACC_EFBANKACCOUNT_ACC_BALANCEACC_EFBANKACCOUNT_IDA',
        'width' => '10%',
        'default' => true,
        'name' => 'acc_efbankaccount_acc_balance_name',
      ),
    ),
    'advanced_search' => 
    array (
      'currency' => 
      array (
        'type' => 'enum',
        'studio' => 'visible',
        'label' => 'LBL_CURRENCY',
        'width' => '10%',
        'default' => true,
        'name' => 'currency',
      ),
      'acc_efbankaccount_acc_balance_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_ACC_EFBANKACCOUNT_ACC_BALANCE_FROM_ACC_EFBANKACCOUNT_TITLE',
        'width' => '10%',
        'default' => true,
        'id' => 'ACC_EFBANKACCOUNT_ACC_BALANCEACC_EFBANKACCOUNT_IDA',
        'name' => 'acc_efbankaccount_acc_balance_name',
      ),
      'acc_balance_accounts_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_ACC_BALANCE_ACCOUNTS_FROM_ACCOUNTS_TITLE',
        'width' => '10%',
        'default' => true,
        'id' => 'ACC_BALANCE_ACCOUNTSACCOUNTS_IDA',
        'name' => 'acc_balance_accounts_name',
      ),
    ),
  ),
  'templateMeta' => 
  array (
    'maxColumns' => '3',
    'maxColumnsBasic' => '4',
    'widths' => 
    array (
      'label' => '10',
      'field' => '30',
    ),
  ),
);
;
?>
