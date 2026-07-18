<?php
$input = urldecode($_POST['ctl00$cphRoblox$Textbox1']);
$actualpassword = "LimboBypassPass";
if($input === $actualpassword){
setcookie("BypassMaintenance", $actualpassword, time() + (86400), "/", '.ishowrevival.up.railway.app');
header("Location: https://ishowrevival.up.railway.app");
}else{
header("Location: https://ishowrevival.up.railway.app/maintenance");
}