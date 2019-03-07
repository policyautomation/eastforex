<?php
// created: 2018-10-16 22:04:24
$dictionary["acc_CustomerBankAccount"]["fields"]["acc_customerbankaccount_accounts"] = array (
  'name' => 'acc_customerbankaccount_accounts',
  'type' => 'link',
  'relationship' => 'acc_customerbankaccount_accounts',
  'source' => 'non-db',
  'module' => 'Accounts',
  'bean_name' => 'Account',
  'vname' => 'LBL_ACC_CUSTOMERBANKACCOUNT_ACCOUNTS_FROM_ACCOUNTS_TITLE',
  'id_name' => 'acc_customerbankaccount_accountsaccounts_ida',
);
$dictionary["acc_CustomerBankAccount"]["fields"]["acc_customerbankaccount_accounts_name"] = array (
  'name' => 'acc_customerbankaccount_accounts_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ACC_CUSTOMERBANKACCOUNT_ACCOUNTS_FROM_ACCOUNTS_TITLE',
  'save' => true,
  'id_name' => 'acc_customerbankaccount_accountsaccounts_ida',
  'link' => 'acc_customerbankaccount_accounts',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'name',
);
$dictionary["acc_CustomerBankAccount"]["fields"]["acc_customerbankaccount_accountsaccounts_ida"] = array (
  'name' => 'acc_customerbankaccount_accountsaccounts_ida',
  'type' => 'link',
  'relationship' => 'acc_customerbankaccount_accounts',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_ACC_CUSTOMERBANKACCOUNT_ACCOUNTS_FROM_ACC_CUSTOMERBANKACCOUNT_TITLE',
);
