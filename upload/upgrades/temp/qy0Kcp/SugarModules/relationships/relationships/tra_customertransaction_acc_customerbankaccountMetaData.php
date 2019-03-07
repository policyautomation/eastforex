<?php
// created: 2018-11-02 10:02:07
$dictionary["tra_customertransaction_acc_customerbankaccount"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'tra_customertransaction_acc_customerbankaccount' => 
    array (
      'lhs_module' => 'acc_CustomerBankAccount',
      'lhs_table' => 'acc_customerbankaccount',
      'lhs_key' => 'id',
      'rhs_module' => 'tra_CustomerTransaction',
      'rhs_table' => 'tra_customertransaction',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'tra_customertransaction_acc_customerbankaccount_c',
      'join_key_lhs' => 'tra_custom1e70account_ida',
      'join_key_rhs' => 'tra_custom2946saction_idb',
    ),
  ),
  'table' => 'tra_customertransaction_acc_customerbankaccount_c',
  'fields' => 
  array (
    0 => 
    array (
      'name' => 'id',
      'type' => 'varchar',
      'len' => 36,
    ),
    1 => 
    array (
      'name' => 'date_modified',
      'type' => 'datetime',
    ),
    2 => 
    array (
      'name' => 'deleted',
      'type' => 'bool',
      'len' => '1',
      'default' => '0',
      'required' => true,
    ),
    3 => 
    array (
      'name' => 'tra_custom1e70account_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'tra_custom2946saction_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'tra_customertransaction_acc_customerbankaccountspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'tra_customertransaction_acc_customerbankaccount_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'tra_custom1e70account_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'tra_customertransaction_acc_customerbankaccount_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'tra_custom2946saction_idb',
      ),
    ),
  ),
);