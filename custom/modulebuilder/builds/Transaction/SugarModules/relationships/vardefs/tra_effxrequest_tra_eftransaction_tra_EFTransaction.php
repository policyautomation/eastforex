<?php
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
