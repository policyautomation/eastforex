<?php
/**
 * Created by PhpStorm.
 * User: Sai
 * Date: 2019-03-29
 * Time: 13:49
 */
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

class tra_CustomerFXRequestController extends SugarController
{


    public function action_getFXRates(){
        if (isset($_REQUEST['sold_currency']) && isset($_REQUEST['bought_currency'])){

            global $sugar_config;

            $API_URL = $sugar_config['live_rate_api_url'];
            $API_KEY = $sugar_config['live_rate_api_key'];

            $SoldCurrency = strtoupper($_REQUEST['sold_currency']);
            $BoughtCurrency = strtoupper($_REQUEST['bought_currency']);

            $RequestURL = $API_URL.'/api/price?key='.$API_KEY.'&rate='.$SoldCurrency.'_'.$BoughtCurrency;
            $response = file_get_contents($RequestURL);
            echo trim($response, '[]');
            //echo $response;


            //https://www.live-rates.com/api/price?key=12345&rate=EUR_USD
        }
    }
}


