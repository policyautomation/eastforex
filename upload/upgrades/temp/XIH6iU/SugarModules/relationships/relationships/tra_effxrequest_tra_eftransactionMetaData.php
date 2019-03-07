<?php
// created: 2019-02-07 22:10:34
$dictionary["tra_effxrequest_tra_eftransaction"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'tra_effxrequest_tra_eftransaction' => 
    array (
      'lhs_module' => 'tra_EFFXRequest',
      'lhs_table' => 'tra_effxrequest',
      'lhs_key' => 'id',
      'rhs_module' => 'tra_EFTransaction',
      'rhs_table' => 'tra_eftransaction',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'tra_effxrequest_tra_eftransaction_c',
      'join_key_lhs' => 'tra_effxrequest_tra_eftransactiontra_effxrequest_ida',
      'join_key_rhs' => 'tra_effxrequest_tra_eftransactiontra_eftransaction_idb',
    ),
  ),
  'table' => 'tra_effxrequest_tra_eftransaction_c',
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
      'name' => 'tra_effxrequest_tra_eftransactiontra_effxrequest_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'tra_effxrequest_tra_eftransactiontra_eftransaction_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'tra_effxrequest_tra_eftransactionspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'tra_effxrequest_tra_eftransaction_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'tra_effxrequest_tra_eftransactiontra_effxrequest_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'tra_effxrequest_tra_eftransaction_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'tra_effxrequest_tra_eftransactiontra_eftransaction_idb',
      ),
    ),
  ),
);