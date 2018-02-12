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
    <div class="row" > 
      <div class="date-histroy form-group">
        <div class="col-sm-12">
          <div class="row">
            <input type="radio" name="date" id="date"> วันนี้
          </div>
          <div class="row" id="child-hist">
            <input type="radio" name="date" id="date" > วันที่
              <input type="text" class="date-time start" />
              <input type="text" class="time-time start" /> ถึง
              <input type="text" class="time-time end" />
              <input type="text" class="date-time end" />
          </div>
        </div>
      </div>
      <!-- /col -->
    </div>
    <!-- /row -->
    <div class="row">
      <div class="col">
        <table id="tableHistory" 
          data-toolbar="#toolbar"
          data-search="true"
          data-icons-prefix="fa"
          data-icons="icons"
          data-show-refresh="true"
          data-icons-prefix="fa"
          data-icons="icons"
          data-sort-name="history_id" 
          data-sort-order="asc"
          data-pagination="true"
          data-side-pagination="client"
          data-page-size="10"
          data-page-list="[50, 100, 150, 200]"> 
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