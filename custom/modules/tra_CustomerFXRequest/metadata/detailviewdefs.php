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
          4 =>
          array(
            'customCode' => '<input type="button" class="button" onClick="showPopup(\'pdf\');" value="{$MOD.LBL_PRINT_AS_PDF}">',
          ),
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
      'includes' =>
      array (
        0 =>
        array (
          'file' => 'custom/modules/tra_CustomerFXRequest/CustomerFXRequestCustom.js'
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
        'LBL_DETAILVIEW_PANEL3' => 
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
            'name' => 'fx_number',
            'label' => 'LBL_FX_NUMBER',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'fx_request_date',
            'label' => 'LBL_FX_REQUEST_DATE',
          ),
          1 => 
          array (
            'name' => 'rate_date',
            'label' => 'LBL_RATE_DATE',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'api_rate',
            'label' => 'LBL_API_RATE',
          ),
          1 => 
          array (
            'name' => 'direction',
            'studio' => 'visible',
            'label' => 'LBL_DIRECTION',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'fx_rate',
            'label' => 'LBL_FX_RATE',
          ),
          1 => 
          array (
            'name' => 'tra_customerfxrequest_accounts_name',
            'label' => 'LBL_TRA_CUSTOMERFXREQUEST_ACCOUNTS_FROM_ACCOUNTS_TITLE',
          ),
        ),
        4 => 
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
        5 => 
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
      'lbl_detailview_panel3' => 
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
        1 => 
        array (
          0 => 
          array (
            'name' => 'created_by_name',
            'label' => 'LBL_CREATED',
          ),
          1 => 
          array (
            'name' => 'assigned_user_name',
            'label' => 'LBL_ASSIGNED_TO_NAME',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'date_entered',
            'comment' => 'Date record created',
            'label' => 'LBL_DATE_ENTERED',
          ),
          1 => 
          array (
            'name' => 'modified_by_name',
            'label' => 'LBL_MODIFIED_NAME',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'date_modified',
            'comment' => 'Date record last modified',
            'label' => 'LBL_DATE_MODIFIED',
          ),
          1 => 
          array (
            'name' => 'transaction_created',
            'label' => 'LBL_TRANSACTION_CREATED',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'locked_rate_balance',
            'label' => 'LBL_LOCKED_RATE_BALANCE',
          ),
          1 => 
          array (
            'name' => 'currency_pair_c',
            'studio' => 'visible',
            'label' => 'LBL_CURRENCY_PAIR',
          ),
        ),
      ),
    ),
  ),
);
;
?>
