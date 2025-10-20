$(document).ready(function(){

    if ($('#frmStoreEmployee').length > 0) {
        let rules = {
            lib_department_id: {
                required: true
            },
            lib_designation_id: {
                required: true
            },
            name: {
                required: true,
                maxlength: 253
            },
            email: {
                required: true,
                maxlength: 253,
                email: true,
            },
            mobile_number: {
                required: true,
                maxlength: 253
            },
            image: {
                required: true,
            }
        };
        PX.ajaxRequest({
            element: 'frmStoreEmployee',
            validation: true,
            script: 'admin/employee/draft',
            rules,
            afterSuccess: {
                type: 'inflate_reset_response_data',
            }
        });
    }

    if ($('#frmUpdateEmployee').length > 0) {
        let rules = {
            lib_department_id: {
                required: true
            },
            lib_designation_id: {
                required: true
            },
            name: {
                required: true,
                maxlength: 253
            },
            email: {
                required: true,
                maxlength: 253,
                email: true,
            },
            mobile_number: {
                required: true,
                maxlength: 253
            },
        };
        PX.ajaxRequest({
            element: 'frmUpdateEmployee',
            validation: true,
            script: 'admin/employee/draft/'+$("#patch_id").val(),
            rules,
            afterSuccess: {
                type: 'inflate_response_data',
            }
        });
    }

    if ($("#dtEmployee").length > 0) {
        const {pageLang={}} = PX?.config;
        const {table={}} = pageLang;
        let col_draft = [
            {
                data: 'id',
                title: table?.id
            },
            {
                data: 'image',
                title: table?.avatar
            },
            {
                data: 'depertment.name',
                title: table?.lib_department_id
            },
            {
                data: 'designation.name',
                title: table?.lib_designation_id
            },
            {
                data: 'name',
                title: table?.name
            },
            {
                data: 'email',
                title: table?.email
            },
            {
                data: 'mobile_number',
                title: table?.mobile_number
            },
            {
                data: 'status',
                title: table?.status
            },
            {
                data: 'created_at',
                title: table?.created
            },

            {
                data: null,
                title: table?.action,
                class: 'text-end',
                render: function (data, type, row) {
                    return `<a href="${baseurl}admin/employee/draft/${data.id}/edit" class="btn btn-outline-secondary btn-sm edit" title="Edit">
                        <i class="fas fa-pencil-alt"></i>
                    </a>`;
                }
            },
        ];
        PX.renderDataTable('dtEmployee', {
            select: true,
            url: 'admin/employee/draft/list',
            columns: col_draft,
            pdf: [1, 2]
        });
    }
})

function dtEmployee(table, api, op) {
    PX.deleteAll({
        element: "deleteAllEmployee",
        script: "admin/employee/draft/delete-list",
        confirm: true,
        api,
    });
    PX.updateAll({
        element: "updateAllEmployee",
        script: "admin/employee/draft/update-list",
        confirm: true,
        dataCols: {
            key: "ids",
            items: [
                {
                    index: 1,
                    name: "ids",
                    type: "input",
                    data: [],
                },
                {
                    index: 1,
                    name: "serial",
                    type: "input",
                    data: []
                }
            ]
        },
        api,
        afterSuccess: {
            type: "inflate_response_data"
        }
    });
    PX?.dowloadPdf({ ...op, btn: "downloadEmployeePdf", dataTable: "yes" })
    PX?.dowloadExcel({ ...op, btn: "downloadEmployeeExcel", dataTable: "yes" })
}
