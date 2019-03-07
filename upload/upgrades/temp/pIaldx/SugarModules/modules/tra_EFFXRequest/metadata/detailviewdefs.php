<?php
$module_name = 'tra_EFFXRequest';
$viewdefs [$module_name] = 
array (
  'DetailView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'buttons' => 
        array (
          0 => 'EDIT',
          1 => 'DUPLICATE',
          2 => 'DELETE',
          3 => 'FIND_DUPLICATES',
        ),
      ),
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
      'syncDetailEditViews' => true,
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'bought_ef_bank_account',
            'studio' => 'visible',
            'label' => 'LBL_BOUGHT_EF_BANK_ACCOUNT',
          ),
          1 => 
          array (
            'name' => 'sold_ef_bank_account',
            'studio' => 'visible',
            'label' => 'LBL_SOLD_EF_BANK_ACCOUNT',
          ),
        ),
        1 => 
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
        2 => 
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
        3 => 
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
        4 => 
        array (
          0 => 
          array (
            'name' => 'status',
            'studio' => 'visible',
            'label' => 'LBL_STATUS',
          ),
          1 => '',
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
