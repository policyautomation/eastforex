<?php
// created: 2019-04-10 13:34:27
$searchdefs['Documents'] = array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      0 => 
      array (
        'name' => 'document_name',
        'default' => true,
        'width' => '10%',
      ),
      1 => 
      array (
        'type' => 'file',
        'label' => 'LBL_FILENAME',
        'width' => '10%',
        'default' => true,
        'name' => 'filename',
      ),
    ),
    'advanced_search' => 
    array (
      0 => 
      array (
        'name' => 'document_name',
        'default' => true,
        'width' => '10%',
      ),
      1 => 
      array (
        'type' => 'file',
        'label' => 'LBL_FILENAME',
        'width' => '10%',
        'default' => true,
        'name' => 'filename',
      ),
      2 => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_DOC_STATUS',
        'width' => '10%',
        'default' => true,
        'name' => 'status',
      ),
      3 => 
      array (
        'type' => 'enum',
        'label' => 'LBL_TEMPLATE_TYPE',
        'width' => '10%',
        'default' => true,
        'name' => 'template_type',
      ),
    ),
  ),
  'templateMeta' => 
  array (
    'maxColumns' => '3',
    'maxColumnsBasic' => '4',
    'widths' => 
    array (
      'label' => '10',
      'field' => '30',
    ),
  ),
);