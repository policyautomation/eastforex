<?php
$module_name = 'tra_CustomerFXRequest';
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
            'name' => 'fx_request_date',
            'label' => 'LBL_FX_REQUEST_DATE',
          ),
          1 => 
          array (
            'name' => 'fx_number',
            'label' => 'LBL_FX_NUMBER',
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
            'name' => 'tra_customerfxrequest_accounts_name',
            'label' => 'LBL_TRA_CUSTOMERFXREQUEST_ACCOUNTS_FROM_ACCOUNTS_TITLE',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'fx_rate',
            'label' => 'LBL_FX_RATE',
          ),
          1 => 
          array (
            'name' => 'rate_date',
            'label' => 'LBL_RATE_DATE',
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
            'name' => 'tra_customerfxrequest_tra_lockedrate_name',
            'label' => 'LBL_TRA_CUSTOMERFXREQUEST_TRA_LOCKEDRATE_FROM_TRA_LOCKEDRATE_TITLE',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'final_rate',
            'label' => 'LBL_FINAL_RATE',
          ),
          1 => 
          array (
            'name' => 'status',
            'studio' => 'visible',
            'label' => 'LBL_STATUS',
          ),
        ),
      ),
      'lbl_editview_panel1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'sold_currency_1',
            'studio' => 'visible',
            'label' => 'LBL_SOLD_CURRENCY_1',
          ),
          1 => 
          array (
            'name' => 'bought_currency_1',
            'studio' => 'visible',
            'label' => 'LBL_BOUGHT_CURRENCY_1',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'sold_term_1',
            'studio' => 'visible',
            'label' => 'LBL_SOLD_TERM_1',
          ),
          1 => 
          array (
            'name' => 'bought_term_1',
            'studio' => 'visible',
            'label' => 'LBL_BOUGHT_TERM_1',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'sold_amount_1',
            'label' => 'LBL_SOLD_AMOUNT_1',
          ),
          1 => 
          array (
            'name' => 'bought_amount_1',
            'label' => 'LBL_BOUGHT_AMOUNT_1',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'sold_currency_2',
            'studio' => 'visible',
            'label' => 'LBL_SOLD_CURRENCY_2',
          ),
          1 => 
          array (
            'name' => 'bought_currency_2',
            'studio' => 'visible',
            'label' => 'LBL_BOUGHT_CURRENCY_2',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'sold_term_2',
            'studio' => 'visible',
            'label' => 'LBL_SOLD_TERM_2',
          ),
          1 => 
          array (
            'name' => 'bought_term_2',
            'studio' => 'visible',
            'label' => 'LBL_BOUGHT_TERM_2',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'sold_amount_2',
            'label' => 'LBL_SOLD_AMOUNT_2',
          ),
          1 => 
          array (
            'name' => 'bought_amount_2',
            'label' => 'LBL_BOUGHT_AMOUNT_2',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'override_sold_amount',
            'label' => 'LBL_OVERRIDE_SOLD_AMOUNT',
          ),
          1 => 
          array (
            'name' => 'override_bought_amount',
            'label' => 'LBL_OVERRIDE_BOUGHT_AMOUNT',
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'sold_total_amount',
            'label' => 'LBL_SOLD_TOTAL_AMOUNT',
          ),
          1 => 
          array (
            'name' => 'bought_total_amount',
            'label' => 'LBL_BOUGHT_TOTAL_AMOUNT',
          ),
        ),
        8 => 
        array (
          0 => 
          array (
            'name' => 'sold_balance',
            'studio' => 'visible',
            'label' => 'LBL_SOLD_BALANCE',
          ),
          1 => 
          array (
            'name' => 'bought_balance',
            'studio' => 'visible',
            'label' => 'LBL_BOUGHT_BALANCE',
          ),
        ),
      ),
      'lbl_editview_panel2' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'description',
            'comment' => 'Full text of the note',
            'label' => 'LBL_DESCRIPTION',
          ),
        ),
      ),
    ),
  ),
);
;
?>
