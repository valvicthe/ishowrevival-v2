<?php
require ($_SERVER['DOCUMENT_ROOT'].'/config/includes.php');
$userId = (int)$_GET['userId'];
?>
{"Url":"https://ishowrevival.up.railway.app<?php echo getUserThumbnail($con,$userId);?>","Final":true,"SubstitutionType":0}