<?php

class ChatReceiveJson
{

    private $apiKey;
    private $correlationId;
    private $message;
    private $sender_communityId;
    private $sender_dictionaryId;
    private $receiver_communityId;
    private $receiver_dictionaryId;
    private $time;

    /**
     * @param $header
     */
    function req($header)
    {
        $this->apiKey = $header['api_key'];
        $this->correlationId = $header['correlation_id'];
        $this->message = $header['message'];
        $this->sender_communityId = $header['sender_communityId'];
        $this->sender_dictionaryId = $header['sender_dictionaryId'];
        $this->receiver_communityId = $header['receiver_communityId'];
        $this->receiver_dictionaryId = $header['receiver_dictionaryId'];
        $this->time = $header['time'];
    }

    /**
     * @return mixed
     */
    function getApiKey()
    {
        return $this->apiKey;
    }


    /**
     * @return mixed
     */
    function getCorrelationId()
    {
        return $this->correlationId;
    }

    /**
     * @return mixed
     */
    function getMessage()
    {
        return $this->message;
    }

    /**
     * @return mixed
     */
    function getReceiverCommunityId()
    {
        return $this->receiver_communityId;
    }

    /**
     * @return mixed
     */
    function getReceiverDictionaryId()
    {
        return $this->receiver_dictionaryId;
    }

    /**
     * @return mixed
     */
    function getSenderCommunityId()
    {
        return $this->sender_communityId;
    }

    /**
     * @return mixed
     */
    function getSenderDictionaryId()
    {
        return $this->sender_dictionaryId;
    }

    /**
     * @return mixed
     */
    function getTime()
    {
        return $this->time;
    }
}
