<?php
class User_model extends CI_Model {

    public function __construct()
    {
        $this->load->database();
        $this->load->library('memcached_library');
    }
    public function get_user()
    {
        $CacheID = "SELECT * FROM user";
 
        if(!$this->memcached_library->get($CacheID) && $this->memcached_library->get($CacheID) == '') {
        
            $query = $this->db->query($CacheID);
            $result = $query->result_array();
            $this->memcached_library->add($CacheID, $result);  
        }
        else 
        {
            $result = $this->memcached_library->get($CacheID);
        }
        return $result;
    }
    
}