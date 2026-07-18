<?php
header("Content-Type: text/plain");
$data = array(
"jobId" => "Test",
"status" => 2,
"joinScriptUrl" => "http://ishowrevival.up.railway.app/game/join2015.ashx?serverPort=53640&gameid=1&jobid=Test",
"authenticationUrl" => "http://ishowrevival.up.railway.app/Login/Negotiate.ashx",
"authenticationTicket" => $_COOKIE['_ROBLOSECURITY'],
"message" => null
);
$jsonData = json_encode($data);
echo $jsonData;
?>