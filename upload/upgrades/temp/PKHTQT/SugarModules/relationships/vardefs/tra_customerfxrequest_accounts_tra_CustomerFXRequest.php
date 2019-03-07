<?php
// created: 2018-10-29 22:26:41
$dictionary["tra_CustomerFXRequest"]["fields"]["tra_customerfxrequest_accounts"] = array (
  'name' => 'tra_customerfxrequest_accounts',
  'type' => 'link',
  'relationship' => 'tra_customerfxrequest_accounts',
  'source' => 'non-db',
  'module' => 'Accounts',
  'bean_name' => 'Account',
  'vname' => 'LBL_TRA_CUSTOMERFXREQUEST_ACCOUNTS_FROM_ACCOUNTS_TITLE',
  'id_name' => 'tra_customerfxrequest_accountsaccounts_ida',
);
$dictionary["tra_CustomerFXRequest"]["fields"]["tra_customerfxrequest_accounts_name"] = array (
  'name' => 'tra_customerfxrequest_accounts_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_TRA_CUSTOMERFXREQUEST_ACCOUNTS_FROM_ACCOUNTS_TITLE',
  'save' => true,
  'id_name' => 'tra_customerfxrequest_accountsaccounts_ida',
  'link' => 'tra_customerfxrequest_accounts',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'name',
);
$dictionary["tra_CustomerFXRequest"]["fields"]["tra_customerfxrequest_accountsaccounts_ida"] = array (
  'name' => 'tra_customerfxrequest_accountsaccounts_ida',
  'type' => 'link',
  'relationship' => 'tra_customerfxrequest_accounts',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_TRA_CUSTOMERFXREQUEST_ACCOUNTS_FROM_TRA_CUSTOMERFXREQUEST_TITLE',
);
