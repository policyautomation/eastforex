<?php
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
