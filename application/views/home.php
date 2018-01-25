
<!DOCTYPE html>
<head>
  <!-- bootstrap Table -->
</head>
<body>
<h1> Manage Users </h1>
<center>
  <?= form_open('Dashboard/addUser'); ?>
    <table  border="0" >  
      <tr>
        <td align="right"><b>ชื่อ :</b></td>
        <td colspan ="3">
          <input type="text" name="name" maxlength="10" required>
        </td>
      </tr>
      <tr>
        <td align="right"><b>ภาควิชา :</b></td>
        <td colspan ="3">
          <input type="text" name="department" size="30" maxlength="30" required>
        </td>
      </tr>
      <tr>
        <td align="right"><b>คณะ :</b></td>
        <td colspan ="3">
          <input type="text" name="factory" size="30" maxlength="20" required>
        </td>
      </tr>
      <tr>
        <td align="right"><b>รหัสผ่าน:</b></td>
        <td colspan ="3">
          <input type="password" name="password" size="30" maxlength="15" >
        </td>
      </tr>
    </table>
    <center style="margin-top:20px">
      <input type="reset" value="Clear">&nbsp&nbsp&nbsp&nbsp&nbsp
      <input type="submit" value="Submit" />
    </center>
  <?= form_close(); ?>
</center>
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



</body>
</html>
