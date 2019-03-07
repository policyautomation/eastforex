<?php
$module_name = 'acc_Identity';
$_object_name = 'acc_identity';
$viewdefs [$module_name] = 
array (
  'DetailView' => 
  array (
    'templateMeta' => 
    array (
      'maxColumns' => '2',
      'form' => 
      array (
      ),
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
      'useTabs' => false,
      'tabDefs' => 
      array (
        'DEFAULT' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
      'syncDetailEditViews' => true,
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'id_number',
            'label' => 'LBL_ID_NUMBER',
          ),
          1 => 
          array (
            'name' => 'id_type',
            'studio' => 'visible',
            'label' => 'LBL_ID_TYPE',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'id_issue_authority',
            'label' => 'LBL_ID_ISSUE_AUTHORITY',
          ),
          1 => 'category_id',
        ),
        2 => 
        array (
          0 => 'exp_date',
          1 => 'uploadfile',
        ),
        3 => 
        array (
          0 => 'description',
        ),
      ),
    ),
  ),
);
;
?>
