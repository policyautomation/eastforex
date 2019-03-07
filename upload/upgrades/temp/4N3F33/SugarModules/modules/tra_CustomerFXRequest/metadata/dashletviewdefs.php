<?php
$dashletData['tra_CustomerFXRequestDashlet']['searchFields'] = array (
  'fx_number' => 
  array (
    'default' => '',
  ),
  'tra_customerfxrequest_accounts_name' => 
  array (
    'default' => '',
  ),
  'rate_date' => 
  array (
    'default' => '',
  ),
  'status' => 
  array (
    'default' => '',
  ),
  'sold_term_1' => 
  array (
    'default' => '',
  ),
  'bought_term_1' => 
  array (
    'default' => '',
  ),
  'sold_currency_1' => 
  array (
    'default' => '',
  ),
  'bought_currency_1' => 
  array (
    'default' => '',
  ),
);
$dashletData['tra_CustomerFXRequestDashlet']['columns'] = array (
  'name' => 
  array (
    'width' => '40%',
    'label' => 'LBL_LIST_NAME',
    'link' => true,
    'default' => true,
    'name' => 'name',
  ),
  'fx_number' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_FX_NUMBER',
    'width' => '10%',
    'default' => true,
  ),
  'status' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_STATUS',
    'width' => '10%',
    'default' => true,
  ),
  'tra_customerfxrequest_accounts_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_TRA_CUSTOMERFXREQUEST_ACCOUNTS_FROM_ACCOUNTS_TITLE',
    'id' => 'TRA_CUSTOMERFXREQUEST_ACCOUNTSACCOUNTS_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'final_rate' => 
  array (
    'type' => 'decimal',
    'label' => 'LBL_FINAL_RATE',
    'width' => '10%',
    'default' => true,
  ),
  'date_modified' => 
  array (
    'width' => '15%',
    'label' => 'LBL_DATE_MODIFIED',
    'name' => 'date_modified',
    'default' => false,
  ),
  'created_by' => 
  array (
    'width' => '8%',
    'label' => 'LBL_CREATED',
    'name' => 'created_by',
    'default' => false,
  ),
  'date_entered' => 
  array (
    'width' => '15%',
    'label' => 'LBL_DATE_ENTERED',
    'default' => false,
    'name' => 'date_entered',
  ),
  'assigned_user_name' => 
  array (
    'width' => '8%',
    'label' => 'LBL_LIST_ASSIGNED_USER',
    'name' => 'assigned_user_name',
    'default' => false,
  ),
  'sold_currency_1' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_SOLD_CURRENCY_1',
    'width' => '10%',
    'default' => false,
  ),
  'sold_term_1' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_SOLD_TERM_1',
    'width' => '10%',
    'default' => false,
  ),
  'sold_amount_1' => 
  array (
    'type' => 'currency',
    'label' => 'LBL_SOLD_AMOUNT_1',
    'currency_format' => true,
    'width' => '10%',
    'default' => false,
  ),
);
