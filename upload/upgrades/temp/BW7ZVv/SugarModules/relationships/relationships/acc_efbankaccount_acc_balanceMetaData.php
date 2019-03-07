<?php
// created: 2018-10-16 22:17:12
$dictionary["acc_efbankaccount_acc_balance"] = array (
  'true_relationship_type' => 'one-to-one',
  'relationships' => 
  array (
    'acc_efbankaccount_acc_balance' => 
    array (
      'lhs_module' => 'acc_EFBankAccount',
      'lhs_table' => 'acc_efbankaccount',
      'lhs_key' => 'id',
      'rhs_module' => 'acc_Balance',
      'rhs_table' => 'acc_balance',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'acc_efbankaccount_acc_balance_c',
      'join_key_lhs' => 'acc_efbankaccount_acc_balanceacc_efbankaccount_ida',
      'join_key_rhs' => 'acc_efbankaccount_acc_balanceacc_balance_idb',
    ),
  ),
  'table' => 'acc_efbankaccount_acc_balance_c',
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
      'name' => 'acc_efbankaccount_acc_balanceacc_efbankaccount_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'acc_efbankaccount_acc_balanceacc_balance_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'acc_efbankaccount_acc_balancespk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'acc_efbankaccount_acc_balance_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'acc_efbankaccount_acc_balanceacc_efbankaccount_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'acc_efbankaccount_acc_balance_idb2',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'acc_efbankaccount_acc_balanceacc_balance_idb',
      ),
    ),
  ),
);