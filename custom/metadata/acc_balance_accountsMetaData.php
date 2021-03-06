<?php
// created: 2018-12-05 22:58:52
$dictionary["acc_balance_accounts"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'acc_balance_accounts' => 
    array (
      'lhs_module' => 'Accounts',
      'lhs_table' => 'accounts',
      'lhs_key' => 'id',
      'rhs_module' => 'acc_Balance',
      'rhs_table' => 'acc_balance',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'acc_balance_accounts_c',
      'join_key_lhs' => 'acc_balance_accountsaccounts_ida',
      'join_key_rhs' => 'acc_balance_accountsacc_balance_idb',
    ),
  ),
  'table' => 'acc_balance_accounts_c',
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
      'name' => 'acc_balance_accountsaccounts_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'acc_balance_accountsacc_balance_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'acc_balance_accountsspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'acc_balance_accounts_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'acc_balance_accountsaccounts_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'acc_balance_accounts_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'acc_balance_accountsacc_balance_idb',
      ),
    ),
  ),
);