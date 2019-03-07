<?php
// created: 2018-10-31 22:23:19
$dictionary["tra_LockedRate"]["fields"]["tra_lockedrate_accounts"] = array (
  'name' => 'tra_lockedrate_accounts',
  'type' => 'link',
  'relationship' => 'tra_lockedrate_accounts',
  'source' => 'non-db',
  'module' => 'Accounts',
  'bean_name' => 'Account',
  'vname' => 'LBL_TRA_LOCKEDRATE_ACCOUNTS_FROM_ACCOUNTS_TITLE',
  'id_name' => 'tra_lockedrate_accountsaccounts_ida',
);
$dictionary["tra_LockedRate"]["fields"]["tra_lockedrate_accounts_name"] = array (
  'name' => 'tra_lockedrate_accounts_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_TRA_LOCKEDRATE_ACCOUNTS_FROM_ACCOUNTS_TITLE',
  'save' => true,
  'id_name' => 'tra_lockedrate_accountsaccounts_ida',
  'link' => 'tra_lockedrate_accounts',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'name',
);
$dictionary["tra_LockedRate"]["fields"]["tra_lockedrate_accountsaccounts_ida"] = array (
  'name' => 'tra_lockedrate_accountsaccounts_ida',
  'type' => 'link',
  'relationship' => 'tra_lockedrate_accounts',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_TRA_LOCKEDRATE_ACCOUNTS_FROM_TRA_LOCKEDRATE_TITLE',
);
