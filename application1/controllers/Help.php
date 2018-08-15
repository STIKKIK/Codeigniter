<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Help extends CI_Controller {
	public function index()
	{
        $this->load->helper('array_helper');
        //$array = [1,2,3];
        //echo random_element($array);
        $array = [1,2,3,4];
        $haystack = [9];
        var_dump( any_in_array($array, $haystack));
	}
}
