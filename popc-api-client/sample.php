<?php

require_once('PopC.php');

$pop_c = new PopC();

$resp = $pop_c->translate(
    array(
        "correlation_id" => "123",
        "message" => "mala",
        "sender_communityId" => "1",
        "sender_dictionaryId" => "1",
        "receiver_communityId" => "3",
        "receiver_dictionaryId" => "2",
        "time" => "12222222"),
    "chat");
?>

<img src="data:image/jpg;base64,<?php echo $resp['result']; ?>" alt="Test Image"/>


