<?php
// created: 2019-04-10 13:34:27
$searchdefs['FP_Event_Locations'] = array (
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
  'layout' => 
  array (
    'basic_search' => 
    array (
      0 => 
      array (
        'type' => 'varchar',
        'default' => true,
        'label' => 'LBL_ADDRESS',
        'width' => '10%',
        'name' => 'address',
      ),
      1 => 
      array (
        'type' => 'varchar',
        'default' => true,
        'label' => 'LBL_ADDRESS_POSTALCODE',
        'width' => '10%',
        'name' => 'address_postalcode',
      ),
      2 => 
      array (
        'type' => 'varchar',
        'default' => true,
        'label' => 'LBL_ADDRESS_CITY',
        'width' => '10%',
        'name' => 'address_city',
      ),
      3 => 
      array (
        'type' => 'varchar',
        'default' => true,
        'label' => 'LBL_ADDRESS_STATE',
        'width' => '10%',
        'name' => 'address_state',
      ),
    ),
    'advanced_search' => 
    array (
      0 => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_ACCOUNTS_FP_EVENT_LOCATIONS_1_FROM_ACCOUNTS_TITLE',
        'id' => 'ACCOUNTS_FP_EVENT_LOCATIONS_1ACCOUNTS_IDA',
        'width' => '10%',
        'default' => true,
        'name' => 'accounts_fp_event_locations_1_name',
      ),
      1 => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_ADDRESS_TYPE',
        'width' => '10%',
        'name' => 'address_type_c',
      ),
      2 => 
      array (
        'type' => 'varchar',
        'default' => true,
        'label' => 'LBL_ADDRESS',
        'width' => '10%',
        'name' => 'address',
      ),
      3 => 
      array (
        'type' => 'varchar',
        'default' => true,
        'label' => 'LBL_ADDRESS_POSTALCODE',
        'width' => '10%',
        'name' => 'address_postalcode',
      ),
      4 => 
      array (
        'type' => 'varchar',
        'default' => true,
        'label' => 'LBL_ADDRESS_CITY',
        'width' => '10%',
        'name' => 'address_city',
      ),
      5 => 
      array (
        'type' => 'varchar',
        'default' => true,
        'label' => 'LBL_ADDRESS_STATE',
        'width' => '10%',
        'name' => 'address_state',
      ),
      6 => 
      array (
        'type' => 'varchar',
        'default' => true,
        'label' => 'LBL_ADDRESS_COUNTRY',
        'width' => '10%',
        'name' => 'address_country',
      ),
    ),
  ),
);