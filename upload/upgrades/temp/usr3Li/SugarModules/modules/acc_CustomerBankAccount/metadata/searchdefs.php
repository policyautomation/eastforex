<?php
$module_name = 'acc_CustomerBankAccount';
$searchdefs [$module_name] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'account_number' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_ACCOUNT_NUMBER',
        'width' => '10%',
        'default' => true,
        'name' => 'account_number',
      ),
      'beneficiary_name' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_BENEFICIARY_NAME',
        'width' => '10%',
        'default' => true,
        'name' => 'beneficiary_name',
      ),
      'beneficiary_bank_name' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_BENEFICIARY_BANK_NAME',
        'width' => '10%',
        'default' => true,
        'name' => 'beneficiary_bank_name',
      ),
    ),
    'advanced_search' => 
    array (
      'beneficiary_name' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_BENEFICIARY_NAME',
        'width' => '10%',
        'default' => true,
        'name' => 'beneficiary_name',
      ),
      'beneficiary_bank_name' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_BENEFICIARY_BANK_NAME',
        'width' => '10%',
        'default' => true,
        'name' => 'beneficiary_bank_name',
      ),
      'beneficiary_branch_name' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_BENEFICIARY_BRANCH_NAME',
        'width' => '10%',
        'default' => true,
        'name' => 'beneficiary_branch_name',
      ),
      'bsb' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_BSB',
        'width' => '10%',
        'default' => true,
        'name' => 'bsb',
      ),
      'account_number' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_ACCOUNT_NUMBER',
        'width' => '10%',
        'default' => true,
        'name' => 'account_number',
      ),
      'swift_code' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_SWIFT_CODE',
        'width' => '10%',
        'default' => true,
        'name' => 'swift_code',
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
