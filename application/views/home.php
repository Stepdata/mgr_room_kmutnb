
<!DOCTYPE html>
<head>
  <title>จัดการผู้ใช้</title>
</head>
<body>
  <div class="container-fluid">
    <h1> จัดการผู้ใช้ </h1>
    <div class="row">
      <div class="col-md-10 col-md-offset-1">
        <?php $attributes = array('class' => 'form-horizontal'); echo form_open('Dashboard/addUser', $attributes);?>
        <!-- start form -->
        <div class="row form">
          <div class="col-sm-6">
            <div class="form-group">
              <label for="name"><b>ชื่อ-นามสกุล</b></label>
              <span class="input">
                <input type="text" name="name" id="name" class="form-control" required>
              </span>
            </div>
          </div>
          <!-- /col -->
          <div class="col-sm-6">
            <div class="form-group">
              <label for="name"><b>รหัสบัตร</b></label>
              <span class="input">
                <input type="text" name="card_id" id="card_id" class="form-control" required>
              </span>
            </div>
          </div>
          <!-- /col -->
        </div>
        <!-- /row -->
        <div class="row form">
          <div class="col-sm-6">
            <div class="form-group">
              <label for="name"><b>ภาควิชา</b></label>
              <span class="input">
                <input type="text" name="department" id="department" class="form-control" required>
              </span>
            </div>
          </div>
          <!-- /col -->
          <div class="col-sm-6">
            <div class="form-group">
              <label for="name"><b>รหัสประจำตัว</b></label>
              <span class="input">
                <input type="password" name="password" id="password" class="form-control" required>
              </span>
            </div>
          </div>
          <!-- /col -->
        </div>
        <!-- /row -->
        <div class="row form">
          <div class="col-sm-6">
            <div class="form-group">
              <label for="name"><b>คณะ</b></label>
              <span class="input">
                <input type="text" name="faculty" id="faculty" class="form-control" required>
              </span>
            </div>
          </div>
          <!-- /col -->
        </div>
        <!-- /row -->
        <div class="row form">
          <div class="col-sm-11">
            <div class="form-group btn-center">
              <button type="submit" class="btn btn-success">ตกลง</button>
            </div>
          </div>
          <!-- /col -->
        </div>
        <!-- /row -->
        <!-- end form -->
        <?= form_close(); ?>
        <!-- start table -->
        <div class="row">
          <div class="col-md-12">
            <table id="table" 
              data-toolbar="#toolbar"
              data-search="true"
              data-icons-prefix="fa"
              data-icons="icons"
              data-show-refresh="true"
              data-icons-prefix="fa"
              data-icons="icons"
              data-sort-name="manage_user_id" 
              data-sort-order="asc"
              data-pagination="true"
              data-side-pagination="client"
              data-page-size="5"
              data-page-list="[10, 15, 20, 25]"> 
            </table>
          </div>
        </div>
        <!-- end table -->
      </div>
      <!-- /col -->
    </div>
    <!-- /row -->
  </div>
</body>
</html>
