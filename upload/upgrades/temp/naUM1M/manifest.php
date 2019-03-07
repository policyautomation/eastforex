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
  'key' => 'acc',
  'author' => '',
  'description' => '',
  'icon' => '',
  'is_uninstallable' => true,
  'name' => 'Account',
  'published_date' => '2018-12-03 11:37:33',
  'type' => 'module',
  'version' => 1543837054,
  'remove_tables' => 'prompt',
);


$installdefs = array (
  'id' => 'Account',
  'beans' => 
  array (
    0 => 
    array (
      'module' => 'acc_DailyRate',
      'class' => 'acc_DailyRate',
      'path' => 'modules/acc_DailyRate/acc_DailyRate.php',
      'tab' => true,
    ),
    1 => 
    array (
      'module' => 'acc_Balance',
      'class' => 'acc_Balance',
      'path' => 'modules/acc_Balance/acc_Balance.php',
      'tab' => true,
    ),
    2 => 
    array (
      'module' => 'acc_Identity',
      'class' => 'acc_Identity',
      'path' => 'modules/acc_Identity/acc_Identity.php',
      'tab' => true,
    ),
    3 => 
    array (
      'module' => 'acc_CustomerBankAccount',
      'class' => 'acc_CustomerBankAccount',
      'path' => 'modules/acc_CustomerBankAccount/acc_CustomerBankAccount.php',
      'tab' => true,
    ),
    4 => 
    array (
      'module' => 'acc_EFBankAccount',
      'class' => 'acc_EFBankAccount',
      'path' => 'modules/acc_EFBankAccount/acc_EFBankAccount.php',
      'tab' => true,
    ),
  ),
  'layoutdefs' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/layoutdefs/acc_balance_accounts_Accounts.php',
      'to_module' => 'Accounts',
    ),
    1 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/layoutdefs/acc_identity_accounts_Accounts.php',
      'to_module' => 'Accounts',
    ),
    2 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/layoutdefs/acc_customerbankaccount_accounts_Accounts.php',
      'to_module' => 'Accounts',
    ),
  ),
  'relationships' => 
  array (
    0 => 
    array (
      'meta_data' => '<basepath>/SugarModules/relationships/relationships/acc_balance_accountsMetaData.php',
    ),
    1 => 
    array (
      'meta_data' => '<basepath>/SugarModules/relationships/relationships/acc_identity_accountsMetaData.php',
    ),
    2 => 
    array (
      'meta_data' => '<basepath>/SugarModules/relationships/relationships/acc_customerbankaccount_accountsMetaData.php',
    ),
    3 => 
    array (
      'meta_data' => '<basepath>/SugarModules/relationships/relationships/acc_efbankaccount_acc_balanceMetaData.php',
    ),
  ),
  'image_dir' => '<basepath>/icons',
  'copy' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/SugarModules/modules/acc_DailyRate',
      'to' => 'modules/acc_DailyRate',
    ),
    1 => 
    array (
      'from' => '<basepath>/SugarModules/modules/acc_Balance',
      'to' => 'modules/acc_Balance',
    ),
    2 => 
    array (
      'from' => '<basepath>/SugarModules/modules/acc_Identity',
      'to' => 'modules/acc_Identity',
    ),
    3 => 
    array (
      'from' => '<basepath>/SugarModules/modules/acc_CustomerBankAccount',
      'to' => 'modules/acc_CustomerBankAccount',
    ),
    4 => 
    array (
      'from' => '<basepath>/SugarModules/modules/acc_EFBankAccount',
      'to' => 'modules/acc_EFBankAccount',
    ),
  ),
  'language' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/acc_Balance.php',
      'to_module' => 'acc_Balance',
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
      'from' => '<basepath>/SugarModules/relationships/language/acc_Identity.php',
      'to_module' => 'acc_Identity',
      'language' => 'en_us',
    ),
    3 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Accounts.php',
      'to_module' => 'Accounts',
      'language' => 'en_us',
    ),
    4 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/acc_CustomerBankAccount.php',
      'to_module' => 'acc_CustomerBankAccount',
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
      'from' => '<basepath>/SugarModules/relationships/language/acc_Balance.php',
      'to_module' => 'acc_Balance',
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
      'from' => '<basepath>/SugarModules/language/application/en_us.lang.php',
      'to_module' => 'application',
      'language' => 'en_us',
    ),
  ),
  'vardefs' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/acc_balance_accounts_acc_Balance.php',
      'to_module' => 'acc_Balance',
    ),
    1 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/acc_balance_accounts_Accounts.php',
      'to_module' => 'Accounts',
    ),
    2 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/acc_identity_accounts_acc_Identity.php',
      'to_module' => 'acc_Identity',
    ),
    3 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/acc_identity_accounts_Accounts.php',
      'to_module' => 'Accounts',
    ),
    4 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/acc_customerbankaccount_accounts_acc_CustomerBankAccount.php',
      'to_module' => 'acc_CustomerBankAccount',
    ),
    5 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/acc_customerbankaccount_accounts_Accounts.php',
      'to_module' => 'Accounts',
    ),
    6 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/acc_efbankaccount_acc_balance_acc_Balance.php',
      'to_module' => 'acc_Balance',
    ),
    7 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/acc_efbankaccount_acc_balance_acc_EFBankAccount.php',
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
  ),
);