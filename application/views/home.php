
<!DOCTYPE html>
<head>
<body>
<h1> Manage Users </h1>
<center><form name="frmRegister" action="." method="post">

	<table  border="0" >
		<tr><td align="right"><b>ชื่อ :</b></td>
			<td colspan ="3"><input type="text" name="txtPhone" id="textPhone" size="30" maxlength="10"></td>
		</tr>
		<tr><td align="right"><b>ภาควิชา :</b></td>
			<td colspan ="3"><input type="text" name="txtPhone" id="textPhone" size="30" maxlength="30"></td>
		</tr>
		<tr><td align="right"><b>คณะ :</b></td>
			<td colspan ="3"><input type="text" name="txtUser" id="textUser" size="30" maxlength="16"></td>
		</tr>
		<tr><td align="right"><b>รหัสผ่าน:</b></td>
			<td colspan ="3"><input type="password" name="txtPass" id="textPass" size="30" maxlength="15"></td>
		</tr>
	</table>
	<br>
	<br>
	<center><input type="reset" value="Clear">&nbsp&nbsp&nbsp&nbsp&nbsp
		<input type="submit" value="Submit" /></center>

</form></center>
<table class="table table-striped">
  <thead>
  
    <tr>
      <th scope="col">ลำดับ</th>
      <th scope="col">ชื่อ</th>
      <th scope="col">ภาควิชา</th>
      <th scope="col">คณะ</th>
      <th scope="col">รหัสผ่าน</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Anirut</td>
      <td>teacher Training in Electrical Engineering</td>
      <td>Technical Education</td>
      <td>59.247.50.58</td>     
    </tr>
  </tbody>
</table>
<br>
    <button type="button" class="btn btn-outline-primary">Delete</button>
    </br>
</body>
</head>
</html>
