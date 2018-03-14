var base_url = window.location.origin+'/manage-room';

$(function () {
    $('#tableStatus').bootstrapTable({
        url: base_url+'/dashboard/getStatus',
        columns: [{
            field: 'classroom_id',
            title: 'ลำดับ',
            sortable: 'true',
            valign: 'middle',
            align: 'center',
        },{
            field: 'user',
            title: 'ผู้ใช้',
            sortable: 'true',
            valign: 'middle',
            halign: 'center',
        }, {
            field: 'date_start',
            title: 'วันที่',
            sortable: 'true',
            valign: 'middle',
            align: 'center',
        },{
            field: 'time_start',
            title: 'เวลาเริ่ม',
            sortable: 'true',
            valign: 'middle',
            align: 'center',
        },{
            field: 'status',
            title: 'สถานะห้อง',
            sortable: 'true',
            valign: 'middle',
            formatter: 'statusFormatter',
            align: 'center',
        }]
    });
});
function statusFormatter(value, row, index) {
    if(value!="ON"){
       return [
        '<center><div  style="width: 15px;height: 15px;background: red;-moz-border-radius: ',
        '13px;-webkit-border-radius: 13px;border-radius: 50px;"></center>'
        ].join(''); 
    }else{
        return [
            '<center><div style="width: 15px;height: 15px;background: green;-moz-border-radius: ',
            '13px;-webkit-border-radius: 13px;border-radius: 50px;"></center>'
            ].join(''); 
    }
}

window.icons = {
        refresh: 'fa-refresh'
};


