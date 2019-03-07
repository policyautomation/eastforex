<?php
 // created: 2018-10-15 22:13:45
$layout_defs["tra_LockedRate"]["subpanel_setup"]['tra_customerfxrequest_tra_lockedrate'] = array (
  'order' => 100,
  'module' => 'tra_CustomerFXRequest',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_TRA_CUSTOMERFXREQUEST_TRA_LOCKEDRATE_FROM_TRA_CUSTOMERFXREQUEST_TITLE',
  'get_subpanel_data' => 'tra_customerfxrequest_tra_lockedrate',
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
