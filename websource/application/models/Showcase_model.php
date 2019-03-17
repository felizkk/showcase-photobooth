<?php

class Showcase_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
    }

    public function get_entry($external_id)
    {
        $query = $this->db->get_where('visitor', array('external_id' => $external_id));
        return $query->row_array();
    }

    public function get_recent_5()
    {
		$sql = "SELECT * FROM visitor ORDER BY id DESC LIMIT 5;";
		$query = $this->db->query($sql);
		return $query->result_array();
    }

    public function get_report($location = NULL)
    {
        if ($location != NULL){
            $query = $this->db->get_where('visitor', array('location' => $location));
        }
        else $query = $this->db->get('visitor');
        return $query->result_array();
    }
}