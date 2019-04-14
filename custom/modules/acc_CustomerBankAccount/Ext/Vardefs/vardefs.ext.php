<?php 
 //WARNING: The contents of this file are auto-generated


 // created: 2019-01-23 22:03:02
$dictionary['acc_CustomerBankAccount']['fields']['beneficiary_state_c']['inline_edit']='1';
$dictionary['acc_CustomerBankAccount']['fields']['beneficiary_state_c']['labelValue']='Beneficiary State';

 

// created: 2018-12-05 22:58:53
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


 // created: 2019-01-23 22:02:41
$dictionary['acc_CustomerBankAccount']['fields']['beneficiary_suburb_c']['inline_edit']='1';
$dictionary['acc_CustomerBankAccount']['fields']['beneficiary_suburb_c']['labelValue']='Beneficiary Suburb';

 

 // created: 2019-01-23 22:11:28
$dictionary['acc_CustomerBankAccount']['fields']['beneficiary_bank_suburb_c']['inline_edit']='1';
$dictionary['acc_CustomerBankAccount']['fields']['beneficiary_bank_suburb_c']['labelValue']='Beneficiary Bank Suburb';

 

 // created: 2019-01-23 22:03:51
$dictionary['acc_CustomerBankAccount']['fields']['beneficiary_country_c']['inline_edit']='1';
$dictionary['acc_CustomerBankAccount']['fields']['beneficiary_country_c']['labelValue']='Beneficiary Country';

 

 // created: 2019-01-23 22:09:13

 

 // created: 2019-01-23 22:02:00
$dictionary['acc_CustomerBankAccount']['fields']['beneficiary_street_address_c']['inline_edit']='1';
$dictionary['acc_CustomerBankAccount']['fields']['beneficiary_street_address_c']['labelValue']='beneficiary street address';

 

 // created: 2019-01-23 22:21:16
$dictionary['acc_CustomerBankAccount']['fields']['beneficiary_bank_address']['required']=false;
$dictionary['acc_CustomerBankAccount']['fields']['beneficiary_bank_address']['audited']=false;
$dictionary['acc_CustomerBankAccount']['fields']['beneficiary_bank_address']['inline_edit']='';
$dictionary['acc_CustomerBankAccount']['fields']['beneficiary_bank_address']['importable']='false';
$dictionary['acc_CustomerBankAccount']['fields']['beneficiary_bank_address']['duplicate_merge']='disabled';
$dictionary['acc_CustomerBankAccount']['fields']['beneficiary_bank_address']['duplicate_merge_dom_value']='0';

 

 // created: 2019-01-23 22:10:58
$dictionary['acc_CustomerBankAccount']['fields']['beneficiary_bank_street_c']['inline_edit']='1';
$dictionary['acc_CustomerBankAccount']['fields']['beneficiary_bank_street_c']['labelValue']='Beneficiary Bank Street';

 

// created: 2019-02-11 22:25:17
$dictionary["acc_CustomerBankAccount"]["fields"]["tra_customertransaction_acc_customerbankaccount"] = array (
  'name' => 'tra_customertransaction_acc_customerbankaccount',
  'type' => 'link',
  'relationship' => 'tra_customertransaction_acc_customerbankaccount',
  'source' => 'non-db',
  'module' => 'tra_CustomerTransaction',
  'bean_name' => 'tra_CustomerTransaction',
  'side' => 'right',
  'vname' => 'LBL_TRA_CUSTOMERTRANSACTION_ACC_CUSTOMERBANKACCOUNT_FROM_TRA_CUSTOMERTRANSACTION_TITLE',
);


 // created: 2019-01-23 22:21:03
$dictionary['acc_CustomerBankAccount']['fields']['beneficiary_address']['required']=false;
$dictionary['acc_CustomerBankAccount']['fields']['beneficiary_address']['audited']=false;
$dictionary['acc_CustomerBankAccount']['fields']['beneficiary_address']['inline_edit']='';
$dictionary['acc_CustomerBankAccount']['fields']['beneficiary_address']['importable']='false';
$dictionary['acc_CustomerBankAccount']['fields']['beneficiary_address']['duplicate_merge']='disabled';
$dictionary['acc_CustomerBankAccount']['fields']['beneficiary_address']['duplicate_merge_dom_value']='0';

 

 // created: 2019-01-23 22:11:51
$dictionary['acc_CustomerBankAccount']['fields']['beneficiary_bank_state_c']['inline_edit']='1';
$dictionary['acc_CustomerBankAccount']['fields']['beneficiary_bank_state_c']['labelValue']='Beneficiary Bank State';

 

 // created: 2019-01-23 22:09:54
$dictionary['acc_CustomerBankAccount']['fields']['swift_code']['required']=false;

 

 // created: 2019-01-23 22:12:43
$dictionary['acc_CustomerBankAccount']['fields']['beneficiary_bank_postcode_c']['inline_edit']='1';
$dictionary['acc_CustomerBankAccount']['fields']['beneficiary_bank_postcode_c']['labelValue']='Beneficiary Bank Postcode';

 

 // created: 2019-01-23 22:04:17
$dictionary['acc_CustomerBankAccount']['fields']['beneficiary_postcode_c']['inline_edit']='1';
$dictionary['acc_CustomerBankAccount']['fields']['beneficiary_postcode_c']['labelValue']='Beneficiary Postcode';

 

 // created: 2019-01-23 22:12:16
$dictionary['acc_CustomerBankAccount']['fields']['beneficiary_bank_country_c']['inline_edit']='1';
$dictionary['acc_CustomerBankAccount']['fields']['beneficiary_bank_country_c']['labelValue']='Beneficiary Bank Country';

 
?>