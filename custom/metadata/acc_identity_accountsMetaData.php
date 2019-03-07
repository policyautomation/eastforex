<?php
// created: 2018-12-05 22:58:53
$dictionary["acc_identity_accounts"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'acc_identity_accounts' => 
    array (
      'lhs_module' => 'Accounts',
      'lhs_table' => 'accounts',
      'lhs_key' => 'id',
      'rhs_module' => 'acc_Identity',
      'rhs_table' => 'acc_identity',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'acc_identity_accounts_c',
      'join_key_lhs' => 'acc_identity_accountsaccounts_ida',
      'join_key_rhs' => 'acc_identity_accountsacc_identity_idb',
    ),
  ),
  'table' => 'acc_identity_accounts_c',
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
      'name' => 'acc_identity_accountsaccounts_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'acc_identity_accountsacc_identity_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'acc_identity_accountsspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'acc_identity_accounts_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'acc_identity_accountsaccounts_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'acc_identity_accounts_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'acc_identity_accountsacc_identity_idb',
      ),
    ),
  ),
);