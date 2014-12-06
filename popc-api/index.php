<?php

require_once('Config.php');
require_once('Logger.php');
require_once('index.php');
require_once('statusCodes.php');
require_once('ChatReceiveJson.php');
require_once('ChatResponseJson.php');
require_once('ApiKeyManager.php');
require_once('Response.php');
require_once('ImageMaker.php');

$config = new Config();
$api = new ApiKeyManager();
$chat = new ChatReceiveJson();
$chatResp = new ChatResponseJson();
$image = new ImageMaker();
$response = new Response();

$action = $_GET['do'];

if ($action != null) {
    $headers = apache_request_headers();
    $validate = $api->validateKey($headers);

    if ($validate == "S1000") {
        if ($action == 'chat') {
            $chat->req($headers);
            $img = $image->make($chat->getReceiverDictionaryId(), $chat->getMessage());
            $response->send($chatResp->resp("S1000", S1000, $img));
        }
    } else {
        $response->send($chatResp->resp("E0007", E0007, "None"));
    }
} else {
    $response->send($chatResp->resp("E0005", E0005, "None"));
}