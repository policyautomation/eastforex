<?php
 // created: 2018-11-01 21:41:39
$layout_defs["acc_Balance"]["subpanel_setup"]['tra_customertransaction_acc_balance'] = array (
  'order' => 100,
  'module' => 'tra_CustomerTransaction',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_TRA_CUSTOMERTRANSACTION_ACC_BALANCE_FROM_TRA_CUSTOMERTRANSACTION_TITLE',
  'get_subpanel_data' => 'tra_customertransaction_acc_balance',
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
