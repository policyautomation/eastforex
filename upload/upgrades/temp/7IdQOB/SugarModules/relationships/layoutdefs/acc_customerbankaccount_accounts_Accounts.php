<?php
 // created: 2018-11-07 08:32:23
$layout_defs["Accounts"]["subpanel_setup"]['acc_customerbankaccount_accounts'] = array (
  'order' => 100,
  'module' => 'acc_CustomerBankAccount',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_ACC_CUSTOMERBANKACCOUNT_ACCOUNTS_FROM_ACC_CUSTOMERBANKACCOUNT_TITLE',
  'get_subpanel_data' => 'acc_customerbankaccount_accounts',
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
