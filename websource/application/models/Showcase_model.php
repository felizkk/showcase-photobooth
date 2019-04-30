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
        $sql = "SELECT id, location, external_id, fullname, company, role, phone, email, timestamp ";
        $sql .= "FROM visitor ";
        if ($location != NULL) $sql .= "WHERE location = '" . $location . "' ";
        $sql .= "ORDER BY timestamp DESC ";
        if ($location != NULL) $sql .= "LIMIT 50"
        $query = $this->db->query($sql);
        return $query->result_array();
    }
}