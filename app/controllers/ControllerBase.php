<?php

use Phalcon\Mvc\Controller;
use Phalcon\Mvc\Model\Query;

class ControllerBase extends Controller
{
    protected function output($code = 200, $json)
    {
        if (!isset($json)) {
            die(json_encode(["code" => $code], JSON_UNESCAPED_UNICODE));
        }
        die(json_encode(["code" => $code, "data" => $json], JSON_UNESCAPED_UNICODE));
    }

    protected function query($sql)
    {
        $result = new Query($sql, $this->getDI());
        return $result->execute();
    }
}
