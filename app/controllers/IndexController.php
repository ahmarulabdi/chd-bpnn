<?php

class IndexController extends ControllerBase
{

    public function indexAction()
    {
        $data = DataPasien::find();
        $this->view->countdata = count($data);
        $datanormalisasi = DataNormalisasi::find();
        $this->view->countdatanormalisasi = count($datanormalisasi);
    }
}
