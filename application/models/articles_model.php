<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Articles_model extends CI_Model
{

    public function get_articles()
    {
        $this->db->limit('4');
        $this->db->order_by('id','random');
        $query = $this->db->get('articles');
        return $query->result_array();

    }

    public function add_articles($data)
    {
        $this->db->insert('articles', $data);
    }

    public function edit_articles($data)
    {
        $this->db->where('id', '5');
        $this->db->update('articles', $data);
    }

    public function delete_articles($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('articles');
    }

}