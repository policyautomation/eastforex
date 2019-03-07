<?php
// created: 2018-10-15 21:54:58
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
