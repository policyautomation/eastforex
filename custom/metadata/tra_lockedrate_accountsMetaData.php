<?php
// created: 2019-02-11 22:25:17
$dictionary["tra_lockedrate_accounts"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'tra_lockedrate_accounts' => 
    array (
      'lhs_module' => 'Accounts',
      'lhs_table' => 'accounts',
      'lhs_key' => 'id',
      'rhs_module' => 'tra_LockedRate',
      'rhs_table' => 'tra_lockedrate',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'tra_lockedrate_accounts_c',
      'join_key_lhs' => 'tra_lockedrate_accountsaccounts_ida',
      'join_key_rhs' => 'tra_lockedrate_accountstra_lockedrate_idb',
    ),
  ),
  'table' => 'tra_lockedrate_accounts_c',
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
      'name' => 'tra_lockedrate_accountsaccounts_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'tra_lockedrate_accountstra_lockedrate_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'tra_lockedrate_accountsspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'tra_lockedrate_accounts_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'tra_lockedrate_accountsaccounts_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'tra_lockedrate_accounts_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'tra_lockedrate_accountstra_lockedrate_idb',
      ),
    ),
  ),
);