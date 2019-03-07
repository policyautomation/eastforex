<?php
// created: 2018-10-16 22:04:24
$dictionary["acc_EFBankAccount"]["fields"]["acc_efbankaccount_acc_balance"] = array (
  'name' => 'acc_efbankaccount_acc_balance',
  'type' => 'link',
  'relationship' => 'acc_efbankaccount_acc_balance',
  'source' => 'non-db',
  'module' => 'acc_Balance',
  'bean_name' => 'acc_Balance',
  'vname' => 'LBL_ACC_EFBANKACCOUNT_ACC_BALANCE_FROM_ACC_BALANCE_TITLE',
  'id_name' => 'acc_efbankaccount_acc_balanceacc_balance_idb',
);
$dictionary["acc_EFBankAccount"]["fields"]["acc_efbankaccount_acc_balance_name"] = array (
  'name' => 'acc_efbankaccount_acc_balance_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ACC_EFBANKACCOUNT_ACC_BALANCE_FROM_ACC_BALANCE_TITLE',
  'save' => true,
  'id_name' => 'acc_efbankaccount_acc_balanceacc_balance_idb',
  'link' => 'acc_efbankaccount_acc_balance',
  'table' => 'acc_balance',
  'module' => 'acc_Balance',
  'rname' => 'name',
);
$dictionary["acc_EFBankAccount"]["fields"]["acc_efbankaccount_acc_balanceacc_balance_idb"] = array (
  'name' => 'acc_efbankaccount_acc_balanceacc_balance_idb',
  'type' => 'link',
  'relationship' => 'acc_efbankaccount_acc_balance',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_ACC_EFBANKACCOUNT_ACC_BALANCE_FROM_ACC_BALANCE_TITLE',
);
