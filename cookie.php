<?php
$value="saya";
setcookie("nama", $value, time()+3600);
setcookie("hai", "ini cookies hai", time() +6);
echo "cookie telah dibentuk";
?>