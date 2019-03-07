<?php
// created: 2018-10-31 22:23:19
$dictionary["tra_customerfxrequest_tra_customertransaction"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'tra_customerfxrequest_tra_customertransaction' => 
    array (
      'lhs_module' => 'tra_CustomerFXRequest',
      'lhs_table' => 'tra_customerfxrequest',
      'lhs_key' => 'id',
      'rhs_module' => 'tra_CustomerTransaction',
      'rhs_table' => 'tra_customertransaction',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'tra_customerfxrequest_tra_customertransaction_c',
      'join_key_lhs' => 'tra_customc9d6request_ida',
      'join_key_rhs' => 'tra_custom41c1saction_idb',
    ),
  ),
  'table' => 'tra_customerfxrequest_tra_customertransaction_c',
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
      'name' => 'tra_customc9d6request_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'tra_custom41c1saction_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'tra_customerfxrequest_tra_customertransactionspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'tra_customerfxrequest_tra_customertransaction_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'tra_customc9d6request_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'tra_customerfxrequest_tra_customertransaction_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'tra_custom41c1saction_idb',
      ),
    ),
  ),
);