<?php
 // created: 2018-11-17 14:04:57
$layout_defs["acc_EFBankAccount"]["subpanel_setup"]['tra_efdailytransaction_acc_efbankaccount'] = array (
  'order' => 100,
  'module' => 'tra_EFTransaction',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_TRA_EFDAILYTRANSACTION_ACC_EFBANKACCOUNT_FROM_TRA_EFTRANSACTION_TITLE',
  'get_subpanel_data' => 'tra_efdailytransaction_acc_efbankaccount',
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
