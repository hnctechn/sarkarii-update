$(document).on("click", ".change-status, .delete-record", function () {
    // alert($(this).data("action"));
    // return false;
    var id = $(this).data("id");
    var action = $(this).data("action");
    var table = $(this).data("table");
    var flash = $(this).data("flash");
    var actionDiv = $(this);
    var popup_message = action == "active_inactive" ? "Do you really want to change status ?" : "Do you really want to delete this record ?";
    if (confirm(popup_message)){
        $.ajax({
            type: "post",
            headers: {"X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")},
            data: {id: id, action: action, table: table, flash: flash},
            url: "change-status",
            beforeSend: function () {
                actionDiv.hide();
                actionDiv.html("<i class='fa fa-spin fa-spinner' style='color: #0c0c0c !important;'></i>").show();
            },
            success: function (data) {
                if (data.status) {
                    var oTable = $("#project_data_table").dataTable();
                    success_toast("Success", data.message);
                    if (data.user_status == "active") {
                        actionDiv.html("<i class='fa fa-toggle-on tgle-on' aria-hidden='true' title='Active'></i>");
                    } 
                    else if (data.user_status == "inactive") {
                        actionDiv.html("<i class='fa fa-toggle-off tgle-off' aria-hidden='true' title='In-Active'></i>");
                    } 
                    else {
                        actionDiv.html("<i class='fa fa-toggle-off tgle-off' aria-hidden='true' title='In-Active'></i>");
                    }
                    oTable.fnDraw(false);
                } else {
                    var oTable = $("#arm_data_table").dataTable();
                    eeror_toast("Error", data.message);
                    oTable.fnDraw(false);
                }
            },
        });
    }
});