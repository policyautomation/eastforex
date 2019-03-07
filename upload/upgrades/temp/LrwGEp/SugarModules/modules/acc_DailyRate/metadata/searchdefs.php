<?php
$module_name = 'acc_DailyRate';
$searchdefs [$module_name] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'rate_date' => 
      array (
        'type' => 'date',
        'label' => 'LBL_RATE_DATE',
        'width' => '10%',
        'default' => true,
        'name' => 'rate_date',
      ),
      'currency_pair' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_CURRENCY_PAIR',
        'width' => '10%',
        'default' => true,
        'name' => 'currency_pair',
      ),
    ),
    'advanced_search' => 
    array (
      'rate_date' => 
      array (
        'type' => 'date',
        'label' => 'LBL_RATE_DATE',
        'width' => '10%',
        'default' => true,
        'name' => 'rate_date',
      ),
      'currency_pair' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_CURRENCY_PAIR',
        'width' => '10%',
        'default' => true,
        'name' => 'currency_pair',
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
