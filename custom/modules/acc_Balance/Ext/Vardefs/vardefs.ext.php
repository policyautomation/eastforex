<?php 
 //WARNING: The contents of this file are auto-generated


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


// created: 2018-12-05 22:58:53
$dictionary["acc_Balance"]["fields"]["acc_balance_accounts"] = array (
  'name' => 'acc_balance_accounts',
  'type' => 'link',
  'relationship' => 'acc_balance_accounts',
  'source' => 'non-db',
  'module' => 'Accounts',
  'bean_name' => 'Account',
  'vname' => 'LBL_ACC_BALANCE_ACCOUNTS_FROM_ACCOUNTS_TITLE',
  'id_name' => 'acc_balance_accountsaccounts_ida',
);
$dictionary["acc_Balance"]["fields"]["acc_balance_accounts_name"] = array (
  'name' => 'acc_balance_accounts_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ACC_BALANCE_ACCOUNTS_FROM_ACCOUNTS_TITLE',
  'save' => true,
  'id_name' => 'acc_balance_accountsaccounts_ida',
  'link' => 'acc_balance_accounts',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'name',
);
$dictionary["acc_Balance"]["fields"]["acc_balance_accountsaccounts_ida"] = array (
  'name' => 'acc_balance_accountsaccounts_ida',
  'type' => 'link',
  'relationship' => 'acc_balance_accounts',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_ACC_BALANCE_ACCOUNTS_FROM_ACC_BALANCE_TITLE',
);


// created: 2019-02-11 22:25:17
$dictionary["acc_Balance"]["fields"]["tra_customertransaction_acc_balance"] = array (
  'name' => 'tra_customertransaction_acc_balance',
  'type' => 'link',
  'relationship' => 'tra_customertransaction_acc_balance',
  'source' => 'non-db',
  'module' => 'tra_CustomerTransaction',
  'bean_name' => 'tra_CustomerTransaction',
  'side' => 'right',
  'vname' => 'LBL_TRA_CUSTOMERTRANSACTION_ACC_BALANCE_FROM_TRA_CUSTOMERTRANSACTION_TITLE',
);


// created: 2019-02-11 22:25:17
$dictionary["acc_Balance"]["fields"]["tra_eftransaction_acc_balance"] = array (
  'name' => 'tra_eftransaction_acc_balance',
  'type' => 'link',
  'relationship' => 'tra_eftransaction_acc_balance',
  'source' => 'non-db',
  'module' => 'tra_EFTransaction',
  'bean_name' => 'tra_EFTransaction',
  'side' => 'right',
  'vname' => 'LBL_TRA_EFTRANSACTION_ACC_BALANCE_FROM_TRA_EFTRANSACTION_TITLE',
);

?>