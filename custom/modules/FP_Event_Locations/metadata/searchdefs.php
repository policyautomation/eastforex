<?php
$module_name = 'FP_Event_Locations';
$searchdefs [$module_name] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'address' => 
      array (
        'type' => 'varchar',
        'default' => true,
        'label' => 'LBL_ADDRESS',
        'width' => '10%',
        'name' => 'address',
      ),
      'address_postalcode' => 
      array (
        'type' => 'varchar',
        'default' => true,
        'label' => 'LBL_ADDRESS_POSTALCODE',
        'width' => '10%',
        'name' => 'address_postalcode',
      ),
      'address_city' => 
      array (
        'type' => 'varchar',
        'default' => true,
        'label' => 'LBL_ADDRESS_CITY',
        'width' => '10%',
        'name' => 'address_city',
      ),
      'address_state' => 
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
      'accounts_fp_event_locations_1_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_ACCOUNTS_FP_EVENT_LOCATIONS_1_FROM_ACCOUNTS_TITLE',
        'id' => 'ACCOUNTS_FP_EVENT_LOCATIONS_1ACCOUNTS_IDA',
        'width' => '10%',
        'default' => true,
        'name' => 'accounts_fp_event_locations_1_name',
      ),
      'address_type_c' => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_ADDRESS_TYPE',
        'width' => '10%',
        'name' => 'address_type_c',
      ),
      'address' => 
      array (
        'type' => 'varchar',
        'default' => true,
        'label' => 'LBL_ADDRESS',
        'width' => '10%',
        'name' => 'address',
      ),
      'address_postalcode' => 
      array (
        'type' => 'varchar',
        'default' => true,
        'label' => 'LBL_ADDRESS_POSTALCODE',
        'width' => '10%',
        'name' => 'address_postalcode',
      ),
      'address_city' => 
      array (
        'type' => 'varchar',
        'default' => true,
        'label' => 'LBL_ADDRESS_CITY',
        'width' => '10%',
        'name' => 'address_city',
      ),
      'address_state' => 
      array (
        'type' => 'varchar',
        'default' => true,
        'label' => 'LBL_ADDRESS_STATE',
        'width' => '10%',
        'name' => 'address_state',
      ),
      'address_country' => 
      array (
        'type' => 'varchar',
        'default' => true,
        'label' => 'LBL_ADDRESS_COUNTRY',
        'width' => '10%',
        'name' => 'address_country',
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
