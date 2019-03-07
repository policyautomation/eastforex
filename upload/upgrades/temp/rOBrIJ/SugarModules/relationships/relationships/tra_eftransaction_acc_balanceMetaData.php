<?php
// created: 2018-11-15 21:26:44
$dictionary["tra_eftransaction_acc_balance"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'tra_eftransaction_acc_balance' => 
    array (
      'lhs_module' => 'acc_Balance',
      'lhs_table' => 'acc_balance',
      'lhs_key' => 'id',
      'rhs_module' => 'tra_EFTransaction',
      'rhs_table' => 'tra_eftransaction',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'tra_eftransaction_acc_balance_c',
      'join_key_lhs' => 'tra_eftransaction_acc_balanceacc_balance_ida',
      'join_key_rhs' => 'tra_eftransaction_acc_balancetra_eftransaction_idb',
    ),
  ),
  'table' => 'tra_eftransaction_acc_balance_c',
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
      'name' => 'tra_eftransaction_acc_balanceacc_balance_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'tra_eftransaction_acc_balancetra_eftransaction_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'tra_eftransaction_acc_balancespk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'tra_eftransaction_acc_balance_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'tra_eftransaction_acc_balanceacc_balance_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'tra_eftransaction_acc_balance_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'tra_eftransaction_acc_balancetra_eftransaction_idb',
      ),
    ),
  ),
);