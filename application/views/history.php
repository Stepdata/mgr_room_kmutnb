<html>
<body>
<div class="container-fluid">
<h1> ประวัติการใช้งาน </h1>
  <div class="row">
    <div class="col-md-10 col-md-offset-1">
      <div class="row">
        <div class="col">
        </div>
        <!-- /col -->
      </div>
      <!-- /row -->
    
    <!-- /row -->
    <div class="row">
      <div class="col">
        <table id="tableHistory" 
              data-toggle="table"
              data-search="true"
              data-sort-order="desc"
              data-ajax-options="status"
              data-sort-name="history_id" 
              data-pagination="true"
              data-side-pagination="client"
              data-page-size="10"
              data-page-list="[20, 25, 30, 35]"
              data-url= <?php echo (base_url()."dashboard/getHostory")?>
              data-filter-control="true"
              data-filter-show-clear="true"
              >
                <thead>
                <tr>
                    <th data-field="history_id" data-sortable="true">ลำดับ</th>
                    <th data-field="room" data-filter-control="select" data-sortable="true">ห้อง</th>
                    <th data-field="date_time" data-filter-control="select" data-sortable="true">วันที่</th>
                    <th data-field="start_time" data-filter-control="select" data-sortable="true">เวลาเริ่ม</th>
                    <th data-field="end_time" data-filter-control="select" data-sortable="true">เวลาสิ้นสุด</th>
                    <th data-field="name_user" data-filter-control="select" data-sortable="true">ผู้ใช้</th>
                </tr>
                </thead>
          </table>
      </div>
      <!-- /col -->
    </div>
    <!-- /row -->
  </div>
  <!-- /col -->
 </div>
 <!-- /row -->
</div>
 <!-- /container -->
</body>
</html>