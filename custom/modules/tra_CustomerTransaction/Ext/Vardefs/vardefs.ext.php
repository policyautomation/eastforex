<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2019-02-11 22:25:17
$dictionary["tra_CustomerTransaction"]["fields"]["tra_customertransaction_acc_customerbankaccount"] = array (
  'name' => 'tra_customertransaction_acc_customerbankaccount',
  'type' => 'link',
  'relationship' => 'tra_customertransaction_acc_customerbankaccount',
  'source' => 'non-db',
  'module' => 'acc_CustomerBankAccount',
  'bean_name' => 'acc_CustomerBankAccount',
  'vname' => 'LBL_TRA_CUSTOMERTRANSACTION_ACC_CUSTOMERBANKACCOUNT_FROM_ACC_CUSTOMERBANKACCOUNT_TITLE',
  'id_name' => 'tra_custom1e70account_ida',
);
$dictionary["tra_CustomerTransaction"]["fields"]["tra_customertransaction_acc_customerbankaccount_name"] = array (
  'name' => 'tra_customertransaction_acc_customerbankaccount_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_TRA_CUSTOMERTRANSACTION_ACC_CUSTOMERBANKACCOUNT_FROM_ACC_CUSTOMERBANKACCOUNT_TITLE',
  'save' => true,
  'id_name' => 'tra_custom1e70account_ida',
  'link' => 'tra_customertransaction_acc_customerbankaccount',
  'table' => 'acc_customerbankaccount',
  'module' => 'acc_CustomerBankAccount',
  'rname' => 'name',
);
$dictionary["tra_CustomerTransaction"]["fields"]["tra_custom1e70account_ida"] = array (
  'name' => 'tra_custom1e70account_ida',
  'type' => 'link',
  'relationship' => 'tra_customertransaction_acc_customerbankaccount',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_TRA_CUSTOMERTRANSACTION_ACC_CUSTOMERBANKACCOUNT_FROM_TRA_CUSTOMERTRANSACTION_TITLE',
);


// created: 2019-02-11 22:25:16
$dictionary["tra_CustomerTransaction"]["fields"]["tra_customerfxrequest_tra_customertransaction"] = array (
  'name' => 'tra_customerfxrequest_tra_customertransaction',
  'type' => 'link',
  'relationship' => 'tra_customerfxrequest_tra_customertransaction',
  'source' => 'non-db',
  'module' => 'tra_CustomerFXRequest',
  'bean_name' => 'tra_CustomerFXRequest',
  'vname' => 'LBL_TRA_CUSTOMERFXREQUEST_TRA_CUSTOMERTRANSACTION_FROM_TRA_CUSTOMERFXREQUEST_TITLE',
  'id_name' => 'tra_customc9d6request_ida',
);
$dictionary["tra_CustomerTransaction"]["fields"]["tra_customerfxrequest_tra_customertransaction_name"] = array (
  'name' => 'tra_customerfxrequest_tra_customertransaction_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_TRA_CUSTOMERFXREQUEST_TRA_CUSTOMERTRANSACTION_FROM_TRA_CUSTOMERFXREQUEST_TITLE',
  'save' => true,
  'id_name' => 'tra_customc9d6request_ida',
  'link' => 'tra_customerfxrequest_tra_customertransaction',
  'table' => 'tra_customerfxrequest',
  'module' => 'tra_CustomerFXRequest',
  'rname' => 'name',
);
$dictionary["tra_CustomerTransaction"]["fields"]["tra_customc9d6request_ida"] = array (
  'name' => 'tra_customc9d6request_ida',
  'type' => 'link',
  'relationship' => 'tra_customerfxrequest_tra_customertransaction',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_TRA_CUSTOMERFXREQUEST_TRA_CUSTOMERTRANSACTION_FROM_TRA_CUSTOMERTRANSACTION_TITLE',
);


// created: 2019-02-11 22:25:17
$dictionary["tra_CustomerTransaction"]["fields"]["tra_customertransaction_acc_balance"] = array (
  'name' => 'tra_customertransaction_acc_balance',
  'type' => 'link',
  'relationship' => 'tra_customertransaction_acc_balance',
  'source' => 'non-db',
  'module' => 'acc_Balance',
  'bean_name' => 'acc_Balance',
  'vname' => 'LBL_TRA_CUSTOMERTRANSACTION_ACC_BALANCE_FROM_ACC_BALANCE_TITLE',
  'id_name' => 'tra_customertransaction_acc_balanceacc_balance_ida',
);
$dictionary["tra_CustomerTransaction"]["fields"]["tra_customertransaction_acc_balance_name"] = array (
  'name' => 'tra_customertransaction_acc_balance_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_TRA_CUSTOMERTRANSACTION_ACC_BALANCE_FROM_ACC_BALANCE_TITLE',
  'save' => true,
  'id_name' => 'tra_customertransaction_acc_balanceacc_balance_ida',
  'link' => 'tra_customertransaction_acc_balance',
  'table' => 'acc_balance',
  'module' => 'acc_Balance',
  'rname' => 'name',
);
$dictionary["tra_CustomerTransaction"]["fields"]["tra_customertransaction_acc_balanceacc_balance_ida"] = array (
  'name' => 'tra_customertransaction_acc_balanceacc_balance_ida',
  'type' => 'link',
  'relationship' => 'tra_customertransaction_acc_balance',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_TRA_CUSTOMERTRANSACTION_ACC_BALANCE_FROM_TRA_CUSTOMERTRANSACTION_TITLE',
);


// created: 2019-02-11 22:25:17
$dictionary["tra_CustomerTransaction"]["fields"]["tra_customertransaction_acc_efbankaccount"] = array (
  'name' => 'tra_customertransaction_acc_efbankaccount',
  'type' => 'link',
  'relationship' => 'tra_customertransaction_acc_efbankaccount',
  'source' => 'non-db',
  'module' => 'acc_EFBankAccount',
  'bean_name' => 'acc_EFBankAccount',
  'vname' => 'LBL_TRA_CUSTOMERTRANSACTION_ACC_EFBANKACCOUNT_FROM_ACC_EFBANKACCOUNT_TITLE',
  'id_name' => 'tra_customertransaction_acc_efbankaccountacc_efbankaccount_ida',
);
$dictionary["tra_CustomerTransaction"]["fields"]["tra_customertransaction_acc_efbankaccount_name"] = array (
  'name' => 'tra_customertransaction_acc_efbankaccount_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_TRA_CUSTOMERTRANSACTION_ACC_EFBANKACCOUNT_FROM_ACC_EFBANKACCOUNT_TITLE',
  'save' => true,
  'id_name' => 'tra_customertransaction_acc_efbankaccountacc_efbankaccount_ida',
  'link' => 'tra_customertransaction_acc_efbankaccount',
  'table' => 'acc_efbankaccount',
  'module' => 'acc_EFBankAccount',
  'rname' => 'name',
);
$dictionary["tra_CustomerTransaction"]["fields"]["tra_customertransaction_acc_efbankaccountacc_efbankaccount_ida"] = array (
  'name' => 'tra_customertransaction_acc_efbankaccountacc_efbankaccount_ida',
  'type' => 'link',
  'relationship' => 'tra_customertransaction_acc_efbankaccount',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_TRA_CUSTOMERTRANSACTION_ACC_EFBANKACCOUNT_FROM_TRA_CUSTOMERTRANSACTION_TITLE',
);


// created: 2019-02-11 22:25:17
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

?>