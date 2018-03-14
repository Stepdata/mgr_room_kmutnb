<!DOCTYPE html>
<head>
</head>
<body>
  <div class="container-fluid">
    <h1> สถานะการใช้งาน </h1>
    <div class="row">
    <?= form_open('Dashboard/callStatus'); ?>
     <div class="col-md-10 col-md-offset-1">
       <!--   <div class="row form-status">
          <div class="col-sm-4">
         
            <div class="form-group">
              <label class="inputdatetime"><b>วันที่</b></label>
              <span class="inputdatetime">
                <input type="text" class="date form-control" name="date" required>
              </span>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="form-group">
              <label class="inputdatetime"><b>เวลา</b></label>
              <span class="inputdatetime">
                <input type="text" class="time form-control" name="time" required>
              </span>
            </div>
          </div>
          <div class="col-sm-2">
            <button type="submit" class="btn btn-info">ค้นหา</button>
          </div>
        </div> -->
        <!-- /row -->
        <?= form_close(); ?>
        <!-- <table class="table" border="1">
          <thead class="thead-dark">
            <tr>
              <th scope="col">ลำดับ</th>
              <th scope="col">ห้องเรียน</th>
              <th scope="col">ผู้ใช้งาน</th>
              <th scope="col">เวลา</th>
              <th scope="col">สถานะ</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach($status as $s){ ?>
            <tr>
              <th scope="row"><?= $s->classroom_id ?></th>
              <td><?= $s->room ?></td>
              <td><?= $s->user ?></td>
              <td><?= $s->time_start ?></td>
              <td><?php 
              if($s->status=='OFF'){echo '<div style="width: 15px;height: 15px;background: red;-moz-border-radius: 13px;-webkit-border-radius: 13px;border-radius: 50px;">';}
              else{echo '<div style="width: 15px;height: 15px;background: green;-moz-border-radius: 13px;-webkit-border-radius: 13px;border-radius: 50px;">';}?>
              </td>
            </tr>
            <?php } ?>
          </tbody>
        </table> -->
        <table id="tableStatus" 
              data-toolbar="#toolbar"
              data-search="true"
              data-icons-prefix="fa"
              data-icons="icons"
              data-show-refresh="true"
              data-icons-prefix="fa"
              data-icons="icons"
              data-sort-name="history_id" 
              data-sort-order="asc"
              data-ajax-options="status"
              data-pagination="true"
              data-side-pagination="client"
              data-page-size="5"
              data-page-list="[10, 15, 20, 25]"> 
            </table>
      </div>
    </div>
  </div>
</body>
</html>
