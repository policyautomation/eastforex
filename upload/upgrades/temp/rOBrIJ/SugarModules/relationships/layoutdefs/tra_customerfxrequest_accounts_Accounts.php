<?php
 // created: 2018-11-15 21:26:41
$layout_defs["Accounts"]["subpanel_setup"]['tra_customerfxrequest_accounts'] = array (
  'order' => 100,
  'module' => 'tra_CustomerFXRequest',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_TRA_CUSTOMERFXREQUEST_ACCOUNTS_FROM_TRA_CUSTOMERFXREQUEST_TITLE',
  'get_subpanel_data' => 'tra_customerfxrequest_accounts',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);
