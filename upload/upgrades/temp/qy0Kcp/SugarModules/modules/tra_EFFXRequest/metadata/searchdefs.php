<?php
$module_name = 'tra_EFFXRequest';
$searchdefs [$module_name] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'fx_request_date' => 
      array (
        'type' => 'date',
        'label' => 'LBL_FX_REQUEST_DATE',
        'width' => '10%',
        'default' => true,
        'name' => 'fx_request_date',
      ),
    ),
    'advanced_search' => 
    array (
      'fx_request_date' => 
      array (
        'type' => 'date',
        'label' => 'LBL_FX_REQUEST_DATE',
        'width' => '10%',
        'default' => true,
        'name' => 'fx_request_date',
      ),
      'bought_ef_bank_account' => 
      array (
        'type' => 'relate',
        'studio' => 'visible',
        'label' => 'LBL_BOUGHT_EF_BANK_ACCOUNT',
        'id' => 'ACC_EFBANKACCOUNT_ID1_C',
        'link' => true,
        'width' => '10%',
        'default' => true,
        'name' => 'bought_ef_bank_account',
      ),
      'sold_ef_bank_account' => 
      array (
        'type' => 'relate',
        'studio' => 'visible',
        'label' => 'LBL_SOLD_EF_BANK_ACCOUNT',
        'id' => 'ACC_EFBANKACCOUNT_ID_C',
        'link' => true,
        'width' => '10%',
        'default' => true,
        'name' => 'sold_ef_bank_account',
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
      'sold_currency' => 
      array (
        'type' => 'enum',
        'studio' => 'visible',
        'label' => 'LBL_SOLD_CURRENCY',
        'width' => '10%',
        'default' => true,
        'name' => 'sold_currency',
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
