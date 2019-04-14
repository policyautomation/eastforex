<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2019-02-11 22:25:16
$dictionary["tra_EFTransaction"]["fields"]["tra_effxrequest_tra_eftransaction"] = array (
  'name' => 'tra_effxrequest_tra_eftransaction',
  'type' => 'link',
  'relationship' => 'tra_effxrequest_tra_eftransaction',
  'source' => 'non-db',
  'module' => 'tra_EFFXRequest',
  'bean_name' => 'tra_EFFXRequest',
  'vname' => 'LBL_TRA_EFFXREQUEST_TRA_EFTRANSACTION_FROM_TRA_EFFXREQUEST_TITLE',
  'id_name' => 'tra_effxrequest_tra_eftransactiontra_effxrequest_ida',
);
$dictionary["tra_EFTransaction"]["fields"]["tra_effxrequest_tra_eftransaction_name"] = array (
  'name' => 'tra_effxrequest_tra_eftransaction_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_TRA_EFFXREQUEST_TRA_EFTRANSACTION_FROM_TRA_EFFXREQUEST_TITLE',
  'save' => true,
  'id_name' => 'tra_effxrequest_tra_eftransactiontra_effxrequest_ida',
  'link' => 'tra_effxrequest_tra_eftransaction',
  'table' => 'tra_effxrequest',
  'module' => 'tra_EFFXRequest',
  'rname' => 'name',
);
$dictionary["tra_EFTransaction"]["fields"]["tra_effxrequest_tra_eftransactiontra_effxrequest_ida"] = array (
  'name' => 'tra_effxrequest_tra_eftransactiontra_effxrequest_ida',
  'type' => 'link',
  'relationship' => 'tra_effxrequest_tra_eftransaction',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_TRA_EFFXREQUEST_TRA_EFTRANSACTION_FROM_TRA_EFTRANSACTION_TITLE',
);


// created: 2019-02-11 22:25:17
$dictionary["tra_EFTransaction"]["fields"]["tra_efdailytransaction_acc_efbankaccount"] = array (
  'name' => 'tra_efdailytransaction_acc_efbankaccount',
  'type' => 'link',
  'relationship' => 'tra_efdailytransaction_acc_efbankaccount',
  'source' => 'non-db',
  'module' => 'acc_EFBankAccount',
  'bean_name' => 'acc_EFBankAccount',
  'vname' => 'LBL_TRA_EFDAILYTRANSACTION_ACC_EFBANKACCOUNT_FROM_ACC_EFBANKACCOUNT_TITLE',
  'id_name' => 'tra_efdailytransaction_acc_efbankaccountacc_efbankaccount_ida',
);
$dictionary["tra_EFTransaction"]["fields"]["tra_efdailytransaction_acc_efbankaccount_name"] = array (
  'name' => 'tra_efdailytransaction_acc_efbankaccount_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_TRA_EFDAILYTRANSACTION_ACC_EFBANKACCOUNT_FROM_ACC_EFBANKACCOUNT_TITLE',
  'save' => true,
  'id_name' => 'tra_efdailytransaction_acc_efbankaccountacc_efbankaccount_ida',
  'link' => 'tra_efdailytransaction_acc_efbankaccount',
  'table' => 'acc_efbankaccount',
  'module' => 'acc_EFBankAccount',
  'rname' => 'name',
);
$dictionary["tra_EFTransaction"]["fields"]["tra_efdailytransaction_acc_efbankaccountacc_efbankaccount_ida"] = array (
  'name' => 'tra_efdailytransaction_acc_efbankaccountacc_efbankaccount_ida',
  'type' => 'link',
  'relationship' => 'tra_efdailytransaction_acc_efbankaccount',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_TRA_EFDAILYTRANSACTION_ACC_EFBANKACCOUNT_FROM_TRA_EFTRANSACTION_TITLE',
);


// created: 2019-02-11 22:25:17
$dictionary["tra_EFTransaction"]["fields"]["tra_eftransaction_acc_balance"] = array (
  'name' => 'tra_eftransaction_acc_balance',
  'type' => 'link',
  'relationship' => 'tra_eftransaction_acc_balance',
  'source' => 'non-db',
  'module' => 'acc_Balance',
  'bean_name' => 'acc_Balance',
  'vname' => 'LBL_TRA_EFTRANSACTION_ACC_BALANCE_FROM_ACC_BALANCE_TITLE',
  'id_name' => 'tra_eftransaction_acc_balanceacc_balance_ida',
);
$dictionary["tra_EFTransaction"]["fields"]["tra_eftransaction_acc_balance_name"] = array (
  'name' => 'tra_eftransaction_acc_balance_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_TRA_EFTRANSACTION_ACC_BALANCE_FROM_ACC_BALANCE_TITLE',
  'save' => true,
  'id_name' => 'tra_eftransaction_acc_balanceacc_balance_ida',
  'link' => 'tra_eftransaction_acc_balance',
  'table' => 'acc_balance',
  'module' => 'acc_Balance',
  'rname' => 'name',
);
$dictionary["tra_EFTransaction"]["fields"]["tra_eftransaction_acc_balanceacc_balance_ida"] = array (
  'name' => 'tra_eftransaction_acc_balanceacc_balance_ida',
  'type' => 'link',
  'relationship' => 'tra_eftransaction_acc_balance',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_TRA_EFTRANSACTION_ACC_BALANCE_FROM_TRA_EFTRANSACTION_TITLE',
);

?>