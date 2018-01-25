<!DOCTYPE html>
<head>
<body>
<h1> Classroom Status </h1>
<table class="table">
<thead class="thead-dark">
  <tr>
    <th scope="col">ห้องเรียน</th>
    <th scope="col">สถานะ</th>
    <th scope="col">ผู้ใช้งาน</th>
    <th scope="col">วันที่</th>
    <th scope="col">เวลา</th>
  </tr>
</thead>
<tbody>
<?php foreach($status as $s){ ?>
  <tr>
    <th scope="row"><?= $s->room ?></th>
    <td <?php if($s->status=='OFF'){echo 'style="color:red"';}else{echo 'style="color:Green"';}?> > <?= $s->status ?></td>
    <td><?= $s->user ?></td>
    <td><?= $s->date ?></td>
    <td><?= $s->time ?></td>
  </tr>
<?php } ?>
</tbody>
</table>
</body>
</head>
</html>
