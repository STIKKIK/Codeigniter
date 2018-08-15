<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Testredis extends CI_Controller {
    public function __construct() {
        parent::__construct();

        $this->load->driver('cache', ['adapter'=>'redis']);
    }

    public function index() {
        //$this->load->driver('cache');
        $this->cache->redis->save('foo2', 'tik', 10);
        echo $foo = $this->cache->get('foo2');
    }
}
?>