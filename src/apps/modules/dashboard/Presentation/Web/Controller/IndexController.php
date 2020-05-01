<?php

namespace Its\Example\Dashboard\Presentation\Web\Controller;

use Phalcon\Mvc\Controller;

class IndexController extends Controller
{
    public function indexAction()
    {
        // $db = $this->getDI()->get('db');

        // $sql = "SELECT * FROM Matpel";

        // $result = $db->fetchOne($sql, \Phalcon\Db\Enum::FETCH_ASSOC);

        // echo var_dump($result);
        // echo 'dashboard';
    }

    public function xAction()
    {
        // $this->pick->view('index/index.volt');
        echo 'dashboard';
    }
}