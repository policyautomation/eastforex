<?php
$module_name = 'tra_CustomerTransaction';
$searchdefs [$module_name] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'name' => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
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
      'tra_customertransaction_acc_efbankaccount_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_TRA_CUSTOMERTRANSACTION_ACC_EFBANKACCOUNT_FROM_ACC_EFBANKACCOUNT_TITLE',
        'id' => 'TRA_CUSTOMERTRANSACTION_ACC_EFBANKACCOUNTACC_EFBANKACCOUNT_IDA',
        'width' => '10%',
        'default' => true,
        'name' => 'tra_customertransaction_acc_efbankaccount_name',
      ),
      'tra_customertransaction_acc_customerbankaccount_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_TRA_CUSTOMERTRANSACTION_ACC_CUSTOMERBANKACCOUNT_FROM_ACC_CUSTOMERBANKACCOUNT_TITLE',
        'id' => 'TRA_CUSTOM1E70ACCOUNT_IDA',
        'width' => '10%',
        'default' => true,
        'name' => 'tra_customertransaction_acc_customerbankaccount_name',
      ),
    ),
    'advanced_search' => 
    array (
      'name' => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'transaction_date' => 
      array (
        'type' => 'date',
        'label' => 'LBL_TRANSACTION_DATE',
        'width' => '10%',
        'default' => true,
        'name' => 'transaction_date',
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
      'type' => 
      array (
        'type' => 'enum',
        'studio' => 'visible',
        'label' => 'LBL_TYPE',
        'width' => '10%',
        'default' => true,
        'name' => 'type',
      ),
      'term' => 
      array (
        'type' => 'enum',
        'studio' => 'visible',
        'label' => 'LBL_TERM',
        'width' => '10%',
        'default' => true,
        'name' => 'term',
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
      'ttr' => 
      array (
        'type' => 'bool',
        'default' => true,
        'label' => 'LBL_TTR',
        'width' => '10%',
        'name' => 'ttr',
      ),
      'remittance_purpose' => 
      array (
        'type' => 'enum',
        'studio' => 'visible',
        'label' => 'LBL_REMITTANCE_PURPOSE',
        'width' => '10%',
        'default' => true,
        'name' => 'remittance_purpose',
      ),
      'tra_customertransaction_accounts_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_TRA_CUSTOMERTRANSACTION_ACCOUNTS_FROM_ACCOUNTS_TITLE',
        'width' => '10%',
        'default' => true,
        'id' => 'TRA_CUSTOMERTRANSACTION_ACCOUNTSACCOUNTS_IDA',
        'name' => 'tra_customertransaction_accounts_name',
      ),
      'tra_customertransaction_acc_efbankaccount_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_TRA_CUSTOMERTRANSACTION_ACC_EFBANKACCOUNT_FROM_ACC_EFBANKACCOUNT_TITLE',
        'width' => '10%',
        'default' => true,
        'id' => 'TRA_CUSTOMERTRANSACTION_ACC_EFBANKACCOUNTACC_EFBANKACCOUNT_IDA',
        'name' => 'tra_customertransaction_acc_efbankaccount_name',
      ),
      'tra_customertransaction_acc_customerbankaccount_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_TRA_CUSTOMERTRANSACTION_ACC_CUSTOMERBANKACCOUNT_FROM_ACC_CUSTOMERBANKACCOUNT_TITLE',
        'width' => '10%',
        'default' => true,
        'id' => 'TRA_CUSTOM1E70ACCOUNT_IDA',
        'name' => 'tra_customertransaction_acc_customerbankaccount_name',
      ),
      'report_type' => 
      array (
        'type' => 'enum',
        'studio' => 'visible',
        'label' => 'LBL_REPORT_TYPE',
        'width' => '10%',
        'default' => true,
        'name' => 'report_type',
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
