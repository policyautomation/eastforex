<?php
 // created: 2018-10-20 17:07:41
$layout_defs["acc_EFBankAccount"]["subpanel_setup"]['tra_efdailytransaction_acc_efbankaccount'] = array (
  'order' => 100,
  'module' => 'tra_EFDailyTransaction',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_TRA_EFDAILYTRANSACTION_ACC_EFBANKACCOUNT_FROM_TRA_EFDAILYTRANSACTION_TITLE',
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
