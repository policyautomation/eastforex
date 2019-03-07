<?php
 // created: 2018-10-15 21:54:58
$layout_defs["acc_CustomerBankAccount"]["subpanel_setup"]['acc_customerbankaccount_tra_customertransaction'] = array (
  'order' => 100,
  'module' => 'tra_CustomerTransaction',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_ACC_CUSTOMERBANKACCOUNT_TRA_CUSTOMERTRANSACTION_FROM_TRA_CUSTOMERTRANSACTION_TITLE',
  'get_subpanel_data' => 'acc_customerbankaccount_tra_customertransaction',
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
