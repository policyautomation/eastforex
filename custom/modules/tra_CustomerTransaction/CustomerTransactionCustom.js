(function(){

    $(document).ready(function () {
        
        toggleBankAccounts();
      
        $('#type').change(function () {
            toggleBankAccounts();

        });
    });


    function toggleBankAccounts() {

        const transactiontype = $('#type').val();

        if (transactiontype === 'deposit') {
            $('#tra_customertransaction_acc_customerbankaccount_name').parent().parent().hide();
            $('#tra_customertransaction_acc_efbankaccount_name').parent().parent().show();
            $('#tra_custom1e70account_ida').parent().parent().hide();
            $('#tra_customertransaction_acc_efbankaccountacc_efbankaccount_ida').parent().parent().show();
        } else if (transactiontype === 'withdraw'){
            $('#tra_customertransaction_acc_efbankaccount_name').parent().parent().hide();
            $('#tra_customertransaction_acc_customerbankaccount_name').parent().parent().show();
            $('#tra_custom1e70account_ida').parent().parent().show();
            $('#tra_customertransaction_acc_efbankaccountacc_efbankaccount_ida').parent().parent().hide();
        } else {
            $('#tra_customertransaction_acc_customerbankaccount_name').parent().parent().show();
            $('#tra_customertransaction_acc_efbankaccount_name').parent().parent().show();
            $('#tra_custom1e70account_ida').parent().parent().show();
            $('#tra_customertransaction_acc_efbankaccountacc_efbankaccount_ida').parent().parent().show();
        }
    }
    
   
})();



