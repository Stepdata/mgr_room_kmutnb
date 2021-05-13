<?php
$status = (int)$statu_error;
echo ("status=");
echo ($status);
echo ("<br>");

$array = str_split($statu_id_pass);
    for($i=1;$i <= strlen($statu_id_pass); $i++){
        echo ("id".$i.'=');
        echo ($array[$i-1]);
        echo "<br>";  
    }
?>