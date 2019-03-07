<?php
 // created: 2018-11-02 11:22:39
$layout_defs["tra_CustomerFXRequest"]["subpanel_setup"]['tra_customerfxrequest_tra_customertransaction'] = array (
  'order' => 100,
  'module' => 'tra_CustomerTransaction',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_TRA_CUSTOMERFXREQUEST_TRA_CUSTOMERTRANSACTION_FROM_TRA_CUSTOMERTRANSACTION_TITLE',
  'get_subpanel_data' => 'tra_customerfxrequest_tra_customertransaction',
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
