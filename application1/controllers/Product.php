<?php
class Product extends CI_Controller {

    public function shoes($sandals, $id)
    {
        echo $sandals;
        echo $id;
    }
    public function _output($output)
    {
        echo $output;
    }
    public function insert()
    {
        echo 'insert';
    }
}
?>