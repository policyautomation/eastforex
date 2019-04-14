(function(){

    $(document).ready(function () {
        
        toggleSoldCurrency();
        toggleBoughtCurrency();
      
        $('#sold_currency_1').change(function () {
            toggleSoldCurrency();
        });

        $('#bought_currency_1').change(function () {
            toggleBoughtCurrency();
        });
    });


    function toggleSoldCurrency() {

        const soldcurrency = $('#sold_currency_1').val();

        if (soldcurrency !== 'aud') {
            $('#sold_currency_2').parent().hide();
            $('#sold_term_2').parent().hide();
            $('#sold_amount_2').parent().hide();
        } else {
            $('#sold_currency_2').parent().show();
            $('#sold_term_2').parent().show();
            $('#sold_amount_2').parent().show();
        }
    }
    
    function toggleBoughtCurrency() {

        const boughtcurrency = $('#bought_currency_1').val();

        if (boughtcurrency !== 'aud') {
            $('#bought_currency_2').parent().hide();
            $('#bought_term_2').parent().hide();
            $('#bought_amount_2').parent().hide();
        } else {
            $('#bought_currency_2').parent().show();
            $('#bought_term_2').parent().show();
            $('#bought_amount_2').parent().show();
        }
    }
    
})();