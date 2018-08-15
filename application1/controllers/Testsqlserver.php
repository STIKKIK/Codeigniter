<?php
class Testsqlserver extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('advertiser_model');
    }

    public function index()
    {
        $data['advertiser'] = $this->advertiser_model->get_advertiser();
        var_dump($data['advertiser']);
    }
}
