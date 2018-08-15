<?php
class Api extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index_get()
    {
        echo "API index";
    }

    public function find_get($id)
    {
        //select where
        echo "API find_get $id";
    }

    public function index_post()
    {
        echo "API index_post";
    }

    public function index_put($id)
    { 
        //"update"
        echo "API put $id";
    }
    public function index_delete($id)
    { 
        //"delete"
        echo "API delete $id";
    }
}
