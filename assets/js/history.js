var base_url = window.location.origin+'/manage-room';

// $(function() {
    // function getNumberFilterTemplate(fieldId) {
    //   var numberFilterClass = 'numberFilter-' + fieldId,
    //     template = function(bootstrapTable, col, isVisible) {
    //       var search = function(event, value) {
    //         bootstrapTable.searchText = undefined;
    //         clearTimeout(bootstrapTable.timeoutId);
    //         bootstrapTable.timeoutId = setTimeout(function() {
    //           bootstrapTable.onColumnSearch(event, fieldId, value);
    //         }, bootstrapTable.options.searchTimeOut);
    //       };
    //       var $el = $('<div class="input-group input-group-sm ' + numberFilterClass + '" style="width: 100%; visibility:' + isVisible + '">' +
    //           '<span class="input-group-addon">&gt;</span>' +
    //           '<input type="number" class="form-control">' +
    //           '</div>'),
    //         $input = $el.find('input');
    //       $input.off('keyup').on('keyup', function(event) {
    //         search(event, $(this).val());
    //       });
    //       $input.off('mouseup').on('mouseup', function(event) {
    //         var $input = $(this),
    //           oldValue = $input.val();
    //         if (oldValue === "") {
    //           return;
    //         }
    //         setTimeout(function() {
    //           var newValue = $input.val();
    //           if (newValue === "") {
    //             search(event, newValue);
    //           }
    //         }, 1);
    //       });
    //       return $el;
    //     };
    //   return template;
    // }

    // var options = {
    //     url: base_url+'/dashboard/getHostory',
    //   columns: [{
    //         field: 'history_id',
    //         title: 'ลำดับ',
    //         sortable: 'true',
    //         valign: 'middle',
    //         align: 'center',
    //     },{
    //         field: 'room',
    //         title: 'ห้อง',
    //         sortable: 'true',
    //         valign: 'middle',
    //         halign: 'center',
    //     }, {
    //         field: 'date_time',
    //         title: 'วันที่',
    //         sortable: 'true',
    //         valign: 'middle',
    //         align: 'center',
    //     },{
    //         field: 'start_time',
    //         title: 'เวลาเริ่ม',
    //         sortable: 'true',
    //         valign: 'middle',
    //         align: 'center',
    //         filter: {
    //             type: "input"
    //         }
    //     },{
    //         field: 'end_time',
    //         title: 'เวลาสิ้นสุด',
    //         sortable: 'true',
    //         valign: 'middle',
    //         align: 'center',
    //     },{
    //         field: 'name_user',
    //         title: 'ผู้ใช้',
    //         sortable: 'true',
    //         valign: 'middle',
    //         align: 'center',
    //     }],
    //     filter: true,
    //     filterTemplate: {
    //         input: function(bootstrapTable, column, isVisible) {
    //         return '<input type="text" class="form-control input-sm" data-filter-field="' + column.field + '" style="width: 100%; visibility:' + isVisible + '">';
    //         }
    //     }
    // };
    // var $table = $("#tableHistory").bootstrapTable(options);
    // $table.bootstrapTable("setSelect2Data", "", ["", "item 1", "item 2", "item 3"]);
//   });






// เก็บไว้
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
            field: 'room',
            title: 'ห้อง',
            sortable: 'true',
            valign: 'middle',
            halign: 'center',
        }, {
            field: 'date_time',
            title: 'วันที่',
            sortable: 'true',
            valign: 'middle',
            align: 'center',
        },{
            field: 'start_time',
            title: 'เวลาเริ่ม',
            sortable: 'true',
            valign: 'middle',
            align: 'center',
            filter: {
                type: "select",
                data: []
              }
        },{
            field: 'end_time',
            title: 'เวลาสิ้นสุด',
            sortable: 'true',
            valign: 'middle',
            align: 'center',
        },{
            field: 'name_user',
            title: 'ผู้ใช้',
            sortable: 'true',
            valign: 'middle',
            align: 'center',
        }],
        filter: true,
        filterTemplate: {
            input: function(bootstrapTable, column, isVisible) {
              return '<input type="text" class="form-control input-sm" data-filter-field="' + column.field + '" style="width: 100%; visibility:' + isVisible + '">';
            }
        }
    });
});
window.icons = {
        refresh: 'fa-refresh'
};
