<?php
/**
 * Created by PhpStorm.
 * User: Sai
 * Date: 2019-03-26
 * Time: 13:19
 */
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

class AccountsController extends SugarController
{
    public static $data_arr;


    /**
     *
     */
    public function action_getJSONforRelationshipTree(){

         global $data_arr;
         global $sugar_config;

         $data_arr = array();
         $TreeQueryLimit = $sugar_config['relationship_tree_limit'];


        if (isset($_REQUEST ['parent_module']) && isset($_REQUEST ['parent_record_id'])) {
            $ParentModule = $_REQUEST['parent_module'];
            $ParentModuleID = $_REQUEST['parent_record_id'];



            //get Parent module record name
            $bean = BeanFactory::getBean($ParentModule, $ParentModuleID);
            $ParentModuleRecordName = $bean->name;

            //Customer Details
            $Customer_arr = array(
                'name' => $ParentModuleID,
                'label' => $ParentModuleRecordName,
                'redirect_url' => '?module='. $ParentModule .'&action=DetailView&record='.$ParentModuleID,
                'parent' => 'null',
                'image_path' => 'themes/default/images/Accounts.gif'
            );

            array_push($data_arr,$Customer_arr);

            //get related customer data
            $getrelatedCustomerDataSQL = "SELECT
                                               a.id as name
                                             ,a.name as label
                                             ,CONCAT(\"?module=Accounts&action=DetailView&record=\", a.id) as redirect_url
                                            FROM
                                            accounts_accounts_1_c aa
                                            INNER JOIN accounts a on aa.accounts_accounts_1accounts_idb = a.id and a.deleted = 0
                                            WHERE
                                              aa.deleted = 0 and
                                              aa.accounts_accounts_1accounts_ida = '$ParentModuleID'";
            $result = $GLOBALS["db"]->query($getrelatedCustomerDataSQL);
            while($row = $GLOBALS["db"]->fetchByAssoc($result)) {
                $row_arr['name'] = $row['name'];
                $row_arr['label'] = $row['label'];
                $row_arr['parent'] = $ParentModuleID;
                $row_arr['redirect_url'] = $row['redirect_url'];
                $row_arr['image_path'] = 'themes/default/images/Accounts.gif';

                array_push($data_arr, $row_arr);
            }

            //get customer bank accounts
            $CustomerBankAccountsSQL = "SELECT
                                               bank_acc.id as name
                                              ,bank_acc.name as label
                                              ,CONCAT(\"?module=acc_CustomerBankAccount&action=DetailView&record=\", bank_acc.id) as redirect_url
                                        FROM acc_customerbankaccount bank_acc
                                        INNER JOIN acc_customerbankaccount_accounts_c as acc_bank_jt1
                                          on bank_acc.id = acc_bank_jt1.acc_customerbankaccount_accountsacc_customerbankaccount_idb
                                               and acc_bank_jt1.deleted = 0
                                        INNER  JOIN accounts as acc
                                          on acc_bank_jt1.acc_customerbankaccount_accountsaccounts_ida = acc.id
                                               and acc.deleted=0 and acc.id='$ParentModuleID'
                                        WHERE bank_acc.deleted = 0
                                        ORDER BY bank_acc.date_entered DESC LIMIT $TreeQueryLimit";


            $result = $GLOBALS["db"]->query($CustomerBankAccountsSQL);
            while($row = $GLOBALS["db"]->fetchByAssoc($result)) {
                $row_arr['name'] = $row['name'];
                $row_arr['label'] = $row['label'];
                $row_arr['parent'] = $ParentModuleID;
                $row_arr['redirect_url'] = $row['redirect_url'];
                $row_arr['image_path'] = 'custom/themes/default/images/acc_CustomerBankAccount.gif';

                array_push($data_arr, $row_arr);

                $this->getTransaction($row['name'],"acc_customerbankaccount");

            }

            //get customer -> balance
            $getCustomerBalanceSQL = "select
                                           ab.id as name
                                         , ab.name as label
                                         , CONCAT(\"?module=acc_Balance&action=DetailView&record=\", ab.id) as redirect_url
                                    FROM
                                         acc_balance ab
                                    INNER JOIN acc_balance_accounts_c as acc_ab
                                      on ab.id = acc_ab.acc_balance_accountsacc_balance_idb
                                           and acc_ab.acc_balance_accountsaccounts_ida = '$ParentModuleID'
                                           and acc_ab.deleted = 0
                                      ORDER BY ab.date_entered DESC LIMIT $TreeQueryLimit";

            $getCustomerBalanceResult = $GLOBALS["db"]->query($getCustomerBalanceSQL);
            while($CB_row = $GLOBALS["db"]->fetchByAssoc($getCustomerBalanceResult)) {
                $row_arr['name'] = $CB_row['name'];
                $row_arr['label'] = $CB_row['label'];
                $row_arr['parent'] = $ParentModuleID;
                $row_arr['redirect_url'] = $CB_row['redirect_url'];
                $row_arr['image_path'] = 'custom/themes/default/images/acc_balance.gif';

                array_push($data_arr, $row_arr);

                 $this->getTransaction($CB_row['name'],"acc_Balance");


            }

            $this->getFXRequest($ParentModuleID,"accounts");

            $this->getLockedRate($ParentModuleID);


            //print JSON
            echo json_encode($data_arr);

        }
        else {
            $GLOBALS['log']->fatal("RelationshipTree render call - Params missing in the AJAX call");
        }
    }


    /**
     * @param $ParentModuleID
     * @param $ParentModule
     * @return mixed
     */
    public function getTransaction($ParentModuleID, $ParentModule){
        global $data_arr;
        global $sugar_config;

        $TreeQueryLimit = $sugar_config['relationship_tree_limit'];

        if($ParentModule === 'acc_customerbankaccount'){
            $getCustomerTransactions = "SELECT
                                           ctr.id as name
                                         , ctr.name as label
                                         , CONCAT(\"?module=tra_CustomerTransaction&action=DetailView&record=\", ctr.id) as redirect_url
                                    FROM
                                      tra_customertransaction as ctr
                                    INNER JOIN tra_customertransaction_acc_customerbankaccount_c as ctr_cba
                                      on ctr.id = ctr_cba.tra_custom2946saction_idb
                                           and ctr_cba.tra_custom1e70account_ida = '$ParentModuleID'
                                           and ctr_cba.deleted = 0
                                      ORDER BY ctr.date_entered DESC LIMIT $TreeQueryLimit";


            $getCustomerTransactionsResult = $GLOBALS["db"]->query($getCustomerTransactions);

            while($CCT_row = $GLOBALS["db"]->fetchByAssoc($getCustomerTransactionsResult)){
                $row_arr['name'] = $CCT_row['name'];
                $row_arr['label'] = $CCT_row['label'];
                $row_arr['parent'] = $ParentModuleID;
                $row_arr['redirect_url'] = $CCT_row['redirect_url'];
                $row_arr['image_path'] = 'custom/themes/default/images/tra_CustomerTransaction.gif';

                array_push($data_arr,$row_arr);

            }
        }else if($ParentModule === 'acc_Balance'){
            $getBalance_CustomerTransactionSQL = "select
                                                           ctr.id  as name
                                                         ,ctr.name as label
                                                         ,CONCAT(\"?module=tra_CustomerTransaction&action=DetailView&record=\", ctr.id) as redirect_url
                                                    FROM
                                                         acc_balance bal
                                                    INNER JOIN tra_customertransaction_acc_balance_c bal_ctr
                                                      on bal.id = bal_ctr.tra_customertransaction_acc_balanceacc_balance_ida
                                                           and bal_ctr.deleted = 0
                                                    INNER JOIN tra_CustomerTransaction ctr
                                                      on bal_ctr.tra_customertransaction_acc_balancetra_customertransaction_idb = ctr.id
                                                           and ctr.deleted = 0
                                                    where bal.id = '$ParentModuleID'
                                                    ORDER BY ctr.date_entered DESC LIMIT $TreeQueryLimit";

            $getBalance_CustomerTransactionResult = $GLOBALS["db"]->query($getBalance_CustomerTransactionSQL);
            while ($BCTR_row = $GLOBALS["db"]->fetchByAssoc($getBalance_CustomerTransactionResult)) {
                $row_arr['name'] = $BCTR_row['name'];
                $row_arr['label'] = $BCTR_row['label'];
                $row_arr['parent'] = $ParentModuleID; //balance ID
                $row_arr['redirect_url'] = $BCTR_row['redirect_url'];
                $row_arr['image_path'] = 'custom/themes/default/images/tra_CustomerTransaction.gif';


                array_push($data_arr, $row_arr);

            }
        }
        else if($ParentModule === 'tra_CustomerFXRequest'){

            $FXRequest_getCustomerTransactionsSQL = "SELECT
                                                           tra.id as name
                                                         , tra.name as label
                                                         , CONCAT(\"?module=tra_CustomerTransaction&action=DetailView&record=\", tra.id) as redirect_url
                                                    FROM
                                                           tra_customertransaction tra
                                                    INNER JOIN tra_customerfxrequest_tra_customertransaction_c tra_fxr
                                                      on tra.id = tra_fxr.tra_custom41c1saction_idb
                                                           and tra_fxr.tra_customc9d6request_ida='$ParentModuleID'
                                                           and tra_fxr.deleted = 0
                                                            ORDER BY tra.date_entered DESC LIMIT $TreeQueryLimit";
            $FXRequest_getCustomerTransactionsResult = $GLOBALS["db"]->query($FXRequest_getCustomerTransactionsSQL);

            while ($FX_TRrow = $GLOBALS["db"]->fetchByAssoc($FXRequest_getCustomerTransactionsResult)) {
                $row_arr['name'] = $FX_TRrow['name'];
                $row_arr['label'] = $FX_TRrow['label'];
                $row_arr['parent'] = $ParentModuleID; //balance ID
                $row_arr['redirect_url'] = $FX_TRrow['redirect_url'];
                $row_arr['image_path'] = 'custom/themes/default/images/tra_CustomerTransaction.gif';


                array_push($data_arr, $row_arr);

            }

        }
        return $data_arr;
    }


    /**
     * @param $ParentModuleID
     * @param $ParentModule
     * @return mixed
     */
    public function getFXRequest($ParentModuleID, $ParentModule){
        global $data_arr;
        global $sugar_config;

        $TreeQueryLimit = $sugar_config['relationship_tree_limit'];

        if($ParentModule === 'accounts'){
            $getCustomerFXRequest = "SELECT
                                           fx_req.id as name
                                         , fx_req.name as label
                                         , CONCAT(\"?module=tra_CustomerFXRequest&action=DetailView&record=\", fx_req.id) as redirect_url
                                    FROM
                                         tra_customerfxrequest fx_req
                                    INNER JOIN tra_customerfxrequest_accounts_c as acc_fx_jt1
                                      on fx_req.id = acc_fx_jt1.tra_customerfxrequest_accountstra_customerfxrequest_idb
                                           and acc_fx_jt1.tra_customerfxrequest_accountsaccounts_ida = '$ParentModuleID'
                                           and acc_fx_jt1.deleted = 0
                                           ORDER BY fx_req.date_entered DESC LIMIT $TreeQueryLimit";

            $getCustomerFXRequestResult = $GLOBALS["db"]->query($getCustomerFXRequest);
            while($CFXR_row = $GLOBALS["db"]->fetchByAssoc($getCustomerFXRequestResult)){
                $row_arr['name'] = $CFXR_row['name'];
                $row_arr['label'] = $CFXR_row['label'];
                $row_arr['parent'] = $ParentModuleID;
                $row_arr['redirect_url'] = $CFXR_row['redirect_url'];
                $row_arr['image_path'] = 'custom/themes/default/images/tra_CustomerFXRequest.gif';

                array_push($data_arr,$row_arr);

                $this->getTransaction($CFXR_row['name'],"tra_CustomerFXRequest");

            }
        }
        else if ($ParentModule === 'tra_LockedRate'){
            $getFxRequestSQL = "SELECT
                                       fx.id as name
                                     , fx.name as label
                                     ,CONCAT(\"?module=tra_CustomerFXRequest&action=DetailView&record=\", fx.id) as redirect_url
                                FROM tra_customerfxrequest fx
                                INNER JOIN tra_customerfxrequest_tra_lockedrate_c as lr_fx
                                  on fx.id = lr_fx.tra_customerfxrequest_tra_lockedratetra_customerfxrequest_idb
                                       and lr_fx.tra_customerfxrequest_tra_lockedratetra_lockedrate_ida = '$ParentModuleID'
                                       and lr_fx.deleted = 0
                                      ORDER BY fx.date_entered DESC LIMIT $TreeQueryLimit";

            $getFxRequestResult = $GLOBALS["db"]->query($getFxRequestSQL);
            while($CFX_row = $GLOBALS["db"]->fetchByAssoc($getFxRequestResult)){
                $row_arr['name'] = $CFX_row['name'];
                $row_arr['label'] = $CFX_row['label'];
                $row_arr['parent'] = $ParentModuleID;
                $row_arr['redirect_url'] = $CFX_row['redirect_url'];
                $row_arr['image_path'] = 'custom/themes/default/images/tra_CustomerFXRequest.gif';

                array_push($data_arr,$row_arr);

                $this->getTransaction($CFX_row['name'],"tra_CustomerFXRequest");

            }

        }
        return $data_arr;

    }

    /**
     * @param $ParentModuleID
     * @return mixed
     */
    public function getLockedRate($ParentModuleID){
        global $data_arr;
        global $sugar_config;
        $TreeQueryLimit = $sugar_config['relationship_tree_limit'];

        $getCustomerLockedRateSQL = "select
                                           lr.id as name
                                         , lr.name as label
                                         ,CONCAT(\"?module=tra_LockedRate&action=DetailView&record=\", lr.id) as redirect_url
                                    from
                                         tra_lockedrate as lr
                                    INNER JOIN tra_lockedrate_accounts_c as lr_acc
                                      on lr.id = lr_acc.tra_lockedrate_accountstra_lockedrate_idb
                                           and lr_acc.tra_lockedrate_accountsaccounts_ida = '$ParentModuleID'
                                           and lr_acc.deleted = 0
                                          ORDER BY lr.date_entered DESC LIMIT $TreeQueryLimit";

        $getCustomerLockedRateResult = $GLOBALS["db"]->query($getCustomerLockedRateSQL);
        while($CLR_row = $GLOBALS["db"]->fetchByAssoc($getCustomerLockedRateResult)){
            $row_arr['name'] = $CLR_row['name'];
            $row_arr['label'] = $CLR_row['label'];
            $row_arr['parent'] = $ParentModuleID;
            $row_arr['redirect_url'] = $CLR_row['redirect_url'];
            $row_arr['image_path'] = 'custom/themes/default/images/tra_LockedRate.gif';

            array_push($data_arr,$row_arr);
            $this->getFXRequest($CLR_row['name'],"tra_LockedRate");

        }
        return $data_arr;
    }



}