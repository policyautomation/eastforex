<?php
$searchdefs ['Documents'] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'document_name' => 
      array (
        'name' => 'document_name',
        'default' => true,
        'width' => '10%',
      ),
      'filename' => 
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
      'document_name' => 
      array (
        'name' => 'document_name',
        'default' => true,
        'width' => '10%',
      ),
      'filename' => 
      array (
        'type' => 'file',
        'label' => 'LBL_FILENAME',
        'width' => '10%',
        'default' => true,
        'name' => 'filename',
      ),
      'status' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_DOC_STATUS',
        'width' => '10%',
        'default' => true,
        'name' => 'status',
      ),
      'template_type' => 
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
;
?>
