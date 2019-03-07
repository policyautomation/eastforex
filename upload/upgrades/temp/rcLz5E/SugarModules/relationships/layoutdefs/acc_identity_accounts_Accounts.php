<?php
 // created: 2018-10-16 21:52:46
$layout_defs["Accounts"]["subpanel_setup"]['acc_identity_accounts'] = array (
  'order' => 100,
  'module' => 'acc_Identity',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_ACC_IDENTITY_ACCOUNTS_FROM_ACC_IDENTITY_TITLE',
  'get_subpanel_data' => 'acc_identity_accounts',
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
