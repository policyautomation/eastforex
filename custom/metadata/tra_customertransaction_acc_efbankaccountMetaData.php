<?php
// created: 2019-02-11 22:25:17
$dictionary["tra_customertransaction_acc_efbankaccount"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'tra_customertransaction_acc_efbankaccount' => 
    array (
      'lhs_module' => 'acc_EFBankAccount',
      'lhs_table' => 'acc_efbankaccount',
      'lhs_key' => 'id',
      'rhs_module' => 'tra_CustomerTransaction',
      'rhs_table' => 'tra_customertransaction',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'tra_customertransaction_acc_efbankaccount_c',
      'join_key_lhs' => 'tra_customertransaction_acc_efbankaccountacc_efbankaccount_ida',
      'join_key_rhs' => 'tra_custom7282saction_idb',
    ),
  ),
  'table' => 'tra_customertransaction_acc_efbankaccount_c',
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
      'name' => 'tra_customertransaction_acc_efbankaccountacc_efbankaccount_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'tra_custom7282saction_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'tra_customertransaction_acc_efbankaccountspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'tra_customertransaction_acc_efbankaccount_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'tra_customertransaction_acc_efbankaccountacc_efbankaccount_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'tra_customertransaction_acc_efbankaccount_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'tra_custom7282saction_idb',
      ),
    ),
  ),
);