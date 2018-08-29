<?php

class CategoriesController extends ControllerBase
{
    public function indexAction()
    {
        $sql = "SELECT * FROM categories";
        $result = $this->query($sql);
        $this->output(200, $result);
    }
}