<?php
 // created: 2018-12-05 22:58:52
$layout_defs["Accounts"]["subpanel_setup"]['acc_balance_accounts'] = array (
  'order' => 100,
  'module' => 'acc_Balance',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_ACC_BALANCE_ACCOUNTS_FROM_ACC_BALANCE_TITLE',
  'get_subpanel_data' => 'acc_balance_accounts',
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
