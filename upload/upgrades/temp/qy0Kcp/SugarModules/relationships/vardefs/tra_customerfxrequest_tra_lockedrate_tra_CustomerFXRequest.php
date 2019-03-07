<?php
// created: 2018-11-02 10:02:07
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
