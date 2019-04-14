<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2019-02-11 22:25:16
$dictionary["tra_CustomerFXRequest"]["fields"]["tra_customerfxrequest_tra_customertransaction"] = array (
  'name' => 'tra_customerfxrequest_tra_customertransaction',
  'type' => 'link',
  'relationship' => 'tra_customerfxrequest_tra_customertransaction',
  'source' => 'non-db',
  'module' => 'tra_CustomerTransaction',
  'bean_name' => 'tra_CustomerTransaction',
  'side' => 'right',
  'vname' => 'LBL_TRA_CUSTOMERFXREQUEST_TRA_CUSTOMERTRANSACTION_FROM_TRA_CUSTOMERTRANSACTION_TITLE',
);


// created: 2019-02-11 22:25:16
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


 // created: 2019-03-29 02:09:28
$dictionary['tra_CustomerFXRequest']['fields']['update_api_rate_c']['inline_edit']='';
$dictionary['tra_CustomerFXRequest']['fields']['update_api_rate_c']['labelValue']='Update API Rate';

 

// created: 2019-02-11 22:25:16
$dictionary["tra_CustomerFXRequest"]["fields"]["tra_customerfxrequest_tra_lockedrate"] = array (
  'name' => 'tra_customerfxrequest_tra_lockedrate',
  'type' => 'link',
  'relationship' => 'tra_customerfxrequest_tra_lockedrate',
  'source' => 'non-db',
  'module' => 'tra_LockedRate',
  'bean_name' => 'tra_LockedRate',
  'vname' => 'LBL_TRA_CUSTOMERFXREQUEST_TRA_LOCKEDRATE_FROM_TRA_LOCKEDRATE_TITLE',
  'id_name' => 'tra_customerfxrequest_tra_lockedratetra_lockedrate_ida',
);
$dictionary["tra_CustomerFXRequest"]["fields"]["tra_customerfxrequest_tra_lockedrate_name"] = array (
  'name' => 'tra_customerfxrequest_tra_lockedrate_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_TRA_CUSTOMERFXREQUEST_TRA_LOCKEDRATE_FROM_TRA_LOCKEDRATE_TITLE',
  'save' => true,
  'id_name' => 'tra_customerfxrequest_tra_lockedratetra_lockedrate_ida',
  'link' => 'tra_customerfxrequest_tra_lockedrate',
  'table' => 'tra_lockedrate',
  'module' => 'tra_LockedRate',
  'rname' => 'name',
);
$dictionary["tra_CustomerFXRequest"]["fields"]["tra_customerfxrequest_tra_lockedratetra_lockedrate_ida"] = array (
  'name' => 'tra_customerfxrequest_tra_lockedratetra_lockedrate_ida',
  'type' => 'link',
  'relationship' => 'tra_customerfxrequest_tra_lockedrate',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_TRA_CUSTOMERFXREQUEST_TRA_LOCKEDRATE_FROM_TRA_CUSTOMERFXREQUEST_TITLE',
);


 // created: 2019-02-11 23:05:49
$dictionary['tra_CustomerFXRequest']['fields']['currency_pair_c']['inline_edit']='1';
$dictionary['tra_CustomerFXRequest']['fields']['currency_pair_c']['labelValue']='Currency Pair';

 
?>