<?php
 // created: 2018-10-31 22:02:44
$layout_defs["Accounts"]["subpanel_setup"]['tra_lockedrate_accounts'] = array (
  'order' => 100,
  'module' => 'tra_LockedRate',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_TRA_LOCKEDRATE_ACCOUNTS_FROM_TRA_LOCKEDRATE_TITLE',
  'get_subpanel_data' => 'tra_lockedrate_accounts',
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
