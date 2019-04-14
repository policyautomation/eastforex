<?php
$module_name = 'FP_Event_Locations';
$viewdefs [$module_name] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
      'maxColumns' => '2',
      'widths' => 
      array (
        0 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
        1 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
      ),
      'useTabs' => false,
      'tabDefs' => 
      array (
        'LBL_EDITVIEW_PANEL1' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
      'syncDetailEditViews' => true,
    ),
    'panels' => 
    array (
      'lbl_editview_panel1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'accounts_fp_event_locations_1_name',
            'label' => 'LBL_ACCOUNTS_FP_EVENT_LOCATIONS_1_FROM_ACCOUNTS_TITLE',
          ),
          1 => 
          array (
            'name' => 'address_type_c',
            'studio' => 'visible',
            'label' => 'LBL_ADDRESS_TYPE',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'address',
            'label' => 'LBL_ADDRESS',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'address_city',
            'label' => 'LBL_ADDRESS_CITY',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'address_postalcode',
            'label' => 'LBL_ADDRESS_POSTALCODE',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'address_state',
            'label' => 'LBL_ADDRESS_STATE',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'address_country',
            'label' => 'LBL_ADDRESS_COUNTRY',
          ),
        ),
      ),
    ),
  ),
);
;
?>
