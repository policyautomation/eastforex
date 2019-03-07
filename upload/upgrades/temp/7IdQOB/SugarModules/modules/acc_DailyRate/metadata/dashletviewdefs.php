<?php
$dashletData['acc_DailyRateDashlet']['searchFields'] = array (
  'rate_date' => 
  array (
    'default' => '',
  ),
  'currency_pair' => 
  array (
    'default' => '',
  ),
);
$dashletData['acc_DailyRateDashlet']['columns'] = array (
  'name' => 
  array (
    'width' => '40%',
    'label' => 'LBL_LIST_NAME',
    'link' => true,
    'default' => true,
    'name' => 'name',
  ),
  'rate' => 
  array (
    'type' => 'decimal',
    'label' => 'LBL_RATE',
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
  'currency_pair' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_CURRENCY_PAIR',
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
  'date_entered' => 
  array (
    'width' => '15%',
    'label' => 'LBL_DATE_ENTERED',
    'default' => false,
    'name' => 'date_entered',
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
);
