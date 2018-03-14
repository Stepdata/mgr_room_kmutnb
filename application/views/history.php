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
    <?= form_open('Dashboard/getHostoryBy'); ?>
    <div class="row" > 
      <div class="date-histroy form-group">
        <div class="col-sm-12">
          <div class="row">
            <input type="radio" name="date" value="now" id="date"> วันนี้
          </div>
          <div class="row" id="child-hist">
            <input type="radio" name="date" id="date" > วันที่
              <input type="text" class="date-time start" name="date_start" />
              <input type="text" class="time-time start" name="time_start" /> ถึง
              <input type="text" class="time-time end" name="time_end" />
              <input type="text" class="date-time end" name="date_end" />
          </div>
        </div>
      </div>
      <!-- /col -->
      <div class="col-sm-2 mar-top-10">
        <button type="submit" class="btn btn-info">ตกลง</button>
      </div>
    </div>
    <?= form_close(); ?>
    <!-- /row -->
    <div class="row">
      <div class="col">
        <!-- <table class="table">
          <thead class="thead-dark">
            <tr>
              <th scope="col">ลำดับ</th>
              <th scope="col">ห้องเรียน</th>
              <th scope="col">ผู้ใช้งาน</th>
              <th scope="col">วันที่</th>
              <th scope="col">เวลาเริ่ม</th>
              <th scope="col">เวลาสุด</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach($history as $his){ ?>
            <tr>
              <th scope="row"><?= $his->history_id ?></th>
              <td><?= $his->room ?></td>
              <td><?= $his->name_user ?></td>
              <td><?= $his->date_time ?></td>
              <td><?= $his->start_time ?></td>
              <td><?= $his->end_time ?></td>
            </tr>
            <?php 
          } ?>
          </tbody>
        </table> -->
        <table id="tableHistory" 
              data-toolbar="#toolbar"
              data-search="true"
              data-icons-prefix="fa"
              data-icons="icons"
              data-show-refresh="true"
              data-icons-prefix="fa"
              data-icons="icons"
              data-sort-name="history_id" 
              data-sort-order="desc"
              data-pagination="true"
              data-side-pagination="client"
              data-page-size="10"
              data-page-list="[15, 20, 50, 30]"> 
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