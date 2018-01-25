var base_url = window.location.origin+'/manage-room';
$(function () {
    $('#tableHistory').bootstrapTable({
        url: base_url+'/dashboard/getHostory',
        columns: [{
            field: 'history_id',
            title: 'ลำดับ',
            sortable: 'true',
            valign: 'middle',
            align: 'center',
        },{
            field: 'name_user',
            title: 'ชื่อ',
            sortable: 'true',
            valign: 'middle',
            halign: 'center',
            width: '30%',
        }, {
            field: 'date_time',
            title: 'ภาควิชา',
            sortable: 'true',
            valign: 'middle',
            align: 'center',
        },{
            field: 'start_time',
            title: 'คณะ',
            sortable: 'true',
            valign: 'middle',
            align: 'center',
        },{
            field: 'end_time',
            title: 'รหัสผ่าน',
            sortable: 'true',
            valign: 'middle',
            align: 'center',
        }]
    });
});
window.icons = {
        refresh: 'fa-refresh'
};
