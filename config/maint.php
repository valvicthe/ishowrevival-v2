<?php
$offline = false;
if($offline){
if($_COOKIE['BypassMaintenance'] != "lois"){
header("Location: https://ishowrevival.up.railway.app/maintenance");
exit;
}
}
?>
