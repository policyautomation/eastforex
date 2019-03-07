<?php
$dashletData['tra_LockedRateDashlet']['searchFields'] = array (
  'name' => 
  array (
    'default' => '',
  ),
  'rate_date' => 
  array (
    'default' => '',
  ),
  'tra_lockedrate_accounts_name' => 
  array (
    'default' => '',
  ),
  'final_rate' => 
  array (
    'default' => '',
  ),
);
$dashletData['tra_LockedRateDashlet']['columns'] = array (
  'name' => 
  array (
    'width' => '40%',
    'label' => 'LBL_LIST_NAME',
    'link' => true,
    'default' => true,
    'name' => 'name',
  ),
  'tra_lockedrate_accounts_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_TRA_LOCKEDRATE_ACCOUNTS_FROM_ACCOUNTS_TITLE',
    'id' => 'TRA_LOCKEDRATE_ACCOUNTSACCOUNTS_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'direction' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_DIRECTION',
    'width' => '10%',
    'default' => true,
  ),
  'rate_date' => 
  array (
    'type' => 'date',
    'label' => 'LBL_RATE_DATE',
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
  'assigned_user_name' => 
  array (
    'width' => '8%',
    'label' => 'LBL_LIST_ASSIGNED_USER',
    'name' => 'assigned_user_name',
    'default' => false,
  ),
  'sold_currency' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_SOLD_CURRENCY',
    'width' => '10%',
    'default' => false,
  ),
  'sold_term' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_SOLD_TERM',
    'width' => '10%',
    'default' => false,
  ),
  'date_entered' => 
  array (
    'width' => '15%',
    'label' => 'LBL_DATE_ENTERED',
    'default' => false,
    'name' => 'date_entered',
  ),
);
