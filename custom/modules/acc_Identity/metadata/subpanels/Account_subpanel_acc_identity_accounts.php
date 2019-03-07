<?php
// created: 2018-12-10 23:01:52
$subpanel_layout['list_fields'] = array (
  'document_name' => 
  array (
    'name' => 'document_name',
    'vname' => 'LBL_LIST_DOCUMENT_NAME',
    'widget_class' => 'SubPanelDetailViewLink',
    'width' => '45%',
    'default' => true,
  ),
  'id_type' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'vname' => 'LBL_ID_TYPE',
    'width' => '10%',
    'default' => true,
  ),
  'id_number' => 
  array (
    'type' => 'varchar',
    'vname' => 'LBL_ID_NUMBER',
    'width' => '10%',
    'default' => true,
  ),
  'id_issue_authority' => 
  array (
    'type' => 'varchar',
    'vname' => 'LBL_ID_ISSUE_AUTHORITY',
    'width' => '10%',
    'default' => true,
  ),
  'exp_date' => 
  array (
    'type' => 'date',
    'vname' => 'LBL_DOC_EXP_DATE',
    'width' => '10%',
    'default' => true,
  ),
  'edit_button' => 
  array (
    'vname' => 'LBL_EDIT_BUTTON',
    'widget_class' => 'SubPanelEditButton',
    'module' => 'acc_Identity',
    'width' => '5%',
    'default' => true,
  ),
  'remove_button' => 
  array (
    'vname' => 'LBL_REMOVE',
    'widget_class' => 'SubPanelRemoveButton',
    'module' => 'acc_Identity',
    'width' => '5%',
    'default' => true,
  ),
);