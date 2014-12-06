<?php

require_once('Config.php');
require_once('Logger.php');

class ApiKeyManager
{

    /**
     * @param $req
     * @return string
     */
    function validateKey($req)
    {
        $config = new Config();
        $logger = new Logger();
        if (in_array($req['api_key'], $config->getApiKeys())) {
            return "S1000";
        } else {
            $logger->debug("Invalid API Key [" . $req['api_key'] . "]");
            return "E0007";
        }
    }
}
