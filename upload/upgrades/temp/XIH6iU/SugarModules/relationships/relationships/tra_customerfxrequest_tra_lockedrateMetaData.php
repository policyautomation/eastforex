<?php
// created: 2019-02-07 22:10:34
$dictionary["tra_customerfxrequest_tra_lockedrate"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'tra_customerfxrequest_tra_lockedrate' => 
    array (
      'lhs_module' => 'tra_LockedRate',
      'lhs_table' => 'tra_lockedrate',
      'lhs_key' => 'id',
      'rhs_module' => 'tra_CustomerFXRequest',
      'rhs_table' => 'tra_customerfxrequest',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'tra_customerfxrequest_tra_lockedrate_c',
      'join_key_lhs' => 'tra_customerfxrequest_tra_lockedratetra_lockedrate_ida',
      'join_key_rhs' => 'tra_customerfxrequest_tra_lockedratetra_customerfxrequest_idb',
    ),
  ),
  'table' => 'tra_customerfxrequest_tra_lockedrate_c',
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
      'name' => 'tra_customerfxrequest_tra_lockedratetra_lockedrate_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'tra_customerfxrequest_tra_lockedratetra_customerfxrequest_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'tra_customerfxrequest_tra_lockedratespk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'tra_customerfxrequest_tra_lockedrate_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'tra_customerfxrequest_tra_lockedratetra_lockedrate_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'tra_customerfxrequest_tra_lockedrate_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'tra_customerfxrequest_tra_lockedratetra_customerfxrequest_idb',
      ),
    ),
  ),
);