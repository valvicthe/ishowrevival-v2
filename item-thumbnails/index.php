<?php
require($_SERVER['DOCUMENT_ROOT']."/config/includes.php");
error_reporting(E_ALL);
header("Content-Type: application/json");

$jsoncallback = $_GET['jsoncallback'];
$params = json_decode(urldecode($_GET['params']), true);

$response = [];
foreach ($params as $value) {
    $assetId = (int)$value['assetId'];
    $item = [
        "id" => $assetId,
        "name" => "?",
        "url" => "https://ishowrevival.up.railway.app/library/?id={$assetId}",
        "thumbnailFinal" => true,
        "thumbnailUrl" => "https://ishowrevival.up.railway.app/model-thumbnails?assetId={$assetId}",
        "bcOverlayUrl" => null,
        "limitedOverlayUrl" => null,
        "deadlineOverlayUrl" => null,
        "limitedAltText" => null,
        "newOverlayUrl" => null,
        "imageSize" => "small",
        "saleOverlayUrl" => null,
        "iosOverlayUrl" => null,
        "transparentBackground" => false
    ];
    $gamequery = $con->prepare('SELECT * FROM games WHERE id=:id');
    $gamequery->bindParam(':id', $assetId, PDO::PARAM_INT);
    $gamequery->execute();
    $game = $gamequery->fetch();
    if(is_array($game)){
    $item['url'] = "https://ishowrevival.up.railway.app/games/{$assetId}/";
    $item['thumbnailUrl'] = "https://ishowrevival.up.railway.app/Thumbs/GameIcon.ashx?assetId={$assetId}";
    }
    $response[] = $item;
}

echo $jsoncallback . '(' . json_encode($response) . ')';
?>
