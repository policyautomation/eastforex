<?php
$module_name = 'tra_CustomerFXRequest';
$searchdefs [$module_name] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'fx_number' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_FX_NUMBER',
        'width' => '10%',
        'default' => true,
        'name' => 'fx_number',
      ),
      'tra_customerfxrequest_accounts_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_TRA_CUSTOMERFXREQUEST_ACCOUNTS_FROM_ACCOUNTS_TITLE',
        'id' => 'TRA_CUSTOMERFXREQUEST_ACCOUNTSACCOUNTS_IDA',
        'width' => '10%',
        'default' => true,
        'name' => 'tra_customerfxrequest_accounts_name',
      ),
      'rate_date' => 
      array (
        'type' => 'date',
        'label' => 'LBL_RATE_DATE',
        'width' => '10%',
        'default' => true,
        'name' => 'rate_date',
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
      'sold_term_1' => 
      array (
        'type' => 'enum',
        'studio' => 'visible',
        'label' => 'LBL_SOLD_TERM_1',
        'width' => '10%',
        'default' => true,
        'name' => 'sold_term_1',
      ),
      'bought_term_1' => 
      array (
        'type' => 'enum',
        'studio' => 'visible',
        'label' => 'LBL_BOUGHT_TERM_1',
        'width' => '10%',
        'default' => true,
        'name' => 'bought_term_1',
      ),
      'sold_currency_1' => 
      array (
        'type' => 'enum',
        'studio' => 'visible',
        'label' => 'LBL_SOLD_CURRENCY_1',
        'width' => '10%',
        'default' => true,
        'name' => 'sold_currency_1',
      ),
      'bought_currency_1' => 
      array (
        'type' => 'enum',
        'studio' => 'visible',
        'label' => 'LBL_BOUGHT_CURRENCY_1',
        'width' => '10%',
        'default' => true,
        'name' => 'bought_currency_1',
      ),
    ),
    'advanced_search' => 
    array (
      'fx_number' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_FX_NUMBER',
        'width' => '10%',
        'default' => true,
        'name' => 'fx_number',
      ),
      'fx_request_date' => 
      array (
        'type' => 'date',
        'label' => 'LBL_FX_REQUEST_DATE',
        'width' => '10%',
        'default' => true,
        'name' => 'fx_request_date',
      ),
      'fx_rate' => 
      array (
        'type' => 'decimal',
        'label' => 'LBL_FX_RATE',
        'width' => '10%',
        'default' => true,
        'name' => 'fx_rate',
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
      'sold_currency_1' => 
      array (
        'type' => 'enum',
        'studio' => 'visible',
        'label' => 'LBL_SOLD_CURRENCY_1',
        'width' => '10%',
        'default' => true,
        'name' => 'sold_currency_1',
      ),
      'sold_term_1' => 
      array (
        'type' => 'enum',
        'studio' => 'visible',
        'label' => 'LBL_SOLD_TERM_1',
        'width' => '10%',
        'default' => true,
        'name' => 'sold_term_1',
      ),
      'sold_amount_1' => 
      array (
        'type' => 'currency',
        'label' => 'LBL_SOLD_AMOUNT_1',
        'currency_format' => true,
        'width' => '10%',
        'default' => true,
        'name' => 'sold_amount_1',
      ),
      'bought_currency_1' => 
      array (
        'type' => 'enum',
        'studio' => 'visible',
        'label' => 'LBL_BOUGHT_CURRENCY_1',
        'width' => '10%',
        'default' => true,
        'name' => 'bought_currency_1',
      ),
      'bought_term_1' => 
      array (
        'type' => 'enum',
        'studio' => 'visible',
        'label' => 'LBL_BOUGHT_TERM_1',
        'width' => '10%',
        'default' => true,
        'name' => 'bought_term_1',
      ),
      'bought_amount_1' => 
      array (
        'type' => 'currency',
        'label' => 'LBL_BOUGHT_AMOUNT_1',
        'currency_format' => true,
        'width' => '10%',
        'default' => true,
        'name' => 'bought_amount_1',
      ),
      'tra_customerfxrequest_accounts_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_TRA_CUSTOMERFXREQUEST_ACCOUNTS_FROM_ACCOUNTS_TITLE',
        'width' => '10%',
        'default' => true,
        'id' => 'TRA_CUSTOMERFXREQUEST_ACCOUNTSACCOUNTS_IDA',
        'name' => 'tra_customerfxrequest_accounts_name',
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
