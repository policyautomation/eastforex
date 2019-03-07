<?php
// created: 2018-09-30 17:15:11
$dictionary["FP_Event_Locations"]["fields"]["accounts_fp_event_locations_1"] = array (
  'name' => 'accounts_fp_event_locations_1',
  'type' => 'link',
  'relationship' => 'accounts_fp_event_locations_1',
  'source' => 'non-db',
  'module' => 'Accounts',
  'bean_name' => 'Account',
  'vname' => 'LBL_ACCOUNTS_FP_EVENT_LOCATIONS_1_FROM_ACCOUNTS_TITLE',
  'id_name' => 'accounts_fp_event_locations_1accounts_ida',
);
$dictionary["FP_Event_Locations"]["fields"]["accounts_fp_event_locations_1_name"] = array (
  'name' => 'accounts_fp_event_locations_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_FP_EVENT_LOCATIONS_1_FROM_ACCOUNTS_TITLE',
  'save' => true,
  'id_name' => 'accounts_fp_event_locations_1accounts_ida',
  'link' => 'accounts_fp_event_locations_1',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'name',
);
$dictionary["FP_Event_Locations"]["fields"]["accounts_fp_event_locations_1accounts_ida"] = array (
  'name' => 'accounts_fp_event_locations_1accounts_ida',
  'type' => 'link',
  'relationship' => 'accounts_fp_event_locations_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_ACCOUNTS_FP_EVENT_LOCATIONS_1_FROM_FP_EVENT_LOCATIONS_TITLE',
);
