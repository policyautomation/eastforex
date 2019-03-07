<?php
// created: 2018-12-10 23:03:37
$subpanel_layout['list_fields'] = array (
  'name' => 
  array (
    'vname' => 'LBL_NAME',
    'widget_class' => 'SubPanelDetailViewLink',
    'width' => '45%',
    'default' => true,
  ),
  'address_type_c' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'vname' => 'LBL_ADDRESS_TYPE',
    'width' => '10%',
  ),
  'address' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'vname' => 'LBL_ADDRESS',
    'width' => '10%',
  ),
  'address_city' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'vname' => 'LBL_ADDRESS_CITY',
    'width' => '10%',
  ),
  'address_state' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'vname' => 'LBL_ADDRESS_STATE',
    'width' => '10%',
  ),
  'address_country' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'vname' => 'LBL_ADDRESS_COUNTRY',
    'width' => '10%',
  ),
  'address_postalcode' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'vname' => 'LBL_ADDRESS_POSTALCODE',
    'width' => '10%',
  ),
  'edit_button' => 
  array (
    'vname' => 'LBL_EDIT_BUTTON',
    'widget_class' => 'SubPanelEditButton',
    'module' => 'FP_Event_Locations',
    'width' => '4%',
    'default' => true,
  ),
  'remove_button' => 
  array (
    'vname' => 'LBL_REMOVE',
    'widget_class' => 'SubPanelRemoveButton',
    'module' => 'FP_Event_Locations',
    'width' => '5%',
    'default' => true,
  ),
);