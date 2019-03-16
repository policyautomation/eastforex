<?php
$module_name = 'tra_CustomerTransaction';
$viewdefs [$module_name] = 
array (
  'DetailView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'buttons' => 
        array (
          0 => 'EDIT',
          1 => 'DUPLICATE',
          2 => 'DELETE',
          3 => 'FIND_DUPLICATES',
        ),
      ),
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
      'includes' =>
      array (
        0 =>
        array (
          'file' => 'custom/modules/tra_CustomerTransaction/CustomerTransactionCustom.js'
        ),
      ),
      'useTabs' => true,
      'tabDefs' => 
      array (
        'DEFAULT' => 
        array (
          'newTab' => true,
          'panelDefault' => 'expanded',
        ),
        'LBL_DETAILVIEW_PANEL1' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
      'syncDetailEditViews' => true,
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'name',
            'label' => 'LBL_NAME',
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
            'name' => 'transaction_date',
            'label' => 'LBL_TRANSACTION_DATE',
          ),
          1 => 
          array (
            'name' => 'type',
            'studio' => 'visible',
            'label' => 'LBL_TYPE',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'tra_customertransaction_accounts_name',
            'label' => 'LBL_TRA_CUSTOMERTRANSACTION_ACCOUNTS_FROM_ACCOUNTS_TITLE',
          ),
          1 => 
          array (
            'name' => 'term',
            'studio' => 'visible',
            'label' => 'LBL_TERM',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'tra_customertransaction_acc_efbankaccount_name',
            'label' => 'LBL_TRA_CUSTOMERTRANSACTION_ACC_EFBANKACCOUNT_FROM_ACC_EFBANKACCOUNT_TITLE',
          ),
          1 => 
          array (
            'name' => 'currency',
            'studio' => 'visible',
            'label' => 'LBL_CURRENCY',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'tra_customertransaction_acc_customerbankaccount_name',
            'label' => 'LBL_TRA_CUSTOMERTRANSACTION_ACC_CUSTOMERBANKACCOUNT_FROM_ACC_CUSTOMERBANKACCOUNT_TITLE',
          ),
          1 => 
          array (
            'name' => 'remittance_purpose',
            'studio' => 'visible',
            'label' => 'LBL_REMITTANCE_PURPOSE',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'currency_id',
            'studio' => 'visible',
            'label' => 'LBL_CURRENCY',
          ),
          1 => 
          array (
            'name' => 'amount',
            'label' => 'LBL_AMOUNT',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'tra_customertransaction_acc_balance_name',
            'label' => 'LBL_TRA_CUSTOMERTRANSACTION_ACC_BALANCE_FROM_ACC_BALANCE_TITLE',
          ),
          1 => 
          array (
            'name' => 'report_type',
            'studio' => 'visible',
            'label' => 'LBL_REPORT_TYPE',
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'fee',
            'label' => 'LBL_FEE',
          ),
          1 => 
          array (
            'name' => 'ttr',
            'label' => 'LBL_TTR',
          ),
        ),
        8 => 
        array (
          0 => 
          array (
            'name' => 'message_to_beneficiary',
            'studio' => 'visible',
            'label' => 'LBL_MESSAGE_TO_BENEFICIARY',
          ),
        ),
        9 => 
        array (
          0 => 'description',
        ),
      ),
      'lbl_detailview_panel1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'cached_balance',
            'label' => 'LBL_CACHED_BALANCE',
          ),
          1 => 
          array (
            'name' => 'balance_updated',
            'label' => 'LBL_BALANCE_UPDATED',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'tra_customerfxrequest_tra_customertransaction_name',
            'label' => 'LBL_TRA_CUSTOMERFXREQUEST_TRA_CUSTOMERTRANSACTION_FROM_TRA_CUSTOMERFXREQUEST_TITLE',
          ),
          1 => 
          array (
            'name' => 'assigned_user_name',
            'label' => 'LBL_ASSIGNED_TO_NAME',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'created_by_name',
            'label' => 'LBL_CREATED',
          ),
          1 => 
          array (
            'name' => 'date_entered',
            'comment' => 'Date record created',
            'label' => 'LBL_DATE_ENTERED',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'modified_by_name',
            'label' => 'LBL_MODIFIED_NAME',
          ),
          1 => 
          array (
            'name' => 'date_modified',
            'comment' => 'Date record last modified',
            'label' => 'LBL_DATE_MODIFIED',
          ),
        ),
      ),
    ),
  ),
);
;
?>
