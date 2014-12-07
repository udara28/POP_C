<?php

class Config
{
    private $apiKey = "12yui3244";
    private $apiHost = "http://localhost/pop_c/popc-api/index.php?do=";
    private $logPath = "C:\\popc_logs";
    /**
     * @return string
     */
    function getApiHost()
    {
        return $this->apiHost;
    }

    /**
     * @return string
     */
    function getApiKey()
    {
        return $this->apiKey;
    }

    /**
     * @return string
     */
    function getLogPath()
    {
        return $this->logPath;
    }

}

class PopC
{
    /**
     * @param $params
     * @param $url
     * @return mixed
     */
    function translate($params, $url)
    {
        $req = new Curl();
        $config = new Config();
        $header = array(
            'Content-Type: application/json',
            'Content-Length: ' . strlen($params),
            'Connection:keep-alive',
            'Cache-Control:no-cache',
            'api_key: ' . $config->getApiKey(),
            'correlation_id: ' . $params['correlation_id'],
            'message: ' . $params['message'],
            'receiver_communityId: ' . $params['sender_communityId'],
            'receiver_dictionaryId: ' . $params['sender_dictionaryId'],
            'sender_communityId: ' . $params['receiver_communityId'],
            'sender_dictionaryId: ' . $params['receiver_dictionaryId'],
            'time: ' . $params['time']);
        $json = $req->post($header, $url);
        return json_decode(preg_replace('/[\x00-\x1F\x80-\xFF]/', '', $json), true);
    }
}

class Curl
{
    /**
     * @param $params
     * @param $url
     * @return mixed
     */
    function post($params, $url)
    {
        $config = new Config();
        $ch = curl_init($config->getApiHost() . $url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $params);
        $result = curl_exec($ch);
        return $result;
    }
}

class Logger
{
    /**
     * @param $msg
     */
    function error($msg)
    {
        $this->log($msg, "ERROR");
    }

    /**
     * @param $msg
     */
    function debug($msg)
    {
        $this->log($msg, "DEBUG");
    }

    /**
     * @param $rtn
     * @param $type
     */
    private function log($rtn, $type)
    {
        $config = new Config();
        $f = fopen($config->getLogPath() . "\\pop-c-chat-api-client.log-" . date("Y-m-d"), "a");
        fwrite($f, "[" . $type . "][" . $_SERVER['SERVER_ADDR'] . "][" . date("H:i") . "][" . $_SERVER["SCRIPT_NAME"] . "] " . $rtn . "\n");
        fclose($f);
    }
}
