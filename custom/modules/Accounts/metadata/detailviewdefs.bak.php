<?php
// created: 2019-04-10 13:34:27
$viewdefs['Accounts']['DetailView'] = array (
  'templateMeta' => 
  array (
    'form' => 
    array (
      'buttons' => 
      array (
        'SEND_CONFIRM_OPT_IN_EMAIL' => 
        array (
          'customCode' => '<input type="submit" class="button hidden" disabled="disabled" title="{$APP.LBL_SEND_CONFIRM_OPT_IN_EMAIL}" onclick="this.form.return_module.value=\'Accounts\'; this.form.return_action.value=\'Accounts\'; this.form.return_id.value=\'{$fields.id.value}\'; this.form.action.value=\'sendConfirmOptInEmail\'; this.form.module.value=\'Accounts\'; this.form.module_tab.value=\'Accounts\';" name="send_confirm_opt_in_email" value="{$APP.LBL_SEND_CONFIRM_OPT_IN_EMAIL}"/>',
          'sugar_html' => 
          array (
            'type' => 'submit',
            'value' => '{$APP.LBL_SEND_CONFIRM_OPT_IN_EMAIL}',
            'htmlOptions' => 
            array (
              'class' => 'button hidden',
              'id' => 'send_confirm_opt_in_email',
              'title' => '{$APP.LBL_SEND_CONFIRM_OPT_IN_EMAIL}',
              'onclick' => 'this.form.return_module.value=\'Accounts\'; this.form.return_action.value=\'DetailView\'; this.form.return_id.value=\'{$fields.id.value}\'; this.form.action.value=\'sendConfirmOptInEmail\'; this.form.module.value=\'Accounts\'; this.form.module_tab.value=\'Accounts\';',
              'name' => 'send_confirm_opt_in_email',
              'disabled' => true,
            ),
          ),
        ),
        0 => 'EDIT',
        1 => 'DUPLICATE',
        2 => 'DELETE',
        3 => 'FIND_DUPLICATES',
        'AOS_GENLET' => 
        array (
          'customCode' => '<input type="button" class="button" onClick="showPopup();" value="{$APP.LBL_PRINT_AS_PDF}">',
        ),
      ),
    ),
    'maxColumns' => '2',
    'widths' => 
    array (
      0 => 
      array (
        'label' => '10',
        'field' => '30',
      ),
      1 => 
      array (
        'label' => '10',
        'field' => '30',
      ),
    ),
    'includes' => 
    array (
      0 => 
      array (
        'file' => 'custom/modules/Accounts/AccountCustom.js',
      ),
      1 => 
      array (
        'file' => 'custom/modules/Accounts/js/detailview.js',
      ),
    ),
    'useTabs' => false,
    'tabDefs' => 
    array (
      'LBL_ACCOUNT_INFORMATION' => 
      array (
        'newTab' => false,
        'panelDefault' => 'expanded',
      ),
      'LBL_EDITVIEW_PANEL1' => 
      array (
        'newTab' => false,
        'panelDefault' => 'expanded',
      ),
      'LBL_EDITVIEW_PANEL2' => 
      array (
        'newTab' => false,
        'panelDefault' => 'expanded',
      ),
    ),
    'syncDetailEditViews' => true,
  ),
  'panels' => 
  array (
    'lbl_account_information' => 
    array (
      0 => 
      array (
        0 => 
        array (
          'name' => 'customer_number_c',
          'label' => 'LBL_CUSTOMER_NUMBER',
        ),
        1 => 
        array (
          'name' => 'status_c',
          'studio' => 'visible',
          'label' => 'LBL_STATUS',
        ),
      ),
      1 => 
      array (
        0 => 
        array (
          'name' => 'phone_office',
          'comment' => 'The office phone number',
          'label' => 'LBL_PHONE_OFFICE',
        ),
        1 => 
        array (
          'name' => 'type_c',
          'studio' => 'visible',
          'label' => 'LBL_TYPE',
        ),
      ),
      2 => 
      array (
        0 => 
        array (
          'name' => 'phone_alternate',
          'comment' => 'An alternate phone number',
          'label' => 'LBL_PHONE_ALT',
        ),
        1 => 
        array (
          'name' => 'level_c',
          'studio' => 'visible',
          'label' => 'LBL_LEVEL',
        ),
      ),
      3 => 
      array (
        0 => 
        array (
          'name' => 'mobile_number_alt_c',
          'label' => 'LBL_MOBILE_NUMBER_ALT',
        ),
        1 => 
        array (
          'name' => 'referrer_c',
          'label' => 'LBL_REFERRER',
        ),
      ),
      4 => 
      array (
        0 => 
        array (
          'name' => 'email1',
          'studio' => 'false',
          'label' => 'LBL_EMAIL',
        ),
        1 => 
        array (
          'name' => 'phone_fax',
          'comment' => 'The fax phone number of this company',
          'label' => 'LBL_FAX',
        ),
      ),
      5 => 
      array (
        0 => 
        array (
          'name' => 'description',
          'comment' => 'Full text of the note',
          'label' => 'LBL_DESCRIPTION',
        ),
      ),
    ),
    'lbl_editview_panel1' => 
    array (
      0 => 
      array (
        0 => 
        array (
          'name' => 'first_name_c',
          'label' => 'LBL_FIRST_NAME',
        ),
        1 => 
        array (
          'name' => 'middle_name_c',
          'label' => 'LBL_MIDDLE_NAME',
        ),
      ),
      1 => 
      array (
        0 => 
        array (
          'name' => 'last_name_c',
          'label' => 'LBL_LAST_NAME',
        ),
        1 => 
        array (
          'name' => 'gender_c',
          'studio' => 'visible',
          'label' => 'LBL_GENDER',
        ),
      ),
      2 => 
      array (
        0 => 
        array (
          'name' => 'dob_c',
          'label' => 'LBL_DOB',
        ),
        1 => 
        array (
          'name' => 'occupation_c',
          'studio' => 'visible',
          'label' => 'LBL_OCCUPATION',
        ),
      ),
      3 => 
      array (
        0 => 
        array (
          'name' => 'wechat_id_c',
          'label' => 'LBL_WECHAT_ID',
        ),
        1 => 
        array (
          'name' => 'occupation_other_c',
          'label' => 'LBL_OCCUPATION_OTHER',
        ),
      ),
      4 => 
      array (
        0 => 
        array (
          'name' => 'linked_company_c',
          'studio' => 'visible',
          'label' => 'LBL_LINKED_COMPANY',
        ),
      ),
    ),
    'lbl_editview_panel2' => 
    array (
      0 => 
      array (
        0 => 
        array (
          'name' => 'company_name_c',
          'label' => 'LBL_COMPANY_NAME',
        ),
        1 => 
        array (
          'name' => 'abn_c',
          'label' => 'LBL_ABN',
        ),
      ),
      1 => 
      array (
        0 => 
        array (
          'name' => 'regulated_authority_c',
          'label' => 'LBL_REGULATED_AUTHORITY',
        ),
        1 => 
        array (
          'name' => 'structure_c',
          'studio' => 'visible',
          'label' => 'LBL_STRUCTURE',
        ),
      ),
      2 => 
      array (
        0 => 
        array (
          'name' => 'website',
          'type' => 'link',
          'label' => 'LBL_WEBSITE',
          'displayParams' => 
          array (
            'link_target' => '_blank',
          ),
        ),
        1 => 
        array (
          'name' => 'name',
          'comment' => 'Name of the Company',
          'label' => 'LBL_NAME',
        ),
      ),
      3 => 
      array (
        0 => 
        array (
          'name' => 'billing_address_street',
          'label' => 'LBL_BILLING_ADDRESS',
          'type' => 'address',
          'displayParams' => 
          array (
            'key' => 'billing',
          ),
        ),
        1 => 
        array (
          'name' => 'shipping_address_street',
          'label' => 'LBL_SHIPPING_ADDRESS',
          'type' => 'address',
          'displayParams' => 
          array (
            'key' => 'shipping',
          ),
        ),
      ),
      4 => 
      array (
        0 => 
        array (
          'name' => 'assigned_user_name',
          'label' => 'LBL_ASSIGNED_TO',
        ),
        1 => 
        array (
          'name' => 'account_type',
          'comment' => 'The Company is of this type',
          'label' => 'LBL_TYPE',
        ),
      ),
      5 => 
      array (
        0 => 
        array (
          'name' => 'industry',
          'comment' => 'The company belongs in this industry',
          'label' => 'LBL_INDUSTRY',
        ),
        1 => 
        array (
          'name' => 'annual_revenue',
          'comment' => 'Annual revenue for this company',
          'label' => 'LBL_ANNUAL_REVENUE',
        ),
      ),
      6 => 
      array (
        0 => 
        array (
          'name' => 'employees',
          'comment' => 'Number of employees, varchar to accomodate for both number (100) or range (50-100)',
          'label' => 'LBL_EMPLOYEES',
        ),
        1 => 
        array (
          'name' => 'parent_name',
          'label' => 'LBL_MEMBER_OF',
        ),
      ),
      7 => 
      array (
        0 => 'campaign_name',
        1 => 
        array (
          'name' => 'date_entered',
          'customCode' => '{$fields.date_entered.value} {$APP.LBL_BY} {$fields.created_by_name.value}',
        ),
      ),
      8 => 
      array (
        0 => 
        array (
          'name' => 'date_modified',
          'label' => 'LBL_DATE_MODIFIED',
          'customCode' => '{$fields.date_modified.value} {$APP.LBL_BY} {$fields.modified_by_name.value}',
        ),
      ),
    ),
  ),
);