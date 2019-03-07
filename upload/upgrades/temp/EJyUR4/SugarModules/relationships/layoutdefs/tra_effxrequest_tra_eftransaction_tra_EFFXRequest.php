<?php
 // created: 2018-11-15 21:58:24
$layout_defs["tra_EFFXRequest"]["subpanel_setup"]['tra_effxrequest_tra_eftransaction'] = array (
  'order' => 100,
  'module' => 'tra_EFTransaction',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_TRA_EFFXREQUEST_TRA_EFTRANSACTION_FROM_TRA_EFTRANSACTION_TITLE',
  'get_subpanel_data' => 'tra_effxrequest_tra_eftransaction',
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
