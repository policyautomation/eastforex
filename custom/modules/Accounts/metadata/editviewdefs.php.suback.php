<?php
$viewdefs ['Accounts'] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'buttons' => 
        array (
          0 => 'SAVE',
          1 => 'CANCEL',
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
          'file' => 'custom/modules/Accounts/AccountCustom.js',
        ),
      ),
      'useTabs' => false,
      'tabDefs' => 
      array (
        'LBL_ACCOUNT_INFORMATION' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL1' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL2' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
      'syncDetailEditViews' => false,
    ),
    'panels' => 
    array (
      'lbl_account_information' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'type_c',
            'studio' => 'visible',
            'label' => 'LBL_TYPE',
          ),
          1 => 
          array (
            'name' => 'level_c',
            'studio' => 'visible',
            'label' => 'LBL_LEVEL',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'phone_office',
            'label' => 'LBL_PHONE_OFFICE',
          ),
          1 => 
          array (
            'name' => 'status_c',
            'studio' => 'visible',
            'label' => 'LBL_STATUS',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'phone_alternate',
            'comment' => 'An alternate phone number',
            'label' => 'LBL_PHONE_ALT',
          ),
          1 => 
          array (
            'name' => 'phone_fax',
            'label' => 'LBL_FAX',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'mobile_number_alt_c',
            'label' => 'LBL_MOBILE_NUMBER_ALT',
          ),
          1 => 
          array (
            'name' => 'referrer_c',
            'label' => 'LBL_REFERRER',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'email1',
            'studio' => 'false',
            'label' => 'LBL_EMAIL',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'description',
            'label' => 'LBL_DESCRIPTION',
          ),
        ),
      ),
      'lbl_editview_panel1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'first_name_c',
            'label' => 'LBL_FIRST_NAME',
          ),
          1 => 
          array (
            'name' => 'middle_name_c',
            'label' => 'LBL_MIDDLE_NAME',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'last_name_c',
            'label' => 'LBL_LAST_NAME',
          ),
          1 => 
          array (
            'name' => 'gender_c',
            'studio' => 'visible',
            'label' => 'LBL_GENDER',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'dob_c',
            'label' => 'LBL_DOB',
          ),
          1 => 
          array (
            'name' => 'occupation_c',
            'studio' => 'visible',
            'label' => 'LBL_OCCUPATION',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'wechat_id_c',
            'label' => 'LBL_WECHAT_ID',
          ),
          1 => 
          array (
            'name' => 'occupation_other_c',
            'label' => 'LBL_OCCUPATION_OTHER',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'linked_company_c',
            'studio' => 'visible',
            'label' => 'LBL_LINKED_COMPANY',
          ),
        ),
      ),
      'lbl_editview_panel2' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'company_name_c',
            'label' => 'LBL_COMPANY_NAME',
          ),
          1 => 
          array (
            'name' => 'abn_c',
            'label' => 'LBL_ABN',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'regulated_authority_c',
            'label' => 'LBL_REGULATED_AUTHORITY',
          ),
          1 => 
          array (
            'name' => 'structure_c',
            'studio' => 'visible',
            'label' => 'LBL_STRUCTURE',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'website',
            'type' => 'link',
            'label' => 'LBL_WEBSITE',
          ),
        ),
      ),
    ),
  ),
);
;
?>
