<?php
$dashletData['FP_Event_LocationsDashlet']['searchFields'] = array (
  'address' => 
  array (
    'default' => '',
  ),
  'address_city' => 
  array (
    'default' => '',
  ),
  'address_state' => 
  array (
    'default' => '',
  ),
  'address_postalcode' => 
  array (
    'default' => '',
  ),
);
$dashletData['FP_Event_LocationsDashlet']['columns'] = array (
  'accounts_fp_event_locations_1_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_ACCOUNTS_FP_EVENT_LOCATIONS_1_FROM_ACCOUNTS_TITLE',
    'id' => 'ACCOUNTS_FP_EVENT_LOCATIONS_1ACCOUNTS_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'address_type_c' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_ADDRESS_TYPE',
    'width' => '10%',
  ),
  'address' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_ADDRESS',
    'width' => '10%',
  ),
  'address_city' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_ADDRESS_CITY',
    'width' => '10%',
  ),
  'address_state' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_ADDRESS_STATE',
    'width' => '10%',
  ),
  'name' => 
  array (
    'width' => '40%',
    'label' => 'LBL_LIST_NAME',
    'link' => true,
    'default' => false,
    'name' => 'name',
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
