<?php
// created: 2018-10-20 15:32:45
$dictionary["tra_customertransaction_accounts"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'tra_customertransaction_accounts' => 
    array (
      'lhs_module' => 'Accounts',
      'lhs_table' => 'accounts',
      'lhs_key' => 'id',
      'rhs_module' => 'tra_CustomerTransaction',
      'rhs_table' => 'tra_customertransaction',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'tra_customertransaction_accounts_c',
      'join_key_lhs' => 'tra_customertransaction_accountsaccounts_ida',
      'join_key_rhs' => 'tra_customertransaction_accountstra_customertransaction_idb',
    ),
  ),
  'table' => 'tra_customertransaction_accounts_c',
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
      'name' => 'tra_customertransaction_accountsaccounts_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'tra_customertransaction_accountstra_customertransaction_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'tra_customertransaction_accountsspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'tra_customertransaction_accounts_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'tra_customertransaction_accountsaccounts_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'tra_customertransaction_accounts_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'tra_customertransaction_accountstra_customertransaction_idb',
      ),
    ),
  ),
);