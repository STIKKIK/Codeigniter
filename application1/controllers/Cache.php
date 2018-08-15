<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Cache extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model', 'user');
    }
    public function index()
    {
        //$this->load->driver('cache', array('adapter' => 'apc', 'backup' => 'file'));
        // group of my_
        $this->load->driver('cache',
            array('adapter' => 'apc', 'backup' => 'file', 'key_prefix' => 'my_')
        );
        if (!$foo = $this->cache->get('foo')) {
            echo 'Saving to the cache!<br />';
            $foo = 'foobarbaz!';

            // Save into the cache for 5 minutes
            $this->cache->save('foo', $foo, 300);
        }

        echo $foo;
    }
    public function memcached()
    {
        $this->load->driver('cache');

        $this->cache->memcached->save('foo3', 'bar', 10);
        var_dump($foo = $this->cache->memcached->get('foo3'));
    }

    public function user()
    {
        $data = $this->user->get_user();
        var_dump($data);

        if (1 == 1) {

        }
    }
}
