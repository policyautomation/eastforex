(function(){

    $(document).ready(function () {
        
        toggleBankNameOther();
      
        $('#beneficiary_bank_name').change(function () {
            toggleBankNameOther();

        });
    });


    function toggleBankNameOther() {

        const bankname = $('#beneficiary_bank_name').val();

        if (bankname !== 'other') {
            $('#beneficiary_bank_name_other').parent().parent().hide();
        } else {
            $('#beneficiary_bank_name_other').parent().parent().show();
        }
    }
    

})();