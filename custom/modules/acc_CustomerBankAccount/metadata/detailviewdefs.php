<?php
$module_name = 'acc_CustomerBankAccount';
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
          'file' => 'custom/modules/acc_CustomerBankAccount/CustomerBankAccountCustom.js'
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
        'LBL_EDITVIEW_PANEL1' => 
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
            'name' => 'acc_customerbankaccount_accounts_name',
            'label' => 'LBL_ACC_CUSTOMERBANKACCOUNT_ACCOUNTS_FROM_ACCOUNTS_TITLE',
          ),
          1 => 
          array (
            'name' => 'beneficiary_name',
            'label' => 'LBL_BENEFICIARY_NAME',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'beneficiary_bank_name',
            'studio' => 'visible',
            'label' => 'LBL_BENEFICIARY_BANK_NAME',
          ),
          1 => 
          array (
            'name' => 'beneficiary_bank_name_other',
            'label' => 'LBL_BENEFICIARY_BANK_NAME_OTHER',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'beneficiary_branch_name',
            'label' => 'LBL_BENEFICIARY_BRANCH_NAME',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'account_number',
            'label' => 'LBL_ACCOUNT_NUMBER',
          ),
          1 => 
          array (
            'name' => 'bsb',
            'label' => 'LBL_BSB',
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
            'name' => 'swift_code',
            'label' => 'LBL_SWIFT_CODE',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'beneficiary_bank_street_c',
            'label' => 'LBL_BENEFICIARY_BANK_STREET',
          ),
          1 => 
          array (
            'name' => 'beneficiary_street_address_c',
            'label' => 'LBL_BENEFICIARY_STREET_ADDRESS',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'beneficiary_bank_suburb_c',
            'label' => 'LBL_BENEFICIARY_BANK_SUBURB',
          ),
          1 => 
          array (
            'name' => 'beneficiary_suburb_c',
            'label' => 'LBL_BENEFICIARY_SUBURB',
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'beneficiary_bank_state_c',
            'label' => 'LBL_BENEFICIARY_BANK_STATE',
          ),
          1 => 
          array (
            'name' => 'beneficiary_state_c',
            'label' => 'LBL_BENEFICIARY_STATE',
          ),
        ),
        8 => 
        array (
          0 => 
          array (
            'name' => 'beneficiary_bank_country_c',
            'label' => 'LBL_BENEFICIARY_BANK_COUNTRY',
          ),
          1 => 
          array (
            'name' => 'beneficiary_country_c',
            'label' => 'LBL_BENEFICIARY_COUNTRY',
          ),
        ),
        9 => 
        array (
          0 => 
          array (
            'name' => 'beneficiary_bank_postcode_c',
            'label' => 'LBL_BENEFICIARY_BANK_POSTCODE',
          ),
          1 => 
          array (
            'name' => 'beneficiary_postcode_c',
            'label' => 'LBL_BENEFICIARY_POSTCODE',
          ),
        ),
        10 => 
        array (
          0 => 
          array (
            'name' => 'note',
            'studio' => 'visible',
            'label' => 'LBL_NOTE',
          ),
        ),
      ),
      'lbl_editview_panel1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'beneficiary_name_cn',
            'label' => 'LBL_BENEFICIARY_NAME_CN',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'beneficiary_branch_name_cn',
            'label' => 'LBL_BENEFICIARY_BRANCH_NAME_CN',
          ),
          1 => 
          array (
            'name' => 'beneficiary_bank_name_cn',
            'label' => 'LBL_BENEFICIARY_BANK_NAME_CN',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'beneficiary_address_cn',
            'studio' => 'visible',
            'label' => 'LBL_BENEFICIARY_ADDRESS_CN',
          ),
          1 => 
          array (
            'name' => 'beneficiary_bank_address_cn',
            'studio' => 'visible',
            'label' => 'LBL_BENEFICIARY_BANK_ADDRESS_CN',
          ),
        ),
      ),
    ),
  ),
);
;
?>
