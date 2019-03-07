<?php
 // created: 2018-11-15 21:58:25
$layout_defs["acc_Balance"]["subpanel_setup"]['tra_eftransaction_acc_balance'] = array (
  'order' => 100,
  'module' => 'tra_EFTransaction',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_TRA_EFTRANSACTION_ACC_BALANCE_FROM_TRA_EFTRANSACTION_TITLE',
  'get_subpanel_data' => 'tra_eftransaction_acc_balance',
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
