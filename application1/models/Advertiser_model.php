<?php
class Advertiser_model extends CI_Model
{

    public function __construct()
    {
        $this->load->database();
    }
    public function get_advertiser($slug = false)
    {
        /*if ($slug === FALSE)
        {
        $query = $this->db->get('Advertiser');
        return $query->result_array();
        }

        $query = $this->db->get_where('Advertiser', array('slug' => $slug));
        return $query->row_array();*/

        // query string SP
        $query = $this->db->query('EXEC MCP_ADS.dbo.SpGetAdvertiser');
        return $query->result_array();
        //return $query->result_array();

    }
    public function set_news()
    {
        $this->load->helper('url');

        $slug = url_title($this->input->post('title'), 'dash', true);

        $data = array(
            'title' => $this->input->post('title'),
            'slug' => $slug,
            'text' => $this->input->post('text'),
        );

        return $this->db->insert('Advertiser', $data);
    }
}
