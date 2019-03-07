<?php
/**
 *
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 *
 * SuiteCRM is an extension to SugarCRM Community Edition developed by SalesAgility Ltd.
 * Copyright (C) 2011 - 2018 SalesAgility Ltd.
 *
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE. See the GNU Affero General Public License for more
 * details.
 *
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 *
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo and "Supercharged by SuiteCRM" logo. If the display of the logos is not
 * reasonably feasible for technical reasons, the Appropriate Legal Notices must
 * display the words "Powered by SugarCRM" and "Supercharged by SuiteCRM".
 */

// THIS CONTENT IS GENERATED BY MBPackage.php
$manifest = array (
  0 => 
  array (
    'acceptable_sugar_versions' => 
    array (
      0 => '',
    ),
  ),
  1 => 
  array (
    'acceptable_sugar_flavors' => 
    array (
      0 => 'CE',
      1 => 'PRO',
      2 => 'ENT',
    ),
  ),
  'readme' => '',
  'key' => 'tra',
  'author' => '',
  'description' => '',
  'icon' => '',
  'is_uninstallable' => true,
  'name' => 'Transaction',
  'published_date' => '2018-10-15 11:13:45',
  'type' => 'module',
  'version' => 1539602025,
  'remove_tables' => 'prompt',
);


$installdefs = array (
  'id' => 'Transaction',
  'beans' => 
  array (
    0 => 
    array (
      'module' => 'tra_EFFXRequest',
      'class' => 'tra_EFFXRequest',
      'path' => 'modules/tra_EFFXRequest/tra_EFFXRequest.php',
      'tab' => true,
    ),
    1 => 
    array (
      'module' => 'tra_CustomerFXRequest',
      'class' => 'tra_CustomerFXRequest',
      'path' => 'modules/tra_CustomerFXRequest/tra_CustomerFXRequest.php',
      'tab' => true,
    ),
    2 => 
    array (
      'module' => 'tra_CustomerTransaction',
      'class' => 'tra_CustomerTransaction',
      'path' => 'modules/tra_CustomerTransaction/tra_CustomerTransaction.php',
      'tab' => true,
    ),
    3 => 
    array (
      'module' => 'tra_LockedRate',
      'class' => 'tra_LockedRate',
      'path' => 'modules/tra_LockedRate/tra_LockedRate.php',
      'tab' => true,
    ),
    4 => 
    array (
      'module' => 'tra_EFDailyTransaction',
      'class' => 'tra_EFDailyTransaction',
      'path' => 'modules/tra_EFDailyTransaction/tra_EFDailyTransaction.php',
      'tab' => true,
    ),
  ),
  'layoutdefs' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/layoutdefs/tra_customerfxrequest_accounts_Accounts.php',
      'to_module' => 'Accounts',
    ),
    1 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/layoutdefs/tra_customerfxrequest_tra_lockedrate_tra_LockedRate.php',
      'to_module' => 'tra_LockedRate',
    ),
    2 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/layoutdefs/tra_customertransaction_accounts_Accounts.php',
      'to_module' => 'Accounts',
    ),
    3 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/layoutdefs/tra_customertransaction_acc_efbankaccount_acc_EFBankAccount.php',
      'to_module' => 'acc_EFBankAccount',
    ),
    4 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/layoutdefs/tra_lockedrate_accounts_Accounts.php',
      'to_module' => 'Accounts',
    ),
    5 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/layoutdefs/tra_efdailytransaction_acc_efbankaccount_acc_EFBankAccount.php',
      'to_module' => 'acc_EFBankAccount',
    ),
  ),
  'relationships' => 
  array (
    0 => 
    array (
      'meta_data' => '<basepath>/SugarModules/relationships/relationships/tra_customerfxrequest_accountsMetaData.php',
    ),
    1 => 
    array (
      'meta_data' => '<basepath>/SugarModules/relationships/relationships/tra_customerfxrequest_tra_lockedrateMetaData.php',
    ),
    2 => 
    array (
      'meta_data' => '<basepath>/SugarModules/relationships/relationships/tra_customertransaction_accountsMetaData.php',
    ),
    3 => 
    array (
      'meta_data' => '<basepath>/SugarModules/relationships/relationships/tra_customertransaction_acc_efbankaccountMetaData.php',
    ),
    4 => 
    array (
      'meta_data' => '<basepath>/SugarModules/relationships/relationships/tra_lockedrate_accountsMetaData.php',
    ),
    5 => 
    array (
      'meta_data' => '<basepath>/SugarModules/relationships/relationships/tra_efdailytransaction_acc_efbankaccountMetaData.php',
    ),
  ),
  'image_dir' => '<basepath>/icons',
  'copy' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/SugarModules/modules/tra_EFFXRequest',
      'to' => 'modules/tra_EFFXRequest',
    ),
    1 => 
    array (
      'from' => '<basepath>/SugarModules/modules/tra_CustomerFXRequest',
      'to' => 'modules/tra_CustomerFXRequest',
    ),
    2 => 
    array (
      'from' => '<basepath>/SugarModules/modules/tra_CustomerTransaction',
      'to' => 'modules/tra_CustomerTransaction',
    ),
    3 => 
    array (
      'from' => '<basepath>/SugarModules/modules/tra_LockedRate',
      'to' => 'modules/tra_LockedRate',
    ),
    4 => 
    array (
      'from' => '<basepath>/SugarModules/modules/tra_EFDailyTransaction',
      'to' => 'modules/tra_EFDailyTransaction',
    ),
  ),
  'language' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/tra_CustomerFXRequest.php',
      'to_module' => 'tra_CustomerFXRequest',
      'language' => 'en_us',
    ),
    1 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Accounts.php',
      'to_module' => 'Accounts',
      'language' => 'en_us',
    ),
    2 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/tra_CustomerFXRequest.php',
      'to_module' => 'tra_CustomerFXRequest',
      'language' => 'en_us',
    ),
    3 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/tra_LockedRate.php',
      'to_module' => 'tra_LockedRate',
      'language' => 'en_us',
    ),
    4 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/tra_CustomerTransaction.php',
      'to_module' => 'tra_CustomerTransaction',
      'language' => 'en_us',
    ),
    5 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Accounts.php',
      'to_module' => 'Accounts',
      'language' => 'en_us',
    ),
    6 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/tra_CustomerTransaction.php',
      'to_module' => 'tra_CustomerTransaction',
      'language' => 'en_us',
    ),
    7 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/acc_EFBankAccount.php',
      'to_module' => 'acc_EFBankAccount',
      'language' => 'en_us',
    ),
    8 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/tra_LockedRate.php',
      'to_module' => 'tra_LockedRate',
      'language' => 'en_us',
    ),
    9 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Accounts.php',
      'to_module' => 'Accounts',
      'language' => 'en_us',
    ),
    10 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/tra_EFDailyTransaction.php',
      'to_module' => 'tra_EFDailyTransaction',
      'language' => 'en_us',
    ),
    11 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/acc_EFBankAccount.php',
      'to_module' => 'acc_EFBankAccount',
      'language' => 'en_us',
    ),
    12 => 
    array (
      'from' => '<basepath>/SugarModules/language/application/en_us.lang.php',
      'to_module' => 'application',
      'language' => 'en_us',
    ),
  ),
  'vardefs' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/tra_customerfxrequest_accounts_tra_CustomerFXRequest.php',
      'to_module' => 'tra_CustomerFXRequest',
    ),
    1 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/tra_customerfxrequest_accounts_Accounts.php',
      'to_module' => 'Accounts',
    ),
    2 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/tra_customerfxrequest_tra_lockedrate_tra_CustomerFXRequest.php',
      'to_module' => 'tra_CustomerFXRequest',
    ),
    3 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/tra_customerfxrequest_tra_lockedrate_tra_LockedRate.php',
      'to_module' => 'tra_LockedRate',
    ),
    4 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/tra_customertransaction_accounts_tra_CustomerTransaction.php',
      'to_module' => 'tra_CustomerTransaction',
    ),
    5 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/tra_customertransaction_accounts_Accounts.php',
      'to_module' => 'Accounts',
    ),
    6 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/tra_customertransaction_acc_efbankaccount_tra_CustomerTransaction.php',
      'to_module' => 'tra_CustomerTransaction',
    ),
    7 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/tra_customertransaction_acc_efbankaccount_acc_EFBankAccount.php',
      'to_module' => 'acc_EFBankAccount',
    ),
    8 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/tra_lockedrate_accounts_tra_LockedRate.php',
      'to_module' => 'tra_LockedRate',
    ),
    9 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/tra_lockedrate_accounts_Accounts.php',
      'to_module' => 'Accounts',
    ),
    10 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/tra_efdailytransaction_acc_efbankaccount_tra_EFDailyTransaction.php',
      'to_module' => 'tra_EFDailyTransaction',
    ),
    11 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/tra_efdailytransaction_acc_efbankaccount_acc_EFBankAccount.php',
      'to_module' => 'acc_EFBankAccount',
    ),
  ),
  'layoutfields' => 
  array (
    0 => 
    array (
      'additional_fields' => 
      array (
      ),
    ),
    1 => 
    array (
      'additional_fields' => 
      array (
      ),
    ),
    2 => 
    array (
      'additional_fields' => 
      array (
      ),
    ),
    3 => 
    array (
      'additional_fields' => 
      array (
      ),
    ),
    4 => 
    array (
      'additional_fields' => 
      array (
      ),
    ),
    5 => 
    array (
      'additional_fields' => 
      array (
      ),
    ),
  ),
);