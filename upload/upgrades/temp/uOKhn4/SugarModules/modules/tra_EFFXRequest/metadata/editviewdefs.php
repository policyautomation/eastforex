<?php
$module_name = 'tra_EFFXRequest';
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
        'DEFAULT' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
      'syncDetailEditViews' => false,
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'bought_currency',
            'studio' => 'visible',
            'label' => 'LBL_BOUGHT_CURRENCY',
          ),
          1 => 
          array (
            'name' => 'sold_currency',
            'studio' => 'visible',
            'label' => 'LBL_SOLD_CURRENCY',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'bought_amount',
            'label' => 'LBL_BOUGHT_AMOUNT',
          ),
          1 => 
          array (
            'name' => 'sold_amount',
            'label' => 'LBL_SOLD_AMOUNT',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'fx_request_date',
            'label' => 'LBL_FX_REQUEST_DATE',
          ),
          1 => 
          array (
            'name' => 'rate',
            'label' => 'LBL_RATE',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'bought_balance',
            'studio' => 'visible',
            'label' => 'LBL_BOUGHT_BALANCE',
          ),
          1 => 
          array (
            'name' => 'sold_balance',
            'studio' => 'visible',
            'label' => 'LBL_SOLD_BALANCE',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'status',
            'studio' => 'visible',
            'label' => 'LBL_STATUS',
          ),
        ),
        5 => 
        array (
          0 => 'description',
        ),
      ),
    ),
  ),
);
;
?>
