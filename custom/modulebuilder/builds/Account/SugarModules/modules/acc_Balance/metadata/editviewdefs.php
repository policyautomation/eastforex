<?php
$module_name = 'acc_Balance';
$viewdefs [$module_name] = 
array (
  'EditView' => 
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
            'name' => 'acc_balance_accounts_name',
            'label' => 'LBL_ACC_BALANCE_ACCOUNTS_FROM_ACCOUNTS_TITLE',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'acc_efbankaccount_acc_balance_name',
            'label' => 'LBL_ACC_EFBANKACCOUNT_ACC_BALANCE_FROM_ACC_EFBANKACCOUNT_TITLE',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'currency',
            'studio' => 'visible',
            'label' => 'LBL_CURRENCY',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'cash_balance',
            'label' => 'LBL_CASH_BALANCE',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'tt_balance',
            'label' => 'LBL_TT_BALANCE',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'date_entered',
            'comment' => 'Date record created',
            'label' => 'LBL_DATE_ENTERED',
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
