<?php

class VideosController extends ControllerBase
{

    public function indexAction()
    {
//        $this->request->getPost();
        echo "fuck this shit";
    }

    public function getAction($id)
    {
        echo $id;
    }
}