<?php
// created: 2019-04-10 13:34:27
$listViewDefs['FP_Event_Locations'] = array (
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'ADDRESS' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_ADDRESS',
    'width' => '10%',
  ),
  'ADDRESS_CITY' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_ADDRESS_CITY',
    'width' => '10%',
  ),
  'ADDRESS_STATE' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_ADDRESS_STATE',
    'width' => '10%',
  ),
  'ADDRESS_POSTALCODE' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_ADDRESS_POSTALCODE',
    'width' => '10%',
  ),
  'ADDRESS_COUNTRY' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_ADDRESS_COUNTRY',
    'width' => '10%',
  ),
  'ADDRESS_TYPE_C' => 
  array (
    'type' => 'enum',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_ADDRESS_TYPE',
    'width' => '10%',
  ),
  'ACCOUNTS_FP_EVENT_LOCATIONS_1_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_ACCOUNTS_FP_EVENT_LOCATIONS_1_FROM_ACCOUNTS_TITLE',
    'id' => 'ACCOUNTS_FP_EVENT_LOCATIONS_1ACCOUNTS_IDA',
    'width' => '10%',
    'default' => false,
  ),
  'CAPACITY' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_CAPACITY',
    'width' => '10%',
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '9%',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => false,
  ),
  'DATE_ENTERED' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_ENTERED',
    'width' => '10%',
    'default' => false,
  ),
);