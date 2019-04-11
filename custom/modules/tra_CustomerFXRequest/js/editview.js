document.addEventListener("DOMContentLoaded", function (event) {
    //disable API Rate columnß
    //document.getElementById('api_rate').disabled = true;

    const checkbox = document.getElementById('update_api_rate_c');

    checkbox.addEventListener('change', (event) => {
        if (event.target.checked) {
            //console.log('checked');

            SUGAR.ajaxUI.showLoadingPanel();
            setTimeout(function () {
                getAPIRate();
            }, 1000);

        }
    });

});

function getAPIRate(){
    //read currency values
    var SoldCurrencyDOM = document.getElementById("sold_currency_1");
    var SoldCurrency = SoldCurrencyDOM.options[SoldCurrencyDOM.selectedIndex].value;

    var BoughtCurrencyDOM = document.getElementById("bought_currency_1");
    var BoughtCurrency = BoughtCurrencyDOM.options[BoughtCurrencyDOM.selectedIndex].value;


    //construct URL to fetch JSON data for the tree
    let JsonDataCall = "index.php?module=tra_CustomerFXRequest" +
        "&action=getFXRates" +
        "&to_pdf=true" +
        "&sold_currency=" + SoldCurrency +
        "&bought_currency=" + BoughtCurrency;

    //fetch JSON data
    fetch(JsonDataCall)
        .then(response => response.json())
        .then(data => {
            console.log(JSON.stringify(data));
            document.getElementById("update_api_rate_c").checked = false;
            SUGAR.ajaxUI.hideLoadingPanel();
            RenderRate(data);
        })
        .catch(error => console.error(error));
}

function RenderRate(data){
    //var Obj = data;
    if(data.error){
        //alert(data.error);
        swal(data.error, "Please update Sold Currency 1 and Bought Currency 1", "error");
    }
    else{
        var api_rate_response = data.rate;
        document.getElementById('api_rate').value = api_rate_response;
        document.getElementById('final_rate').value = api_rate_response;
    }

}