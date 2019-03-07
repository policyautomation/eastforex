<?php
// created: 2018-11-17 14:04:57
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
