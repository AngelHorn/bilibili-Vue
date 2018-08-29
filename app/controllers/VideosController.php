<?php

class VideosController extends ControllerBase
{
    public $limit = 8;//number of per page

    public function indexAction()
    {
        if (isset($_GET['p']) && $_GET['p'] > 1) {
            $current_page = $_GET['p'];
        } else {
            $current_page = 1;
        }

        $sql = "SELECT * FROM animation_detail";
        if (isset($_GET['categories_id']) && is_numeric($_GET['categories_id'])) {
            $sql .= " WHERE categories_id = " . $_GET['categories_id'];
        }
        $offset = ($current_page - 1) * $this->limit;
        $sql .= " LIMIT " . $this->limit . " OFFSET " . $offset;

        $condition = array();
        $result = $this->query($sql, $condition);
        $this->output(200, $result);
    }

    public function getAction($id)
    {
        $sql = "SELECT * FROM animation_detail";
        if (isset($id) && is_numeric($id)) {
            $sql .= " WHERE id = " . $id;
        }
        $result = $this->query($sql);
        if (count($result) > 0) {
            $this->output(200, $result[0]);
        }else{
            $this->output(404);
        }
    }

    public function postAction()
    {
//        $this->request->getPost();
    }
}