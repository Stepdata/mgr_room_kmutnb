var base_url = window.location.origin+'/manage-room';
$(function () {
    $('#table').bootstrapTable({
        url: base_url+'/dashboard/getManageUser',
        columns: [{
            field: 'manage_user_id',
            title: 'ลำดับ',
            sortable: 'true',
            valign: 'middle',
            align: 'center',
            width: '5%',
        },{
            field: 'Name',
            title: 'ชื่อ',
            sortable: 'true',
            valign: 'middle',
            halign: 'center',
            width: '25%',
        }, {
            field: 'Department',
            title: 'ภาควิชา',
            sortable: 'true',
            valign: 'middle',
            align: 'center',
        },{
            field: 'Faculty',
            title: 'คณะ',
            sortable: 'true',
            valign: 'middle',
            align: 'center',
        },{
            field: 'password',
            title: 'รหัสผ่าน',
            sortable: 'true',
            valign: 'middle',
            align: 'center',
        }, {
            field: 'action',
            title: '',
            valign: 'middle',
            align: 'center',
            formatter: 'actionFormatter',
            events: 'actionEvents',
            width: '5%',
        }]
    });
});

function actionFormatter(value, row, index) {
    return [
        '<a class="btn btn-danger del" href="javascript:void(0)" title="Delete">',
        '<i class="fa fa-trash-o" aria-hidden="true"></i>',
        '</a>',
    ].join('');
}

window.actionEvents = {
    'click .del': function (e, value, row, index) {
        swal({
          title: 'ต้องการลบใช่ไหม',
          text: "คุณไม่สามารถย้อนกลับได้!",
          type: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'ยืนยัน',
          cancelButtonText: 'ยกเลิก'
        }).then((result) => {
          if (result.value) {
            $.ajax({
                type:"POST",
                url: base_url+"/dashboard/deluser",
                data: {data: JSON.stringify(row)},
                dataType: 'json'
            });
            swal({
              title: 'สำเร็จ',
              text: 'ลบรายการสำเร็จ',
              type: 'success',
              confirmButtonText: 'ปิด'
            }).then((result) => {
                if (result.value) {
                    location.reload();
                }
            })
          }
        })   
    }
};
window.icons = {
        refresh: 'fa-refresh'
};
