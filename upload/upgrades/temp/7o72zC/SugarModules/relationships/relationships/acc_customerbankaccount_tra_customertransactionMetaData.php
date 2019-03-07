<?php
// created: 2018-10-15 22:08:13
$dictionary["acc_customerbankaccount_tra_customertransaction"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'acc_customerbankaccount_tra_customertransaction' => 
    array (
      'lhs_module' => 'acc_CustomerBankAccount',
      'lhs_table' => 'acc_customerbankaccount',
      'lhs_key' => 'id',
      'rhs_module' => 'tra_CustomerTransaction',
      'rhs_table' => 'tra_customertransaction',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'acc_customerbankaccount_tra_customertransaction_c',
      'join_key_lhs' => 'acc_custom1a95account_ida',
      'join_key_rhs' => 'acc_custom55c1saction_idb',
    ),
  ),
  'table' => 'acc_customerbankaccount_tra_customertransaction_c',
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
      'name' => 'acc_custom1a95account_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'acc_custom55c1saction_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'acc_customerbankaccount_tra_customertransactionspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'acc_customerbankaccount_tra_customertransaction_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'acc_custom1a95account_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'acc_customerbankaccount_tra_customertransaction_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'acc_custom55c1saction_idb',
      ),
    ),
  ),
);