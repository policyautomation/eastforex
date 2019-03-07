<?php
$module_name = 'acc_Identity';
$searchdefs [$module_name] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'id_number' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_ID_NUMBER',
        'width' => '10%',
        'default' => true,
        'name' => 'id_number',
      ),
      'id_type' => 
      array (
        'type' => 'enum',
        'studio' => 'visible',
        'label' => 'LBL_ID_TYPE',
        'width' => '10%',
        'default' => true,
        'name' => 'id_type',
      ),
    ),
    'advanced_search' => 
    array (
      0 => 'document_name',
      1 => 'category_id',
      2 => 'subcategory_id',
      3 => 'active_date',
      4 => 'exp_date',
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
