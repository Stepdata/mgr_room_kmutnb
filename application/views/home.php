
<!DOCTYPE html>
<head>
  <!-- bootstrap Table -->
</head>
<body>
<div class="container-fluid">
<h1> Manage Users </h1>
  <div class="row">
    <div class="col-md-4 col-md-offset-4">
      <?php 
        $attributes = array('class' => 'form-horizontal');
        echo form_open('Dashboard/addUser', $attributes);
       ?>
        <div class="form-group">
          <label class="col-sm-3 control-label"><b>ชื่อ :</b></label>
          <div class="col-sm-9">
            <input type="text" class="form-control" name="name" maxlength="10" required>
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-3 control-label"><b>ภาควิชา :</b></label>
          <div class="col-sm-9">
            <input type="text" class="form-control" name="department" maxlength="20" required>
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-3 control-label"><b>คณะ :</b></label>
          <div class="col-sm-9">
            <input type="text" class="form-control" name="factory" maxlength="20" required>
          </div>  
        </div>
        <div class="form-group">
          <label class="col-sm-3 control-label"><b>รหัสผ่าน:</b></label>
          <div class="col-sm-9">
            <input type="password" class="form-control" name="password" maxlength="15" required>
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-offset-3 col-sm-3">
            <button type="reset" class="btn btn-default" value="Clear">Clear</button>
          </div>
          <div class="col-sm-6 border" style="text-align:right;">
            <button type="submit" class="btn btn-primary" value="Submit">Submit</button>
          </div>
        </div>
      <?= form_close(); ?>
    </div>
  </div>
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
        data-page-size="10"
        data-page-list="[10, 15, 20, 25]"> 
      </table>
    </div>
  </div>
</div>
</body>
</html>
