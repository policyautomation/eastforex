<?php
// created: 2018-12-05 22:58:53
$dictionary["acc_Balance"]["fields"]["acc_efbankaccount_acc_balance"] = array (
  'name' => 'acc_efbankaccount_acc_balance',
  'type' => 'link',
  'relationship' => 'acc_efbankaccount_acc_balance',
  'source' => 'non-db',
  'module' => 'acc_EFBankAccount',
  'bean_name' => 'acc_EFBankAccount',
  'vname' => 'LBL_ACC_EFBANKACCOUNT_ACC_BALANCE_FROM_ACC_EFBANKACCOUNT_TITLE',
  'id_name' => 'acc_efbankaccount_acc_balanceacc_efbankaccount_ida',
);
$dictionary["acc_Balance"]["fields"]["acc_efbankaccount_acc_balance_name"] = array (
  'name' => 'acc_efbankaccount_acc_balance_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ACC_EFBANKACCOUNT_ACC_BALANCE_FROM_ACC_EFBANKACCOUNT_TITLE',
  'save' => true,
  'id_name' => 'acc_efbankaccount_acc_balanceacc_efbankaccount_ida',
  'link' => 'acc_efbankaccount_acc_balance',
  'table' => 'acc_efbankaccount',
  'module' => 'acc_EFBankAccount',
  'rname' => 'name',
);
$dictionary["acc_Balance"]["fields"]["acc_efbankaccount_acc_balanceacc_efbankaccount_ida"] = array (
  'name' => 'acc_efbankaccount_acc_balanceacc_efbankaccount_ida',
  'type' => 'link',
  'relationship' => 'acc_efbankaccount_acc_balance',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_ACC_EFBANKACCOUNT_ACC_BALANCE_FROM_ACC_EFBANKACCOUNT_TITLE',
);
