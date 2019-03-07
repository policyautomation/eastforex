<?php
$module_name = 'tra_LockedRate';
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
        'LBL_EDITVIEW_PANEL1' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL2' => 
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
            'name' => 'name',
            'label' => 'LBL_NAME',
          ),
          1 => 
          array (
            'name' => 'tra_lockedrate_accounts_name',
            'label' => 'LBL_TRA_LOCKEDRATE_ACCOUNTS_FROM_ACCOUNTS_TITLE',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'direction',
            'studio' => 'visible',
            'label' => 'LBL_DIRECTION',
          ),
          1 => 
          array (
            'name' => 'api_rate',
            'label' => 'LBL_API_RATE',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'rate_date',
            'label' => 'LBL_RATE_DATE',
          ),
          1 => 
          array (
            'name' => 'fx_rate',
            'label' => 'LBL_FX_RATE',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'calculated_rate',
            'label' => 'LBL_CALCULATED_RATE',
          ),
          1 => 
          array (
            'name' => 'final_rate',
            'label' => 'LBL_FINAL_RATE',
          ),
        ),
      ),
      'lbl_editview_panel1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'sold_currency',
            'studio' => 'visible',
            'label' => 'LBL_SOLD_CURRENCY',
          ),
          1 => 
          array (
            'name' => 'bought_currency',
            'studio' => 'visible',
            'label' => 'LBL_BOUGHT_CURRENCY',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'sold_term',
            'studio' => 'visible',
            'label' => 'LBL_SOLD_TERM',
          ),
          1 => 
          array (
            'name' => 'bought_term',
            'studio' => 'visible',
            'label' => 'LBL_BOUGHT_TERM',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'sold_amount',
            'label' => 'LBL_SOLD_AMOUNT',
          ),
          1 => 
          array (
            'name' => 'bought_amount',
            'label' => 'LBL_BOUGHT_AMOUNT',
          ),
        ),
      ),
      'lbl_editview_panel2' => 
      array (
        0 => 
        array (
          0 => 'description',
        ),
      ),
    ),
  ),
);
;
?>
