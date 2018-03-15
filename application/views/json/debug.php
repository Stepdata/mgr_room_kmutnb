<?php
$status = (int)$statu_error;
echo ("status=");
echo ($status);
echo ("<br>");
// echo (" ");
// echo ("id1=");
// $v1 = substr($statu_id_pass,0,7);
// $v2 = substr($statu_id_pass,7);
// echo ((int)$v1);
// echo (" ");
// echo ("id2=");
// echo ((int)$v2);
$array = str_split($statu_id_pass);
// foreach($array as $a){
    for($i=1;$i <= strlen($statu_id_pass); $i++){
        echo ("id".$i.'=');
        echo ($array[$i-1]);
        echo "<br>";  
    }
    
// }

?>