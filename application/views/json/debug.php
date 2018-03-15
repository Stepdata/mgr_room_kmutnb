<?php
$status = (int)$statu_error;
echo ("status=");
echo ($status);
echo (" ");
echo ("id1=");
$v1 = substr($statu_id_pass,0,7);
$v2 = substr($statu_id_pass,7);
echo ((int)$v1);
echo (" ");
echo ("id2=");
echo ((int)$v2);
?>