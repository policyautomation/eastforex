<?php
$module_name = 'acc_Identity';
$viewdefs [$module_name] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'enctype' => 'multipart/form-data',
        'hidden' => 
        array (
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
      'javascript' => '{sugar_getscript file="include/javascript/popup_parent_helper.js"}
	{sugar_getscript file="cache/include/javascript/sugar_grp_jsolait.js"}
	{sugar_getscript file="modules/Documents/documents.js"}',
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
          1 => 
          array (
            'name' => 'acc_identity_accounts_name',
            'label' => 'LBL_ACC_IDENTITY_ACCOUNTS_FROM_ACCOUNTS_TITLE',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'uploadfile',
            'displayParams' => 
            array (
              'onchangeSetFileNameTo' => 'document_name',
            ),
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'description',
          ),
        ),
      ),
    ),
  ),
);
;
?>
