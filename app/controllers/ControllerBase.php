<?php

use Phalcon\Mvc\Controller;

class ControllerBase extends Controller
{
    protected function output($code, $data)
    {
        if (!isset($data)) {
            die(json_encode(["code" => $code], JSON_UNESCAPED_UNICODE));
        }
        die(json_encode(["code" => $code, "data" => $data], JSON_UNESCAPED_UNICODE));
    }

    protected function query($sql, $condition = [])
    {
        if (!empty($condition)) {
            $result = $this->modelsManager->executeQuery($sql, $condition);
        } else {
            $result = $this->modelsManager->executeQuery($sql);
        }
        return $result;
    }
}
