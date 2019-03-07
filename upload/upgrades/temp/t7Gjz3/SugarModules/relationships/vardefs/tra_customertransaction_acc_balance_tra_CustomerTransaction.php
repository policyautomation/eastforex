<?php
// created: 2018-10-29 22:17:40
$dictionary["tra_CustomerTransaction"]["fields"]["tra_customertransaction_acc_balance"] = array (
  'name' => 'tra_customertransaction_acc_balance',
  'type' => 'link',
  'relationship' => 'tra_customertransaction_acc_balance',
  'source' => 'non-db',
  'module' => 'acc_Balance',
  'bean_name' => 'acc_Balance',
  'vname' => 'LBL_TRA_CUSTOMERTRANSACTION_ACC_BALANCE_FROM_ACC_BALANCE_TITLE',
  'id_name' => 'tra_customertransaction_acc_balanceacc_balance_ida',
);
$dictionary["tra_CustomerTransaction"]["fields"]["tra_customertransaction_acc_balance_name"] = array (
  'name' => 'tra_customertransaction_acc_balance_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_TRA_CUSTOMERTRANSACTION_ACC_BALANCE_FROM_ACC_BALANCE_TITLE',
  'save' => true,
  'id_name' => 'tra_customertransaction_acc_balanceacc_balance_ida',
  'link' => 'tra_customertransaction_acc_balance',
  'table' => 'acc_balance',
  'module' => 'acc_Balance',
  'rname' => 'name',
);
$dictionary["tra_CustomerTransaction"]["fields"]["tra_customertransaction_acc_balanceacc_balance_ida"] = array (
  'name' => 'tra_customertransaction_acc_balanceacc_balance_ida',
  'type' => 'link',
  'relationship' => 'tra_customertransaction_acc_balance',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_TRA_CUSTOMERTRANSACTION_ACC_BALANCE_FROM_TRA_CUSTOMERTRANSACTION_TITLE',
);
