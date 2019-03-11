(function () {

    $(document).ready(function () {
        toggleOccupationOther();
        toggleCustomerViewByType();

        $('#type_c').change(function () {
            toggleCustomerViewByType();
        });

        $('#occupation_c').change(function () {
            toggleOccupationOther();
        });
    });

    function toggleCustomerViewByType() {

        let panels = $('.panel').children();

        let information = panels.filter('[data-id="LBL_EDITVIEW_PANEL1"]').parent();
        let company = panels.filter('[data-id="LBL_EDITVIEW_PANEL2"]').parent();

        let type = $('#type_c').val();

        if (type === 'individual') {
            information.show();
            company.hide();
        } else if (type === 'company') {
            information.hide();
            company.show();
        }
    }

    function toggleOccupationOther() {

        let occupation = $('#occupation_c').val();

        if (occupation !== 'other') {
            $('#occupation_other_c').parent().parent().hide();
        } else {
            $('#occupation_other_c').parent().parent().show();
        }
    }

})();
