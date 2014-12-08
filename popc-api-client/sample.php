<?php

require_once('PopC.php');

$pop_c = new PopC();

$resp = $pop_c->translate(
    array(
        "correlation_id" => "123",
        "message" => "mala home",
        "sender_communityId" => "1",
        "sender_dictionaryId" => "1",
        "receiver_communityId" => "1",
        "receiver_dictionaryId" => "1",
        "time" => "12222222"),
    "chat");
?>

<img src="data:image/jpg;base64,<?php echo $resp['result']; ?>" alt="Test Image"/>

