<?php
// created: 2019-04-10 13:34:27
$viewdefs['Documents']['QuickCreate'] = array (
  'templateMeta' => 
  array (
    'form' => 
    array (
      'enctype' => 'multipart/form-data',
      'hidden' => 
      array (
        0 => '<input type="hidden" name="old_id" value="{$fields.document_revision_id.value}">',
        1 => '<input type="hidden" name="parent_id" value="{$smarty.request.parent_id}">',
        2 => '<input type="hidden" name="parent_type" value="{$smarty.request.parent_type}">',
      ),
    ),
    'maxColumns' => '2',
    'widths' => 
    array (
      0 => 
      array (
        'label' => '10',
        'field' => '30',
      ),
      1 => 
      array (
        'label' => '10',
        'field' => '30',
      ),
    ),
    'includes' => 
    array (
      0 => 
      array (
        'file' => 'include/javascript/popup_parent_helper.js',
      ),
      1 => 
      array (
        'file' => 'cache/include/javascript/sugar_grp_jsolait.js',
      ),
      2 => 
      array (
        'file' => 'modules/Documents/documents.js',
      ),
    ),
    'useTabs' => false,
    'tabDefs' => 
    array (
      'DEFAULT' => 
      array (
        'newTab' => false,
        'panelDefault' => 'expanded',
      ),
    ),
  ),
  'panels' => 
  array (
    'default' => 
    array (
      0 => 
      array (
        0 => 'document_name',
        1 => 'status_id',
      ),
      1 => 
      array (
        0 => 
        array (
          'name' => 'filename',
          'displayParams' => 
          array (
            'required' => true,
            'onchangeSetFileNameTo' => 'document_name',
          ),
        ),
      ),
    ),
  ),
);