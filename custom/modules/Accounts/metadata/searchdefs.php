<?php
// created: 2019-04-10 13:34:27
$searchdefs['Accounts'] = array (
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
  'layout' => 
  array (
    'basic_search' => 
    array (
      0 => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      1 => 
      array (
        'type' => 'varchar',
        'default' => true,
        'label' => 'LBL_CUSTOMER_NUMBER',
        'width' => '10%',
        'name' => 'customer_number_c',
      ),
      2 => 
      array (
        'type' => 'phone',
        'label' => 'LBL_PHONE_ALT',
        'width' => '10%',
        'default' => true,
        'name' => 'phone_alternate',
      ),
      3 => 
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
      0 => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      1 => 
      array (
        'name' => 'website',
        'default' => true,
        'width' => '10%',
      ),
      2 => 
      array (
        'name' => 'phone',
        'label' => 'LBL_ANY_PHONE',
        'type' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      3 => 
      array (
        'name' => 'email',
        'label' => 'LBL_ANY_EMAIL',
        'type' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      4 => 
      array (
        'type' => 'varchar',
        'default' => true,
        'label' => 'LBL_WECHAT_ID',
        'width' => '10%',
        'name' => 'wechat_id_c',
      ),
      5 => 
      array (
        'type' => 'date',
        'default' => true,
        'label' => 'LBL_DOB',
        'width' => '10%',
        'name' => 'dob_c',
      ),
      6 => 
      array (
        'type' => 'varchar',
        'default' => true,
        'label' => 'LBL_ABN',
        'width' => '10%',
        'name' => 'abn_c',
      ),
    ),
  ),
);