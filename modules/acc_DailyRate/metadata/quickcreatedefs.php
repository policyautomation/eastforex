<?php
$module_name = 'acc_DailyRate';
$viewdefs [$module_name] = 
array (
  'QuickCreate' => 
  array (
    'templateMeta' => 
    array (
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
          0 => 
          array (
            'name' => 'rate_date',
            'label' => 'LBL_RATE_DATE',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'rate',
            'label' => 'LBL_RATE',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'currency_pair',
            'label' => 'LBL_CURRENCY_PAIR',
          ),
        ),
      ),
    ),
  ),
);
;
?>
