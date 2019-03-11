(function () {

    $(document).ready(function () {
        statusMenuListFilter();
        toggleOccupationOther();
        toggleCustomerViewByType();

        $('#type_c').change(function () {
            statusMenuListFilter();

            toggleCustomerViewByType();
        });

        $('#occupation_c').change(function () {
            toggleOccupationOther();
        });
    });

    function toggleCustomerViewByType() {

        const panels = $('.panel').children();

        const information = panels.filter('[data-id="LBL_EDITVIEW_PANEL1"]').parent();
        const company = panels.filter('[data-id="LBL_EDITVIEW_PANEL2"]').parent();

        const type = $('#type_c').val();

        if (type === 'individual') {
            information.show();
            company.hide();
        } else if (type === 'company') {
            information.hide();
            company.show();
        }
    }

    function toggleOccupationOther() {

        const occupation = $('#occupation_c').val();

        if (occupation !== 'other') {
            $('#occupation_other_c').parent().parent().hide();
        } else {
            $('#occupation_other_c').parent().parent().show();
        }
    }


    function statusMenuListFilter() {

        const type = $('#type_c').val();

        if (type === 'company') {
            $('#status_c option[value="annual_review"]').show();
        } else {
            $('#status_c option[value="annual_review"]').hide();
        }

    }

})();
