<?php

class VideosController extends ControllerBase
{
    public function indexAction()
    {
        var_dump($this->get());
        $sql = "SELECT * FROM animation_detail";
        $result = $this->query($sql);
        $this->output($result);
    }

    public function getAction($id)
    {
        echo $id;
    }

}