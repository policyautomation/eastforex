<?php
$module_name = 'acc_EFBankAccount';
$searchdefs [$module_name] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'account_name' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_ACCOUNT_NAME',
        'width' => '10%',
        'default' => true,
        'name' => 'account_name',
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
      'account_group' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_ACCOUNT_GROUP',
        'width' => '10%',
        'default' => true,
        'name' => 'account_group',
      ),
    ),
    'advanced_search' => 
    array (
      'account_name' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_ACCOUNT_NAME',
        'width' => '10%',
        'default' => true,
        'name' => 'account_name',
      ),
      'account_number' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_ACCOUNT_NUMBER',
        'width' => '10%',
        'default' => true,
        'name' => 'account_number',
      ),
      'bsb_number' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_BSB_NUMBER',
        'width' => '10%',
        'default' => true,
        'name' => 'bsb_number',
      ),
      'swift_code' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_SWIFT_CODE',
        'width' => '10%',
        'default' => true,
        'name' => 'swift_code',
      ),
      'bank_branch_name' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_BANK_BRANCH_NAME',
        'width' => '10%',
        'default' => true,
        'name' => 'bank_branch_name',
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
      'account_group' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_ACCOUNT_GROUP',
        'width' => '10%',
        'default' => true,
        'name' => 'account_group',
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
