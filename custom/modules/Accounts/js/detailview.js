$(document).ready(function(){

    $('#view_relationship_tree').click(function () {
        let RecordId = $("input[name=record]").val();
        let Module = "Accounts";

        window.open(
            'index.php?entryPoint=RelationShipTree&parent_module=' + Module + '&parent_record_id=' + RecordId,
            'popUpWindow',
            'height = 800,width = 1300'
        );

    });
});