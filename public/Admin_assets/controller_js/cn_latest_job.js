$(function () {
    var table = $('#project_data_table').DataTable({
        processing: true,
        serverSide: true,
        ajax: {
            url :"/admin/latest-job/data-table"
            // data: function (d) {
            //     d.category_id = $('#category_id').val(),
            //     d.sub_category_id = $('#sub_category_id').val()
            //     d.item_id = $('#item_id').val()
            // },
        },
        columns: [{
            data: 'DT_RowIndex',
            name: 'DT_RowIndex'
        },
        {
            data: 'title',
            name: 'title'
        },
        {
            data: 'status',
            name: 'status',
            orderable: false,
            searchable: false
        },
        {
            data: 'action',
            name: 'action',
            orderable: false,
            searchable: false
        }]
    });

    // $("#filter-btn").click(function(){
    //     table.draw();
    // })

    // $("#cancel-btn").click(function(){
    //     $("#item-filter-form")[0].reset();
    //     table.draw();
    // })

    // $("#category_id, #sub_category_id, #item_id").change(function(){
    //     table.draw();
    // });

    // function reload_table() {
    //     table.DataTable().ajax.reload(null, false);
    // }
})