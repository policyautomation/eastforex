<?php
$searchdefs ['Accounts'] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'name' => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'customer_number_c' => 
      array (
        'type' => 'varchar',
        'default' => true,
        'label' => 'LBL_CUSTOMER_NUMBER',
        'width' => '10%',
        'name' => 'customer_number_c',
      ),
      'phone_alternate' => 
      array (
        'type' => 'phone',
        'label' => 'LBL_PHONE_ALT',
        'width' => '10%',
        'default' => true,
        'name' => 'phone_alternate',
      ),
      'phone_office' => 
      array (
        'type' => 'phone',
        'label' => 'LBL_PHONE_OFFICE',
        'width' => '10%',
        'default' => true,
        'name' => 'phone_office',
      ),
    ),
    'advanced_search' => 
    array (
      'name' => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'website' => 
      array (
        'name' => 'website',
        'default' => true,
        'width' => '10%',
      ),
      'phone' => 
      array (
        'name' => 'phone',
        'label' => 'LBL_ANY_PHONE',
        'type' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'email' => 
      array (
        'name' => 'email',
        'label' => 'LBL_ANY_EMAIL',
        'type' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'wechat_id_c' => 
      array (
        'type' => 'varchar',
        'default' => true,
        'label' => 'LBL_WECHAT_ID',
        'width' => '10%',
        'name' => 'wechat_id_c',
      ),
      'dob_c' => 
      array (
        'type' => 'date',
        'default' => true,
        'label' => 'LBL_DOB',
        'width' => '10%',
        'name' => 'dob_c',
      ),
      'abn_c' => 
      array (
        'type' => 'varchar',
        'default' => true,
        'label' => 'LBL_ABN',
        'width' => '10%',
        'name' => 'abn_c',
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
