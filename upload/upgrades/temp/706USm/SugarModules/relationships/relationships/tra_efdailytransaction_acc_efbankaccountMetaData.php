<?php
// created: 2018-10-29 21:52:42
$dictionary["tra_efdailytransaction_acc_efbankaccount"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'tra_efdailytransaction_acc_efbankaccount' => 
    array (
      'lhs_module' => 'acc_EFBankAccount',
      'lhs_table' => 'acc_efbankaccount',
      'lhs_key' => 'id',
      'rhs_module' => 'tra_EFDailyTransaction',
      'rhs_table' => 'tra_efdailytransaction',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'tra_efdailytransaction_acc_efbankaccount_c',
      'join_key_lhs' => 'tra_efdailytransaction_acc_efbankaccountacc_efbankaccount_ida',
      'join_key_rhs' => 'tra_efdail8cf2saction_idb',
    ),
  ),
  'table' => 'tra_efdailytransaction_acc_efbankaccount_c',
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
      'name' => 'tra_efdailytransaction_acc_efbankaccountacc_efbankaccount_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'tra_efdail8cf2saction_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'tra_efdailytransaction_acc_efbankaccountspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'tra_efdailytransaction_acc_efbankaccount_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'tra_efdailytransaction_acc_efbankaccountacc_efbankaccount_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'tra_efdailytransaction_acc_efbankaccount_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'tra_efdail8cf2saction_idb',
      ),
    ),
  ),
);