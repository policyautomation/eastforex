<?php
// created: 2018-11-01 21:41:38
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
