<?php
$module_name = 'acc_EFBankAccount';
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
            'name' => 'account_name',
            'label' => 'LBL_ACCOUNT_NAME',
          ),
          1 => 
          array (
            'name' => 'account_group',
            'label' => 'LBL_ACCOUNT_GROUP',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'account_address',
            'studio' => 'visible',
            'label' => 'LBL_ACCOUNT_ADDRESS',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'bsb_number',
            'label' => 'LBL_BSB_NUMBER',
          ),
          1 => 
          array (
            'name' => 'account_number',
            'label' => 'LBL_ACCOUNT_NUMBER',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'bank_branch_name',
            'label' => 'LBL_BANK_BRANCH_NAME',
          ),
          1 => 
          array (
            'name' => 'swift_code',
            'label' => 'LBL_SWIFT_CODE',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'currency',
            'studio' => 'visible',
            'label' => 'LBL_CURRENCY',
          ),
          1 => 
          array (
            'name' => 'acc_efbankaccount_acc_balance_name',
            'label' => 'LBL_ACC_EFBANKACCOUNT_ACC_BALANCE_FROM_ACC_BALANCE_TITLE',
          ),
        ),
      ),
    ),
  ),
);
;
?>
