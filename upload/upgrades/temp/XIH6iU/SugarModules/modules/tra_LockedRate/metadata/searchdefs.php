<?php
$module_name = 'tra_LockedRate';
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
      'rate_date' => 
      array (
        'type' => 'date',
        'label' => 'LBL_RATE_DATE',
        'width' => '10%',
        'default' => true,
        'name' => 'rate_date',
      ),
      'tra_lockedrate_accounts_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_TRA_LOCKEDRATE_ACCOUNTS_FROM_ACCOUNTS_TITLE',
        'id' => 'TRA_LOCKEDRATE_ACCOUNTSACCOUNTS_IDA',
        'width' => '10%',
        'default' => true,
        'name' => 'tra_lockedrate_accounts_name',
      ),
      'final_rate' => 
      array (
        'type' => 'decimal',
        'label' => 'LBL_FINAL_RATE',
        'width' => '10%',
        'default' => true,
        'name' => 'final_rate',
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
      'final_rate' => 
      array (
        'type' => 'decimal',
        'label' => 'LBL_FINAL_RATE',
        'width' => '10%',
        'default' => true,
        'name' => 'final_rate',
      ),
      'rate_date' => 
      array (
        'type' => 'date',
        'label' => 'LBL_RATE_DATE',
        'width' => '10%',
        'default' => true,
        'name' => 'rate_date',
      ),
      'sold_currency' => 
      array (
        'type' => 'enum',
        'studio' => 'visible',
        'label' => 'LBL_SOLD_CURRENCY',
        'width' => '10%',
        'default' => true,
        'name' => 'sold_currency',
      ),
      'sold_term' => 
      array (
        'type' => 'enum',
        'studio' => 'visible',
        'label' => 'LBL_SOLD_TERM',
        'width' => '10%',
        'default' => true,
        'name' => 'sold_term',
      ),
      'bought_currency' => 
      array (
        'type' => 'enum',
        'studio' => 'visible',
        'label' => 'LBL_BOUGHT_CURRENCY',
        'width' => '10%',
        'default' => true,
        'name' => 'bought_currency',
      ),
      'bought_term' => 
      array (
        'type' => 'enum',
        'studio' => 'visible',
        'label' => 'LBL_BOUGHT_TERM',
        'width' => '10%',
        'default' => true,
        'name' => 'bought_term',
      ),
      'tra_lockedrate_accounts_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_TRA_LOCKEDRATE_ACCOUNTS_FROM_ACCOUNTS_TITLE',
        'width' => '10%',
        'default' => true,
        'id' => 'TRA_LOCKEDRATE_ACCOUNTSACCOUNTS_IDA',
        'name' => 'tra_lockedrate_accounts_name',
      ),
      'direction' => 
      array (
        'type' => 'enum',
        'studio' => 'visible',
        'label' => 'LBL_DIRECTION',
        'width' => '10%',
        'default' => true,
        'name' => 'direction',
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
