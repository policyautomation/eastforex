<?php
// created: 2018-10-15 22:08:13
$dictionary["acc_Identity"]["fields"]["acc_identity_accounts"] = array (
  'name' => 'acc_identity_accounts',
  'type' => 'link',
  'relationship' => 'acc_identity_accounts',
  'source' => 'non-db',
  'module' => 'Accounts',
  'bean_name' => 'Account',
  'vname' => 'LBL_ACC_IDENTITY_ACCOUNTS_FROM_ACCOUNTS_TITLE',
  'id_name' => 'acc_identity_accountsaccounts_ida',
);
$dictionary["acc_Identity"]["fields"]["acc_identity_accounts_name"] = array (
  'name' => 'acc_identity_accounts_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ACC_IDENTITY_ACCOUNTS_FROM_ACCOUNTS_TITLE',
  'save' => true,
  'id_name' => 'acc_identity_accountsaccounts_ida',
  'link' => 'acc_identity_accounts',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'name',
);
$dictionary["acc_Identity"]["fields"]["acc_identity_accountsaccounts_ida"] = array (
  'name' => 'acc_identity_accountsaccounts_ida',
  'type' => 'link',
  'relationship' => 'acc_identity_accounts',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_ACC_IDENTITY_ACCOUNTS_FROM_ACC_IDENTITY_TITLE',
);
