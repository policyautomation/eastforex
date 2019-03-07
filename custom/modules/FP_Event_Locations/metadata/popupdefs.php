<?php
$popupMeta = array (
    'moduleMain' => 'FP_Event_Locations',
    'varName' => 'FP_Event_Locations',
    'orderBy' => 'fp_event_locations.name',
    'whereClauses' => array (
  'address' => 'fp_event_locations.address',
  'address_city' => 'fp_event_locations.address_city',
  'address_postalcode' => 'fp_event_locations.address_postalcode',
  'address_state' => 'fp_event_locations.address_state',
),
    'searchInputs' => array (
  4 => 'address',
  5 => 'address_city',
  6 => 'address_postalcode',
  7 => 'address_state',
),
    'searchdefs' => array (
  'address' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_ADDRESS',
    'width' => '10%',
    'name' => 'address',
  ),
  'address_city' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_ADDRESS_CITY',
    'width' => '10%',
    'name' => 'address_city',
  ),
  'address_postalcode' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_ADDRESS_POSTALCODE',
    'width' => '10%',
    'name' => 'address_postalcode',
  ),
  'address_state' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_ADDRESS_STATE',
    'width' => '10%',
    'name' => 'address_state',
  ),
),
);
