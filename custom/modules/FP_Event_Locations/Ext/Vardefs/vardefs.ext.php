<?php 
 //WARNING: The contents of this file are auto-generated


 // created: 2018-09-30 21:30:18
$dictionary['FP_Event_Locations']['fields']['address']['audited']=true;
$dictionary['FP_Event_Locations']['fields']['address']['inline_edit']=true;
$dictionary['FP_Event_Locations']['fields']['address']['duplicate_merge']='enabled';
$dictionary['FP_Event_Locations']['fields']['address']['duplicate_merge_dom_value']='1';

 

 // created: 2018-09-30 21:31:07
$dictionary['FP_Event_Locations']['fields']['address_state']['required']=true;
$dictionary['FP_Event_Locations']['fields']['address_state']['audited']=true;
$dictionary['FP_Event_Locations']['fields']['address_state']['inline_edit']=true;
$dictionary['FP_Event_Locations']['fields']['address_state']['duplicate_merge']='enabled';
$dictionary['FP_Event_Locations']['fields']['address_state']['duplicate_merge_dom_value']='1';

 

 // created: 2018-09-30 21:30:46
$dictionary['FP_Event_Locations']['fields']['address_city']['len']='255';
$dictionary['FP_Event_Locations']['fields']['address_city']['audited']=true;
$dictionary['FP_Event_Locations']['fields']['address_city']['inline_edit']=true;
$dictionary['FP_Event_Locations']['fields']['address_city']['duplicate_merge']='enabled';
$dictionary['FP_Event_Locations']['fields']['address_city']['duplicate_merge_dom_value']='1';

 

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


 // created: 2018-09-30 21:29:50
$dictionary['FP_Event_Locations']['fields']['address_type_c']['inline_edit']='1';
$dictionary['FP_Event_Locations']['fields']['address_type_c']['labelValue']='Address Type';

 
?>