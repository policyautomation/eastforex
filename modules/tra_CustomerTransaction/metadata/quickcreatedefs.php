<?php
$module_name = 'tra_CustomerTransaction';
$viewdefs [$module_name] = 
array (
  'QuickCreate' => 
  array (
    'templateMeta' => 
    array (
      'maxColumns' => '2',
      'widths' => 
      array (
        0 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
        1 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
      ),
      'useTabs' => false,
      'tabDefs' => 
      array (
        'DEFAULT' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'transaction_date',
            'label' => 'LBL_TRANSACTION_DATE',
          ),
          1 => 
          array (
            'name' => 'status',
            'studio' => 'visible',
            'label' => 'LBL_STATUS',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'type',
            'studio' => 'visible',
            'label' => 'LBL_TYPE',
          ),
          1 => 
          array (
            'name' => 'tra_customertransaction_accounts_name',
            'label' => 'LBL_TRA_CUSTOMERTRANSACTION_ACCOUNTS_FROM_ACCOUNTS_TITLE',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'tra_customertransaction_acc_efbankaccount_name',
            'label' => 'LBL_TRA_CUSTOMERTRANSACTION_ACC_EFBANKACCOUNT_FROM_ACC_EFBANKACCOUNT_TITLE',
          ),
          1 => 
          array (
            'name' => 'tra_customertransaction_acc_customerbankaccount_name',
            'label' => 'LBL_TRA_CUSTOMERTRANSACTION_ACC_CUSTOMERBANKACCOUNT_FROM_ACC_CUSTOMERBANKACCOUNT_TITLE',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'amount',
            'label' => 'LBL_AMOUNT',
          ),
          1 => 
          array (
            'name' => 'fee',
            'label' => 'LBL_FEE',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'term',
            'studio' => 'visible',
            'label' => 'LBL_TERM',
          ),
          1 => 
          array (
            'name' => 'currency',
            'studio' => 'visible',
            'label' => 'LBL_CURRENCY',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'remittance_purpose',
            'studio' => 'visible',
            'label' => 'LBL_REMITTANCE_PURPOSE',
          ),
          1 => 
          array (
            'name' => 'ttr',
            'label' => 'LBL_TTR',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'message_to_beneficiary',
            'studio' => 'visible',
            'label' => 'LBL_MESSAGE_TO_BENEFICIARY',
          ),
          1 => 
          array (
            'name' => 'report_type',
            'studio' => 'visible',
            'label' => 'LBL_REPORT_TYPE',
          ),
        ),
      ),
    ),
  ),
);
;
?>
