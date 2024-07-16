$(function () {
    var table = $('#project_data_table').DataTable({
        processing: true,
        serverSide: true,
        ajax: {
            url :"/admin/answer-key/data-table"
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
})