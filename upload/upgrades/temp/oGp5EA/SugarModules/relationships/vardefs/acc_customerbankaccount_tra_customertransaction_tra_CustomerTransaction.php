<?php
// created: 2018-10-15 21:54:58
$dictionary["tra_CustomerTransaction"]["fields"]["acc_customerbankaccount_tra_customertransaction"] = array (
  'name' => 'acc_customerbankaccount_tra_customertransaction',
  'type' => 'link',
  'relationship' => 'acc_customerbankaccount_tra_customertransaction',
  'source' => 'non-db',
  'module' => 'acc_CustomerBankAccount',
  'bean_name' => 'acc_CustomerBankAccount',
  'vname' => 'LBL_ACC_CUSTOMERBANKACCOUNT_TRA_CUSTOMERTRANSACTION_FROM_ACC_CUSTOMERBANKACCOUNT_TITLE',
  'id_name' => 'acc_custom1a95account_ida',
);
$dictionary["tra_CustomerTransaction"]["fields"]["acc_customerbankaccount_tra_customertransaction_name"] = array (
  'name' => 'acc_customerbankaccount_tra_customertransaction_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ACC_CUSTOMERBANKACCOUNT_TRA_CUSTOMERTRANSACTION_FROM_ACC_CUSTOMERBANKACCOUNT_TITLE',
  'save' => true,
  'id_name' => 'acc_custom1a95account_ida',
  'link' => 'acc_customerbankaccount_tra_customertransaction',
  'table' => 'acc_customerbankaccount',
  'module' => 'acc_CustomerBankAccount',
  'rname' => 'name',
);
$dictionary["tra_CustomerTransaction"]["fields"]["acc_custom1a95account_ida"] = array (
  'name' => 'acc_custom1a95account_ida',
  'type' => 'link',
  'relationship' => 'acc_customerbankaccount_tra_customertransaction',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_ACC_CUSTOMERBANKACCOUNT_TRA_CUSTOMERTRANSACTION_FROM_TRA_CUSTOMERTRANSACTION_TITLE',
);
