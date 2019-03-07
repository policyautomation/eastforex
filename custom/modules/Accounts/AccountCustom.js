(function(){

  $( document ).ready(function() {
    toggleCustomerViewByType();

    $('#type_c').change(function(){
      toggleCustomerViewByType();
    });
  });

  function toggleCustomerViewByType() {
    let panels = $('.panel').children();

    let information = panels.filter('[data-id="LBL_EDITVIEW_PANEL1"]').parent();
    let company = panels.filter('[data-id="LBL_EDITVIEW_PANEL2"]').parent();

    let type = $('#type_c').val();

    if(type === 'individual') {
      information.show();
      company.hide();
    } else if(type === 'company') {
      information.hide();
      company.show();
    }
  }

})();
