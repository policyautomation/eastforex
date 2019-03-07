<?php
$dashletData['tra_EFFXRequestDashlet']['searchFields'] = array (
  'fx_request_date' => 
  array (
    'default' => '',
  ),
);
$dashletData['tra_EFFXRequestDashlet']['columns'] = array (
  'name' => 
  array (
    'width' => '40%',
    'label' => 'LBL_LIST_NAME',
    'link' => true,
    'default' => true,
    'name' => 'name',
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
  ),
  'status' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_STATUS',
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
);
