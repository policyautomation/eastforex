<?php
// created: 2018-10-20 15:32:45
$dictionary["tra_CustomerTransaction"]["fields"]["tra_customertransaction_accounts"] = array (
  'name' => 'tra_customertransaction_accounts',
  'type' => 'link',
  'relationship' => 'tra_customertransaction_accounts',
  'source' => 'non-db',
  'module' => 'Accounts',
  'bean_name' => 'Account',
  'vname' => 'LBL_TRA_CUSTOMERTRANSACTION_ACCOUNTS_FROM_ACCOUNTS_TITLE',
  'id_name' => 'tra_customertransaction_accountsaccounts_ida',
);
$dictionary["tra_CustomerTransaction"]["fields"]["tra_customertransaction_accounts_name"] = array (
  'name' => 'tra_customertransaction_accounts_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_TRA_CUSTOMERTRANSACTION_ACCOUNTS_FROM_ACCOUNTS_TITLE',
  'save' => true,
  'id_name' => 'tra_customertransaction_accountsaccounts_ida',
  'link' => 'tra_customertransaction_accounts',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'name',
);
$dictionary["tra_CustomerTransaction"]["fields"]["tra_customertransaction_accountsaccounts_ida"] = array (
  'name' => 'tra_customertransaction_accountsaccounts_ida',
  'type' => 'link',
  'relationship' => 'tra_customertransaction_accounts',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_TRA_CUSTOMERTRANSACTION_ACCOUNTS_FROM_TRA_CUSTOMERTRANSACTION_TITLE',
);
