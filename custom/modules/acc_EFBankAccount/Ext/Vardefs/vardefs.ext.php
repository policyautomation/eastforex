<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2019-02-11 22:25:17
$dictionary["acc_EFBankAccount"]["fields"]["tra_efdailytransaction_acc_efbankaccount"] = array (
  'name' => 'tra_efdailytransaction_acc_efbankaccount',
  'type' => 'link',
  'relationship' => 'tra_efdailytransaction_acc_efbankaccount',
  'source' => 'non-db',
  'module' => 'tra_EFTransaction',
  'bean_name' => 'tra_EFTransaction',
  'side' => 'right',
  'vname' => 'LBL_TRA_EFDAILYTRANSACTION_ACC_EFBANKACCOUNT_FROM_TRA_EFTRANSACTION_TITLE',
);


// created: 2018-12-05 22:58:53
$dictionary["acc_EFBankAccount"]["fields"]["acc_efbankaccount_acc_balance"] = array (
  'name' => 'acc_efbankaccount_acc_balance',
  'type' => 'link',
  'relationship' => 'acc_efbankaccount_acc_balance',
  'source' => 'non-db',
  'module' => 'acc_Balance',
  'bean_name' => 'acc_Balance',
  'vname' => 'LBL_ACC_EFBANKACCOUNT_ACC_BALANCE_FROM_ACC_BALANCE_TITLE',
  'id_name' => 'acc_efbankaccount_acc_balanceacc_balance_idb',
);
$dictionary["acc_EFBankAccount"]["fields"]["acc_efbankaccount_acc_balance_name"] = array (
  'name' => 'acc_efbankaccount_acc_balance_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ACC_EFBANKACCOUNT_ACC_BALANCE_FROM_ACC_BALANCE_TITLE',
  'save' => true,
  'id_name' => 'acc_efbankaccount_acc_balanceacc_balance_idb',
  'link' => 'acc_efbankaccount_acc_balance',
  'table' => 'acc_balance',
  'module' => 'acc_Balance',
  'rname' => 'name',
);
$dictionary["acc_EFBankAccount"]["fields"]["acc_efbankaccount_acc_balanceacc_balance_idb"] = array (
  'name' => 'acc_efbankaccount_acc_balanceacc_balance_idb',
  'type' => 'link',
  'relationship' => 'acc_efbankaccount_acc_balance',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_ACC_EFBANKACCOUNT_ACC_BALANCE_FROM_ACC_BALANCE_TITLE',
);


// created: 2019-02-11 22:25:17
$dictionary["acc_EFBankAccount"]["fields"]["tra_customertransaction_acc_efbankaccount"] = array (
  'name' => 'tra_customertransaction_acc_efbankaccount',
  'type' => 'link',
  'relationship' => 'tra_customertransaction_acc_efbankaccount',
  'source' => 'non-db',
  'module' => 'tra_CustomerTransaction',
  'bean_name' => 'tra_CustomerTransaction',
  'side' => 'right',
  'vname' => 'LBL_TRA_CUSTOMERTRANSACTION_ACC_EFBANKACCOUNT_FROM_TRA_CUSTOMERTRANSACTION_TITLE',
);

?>