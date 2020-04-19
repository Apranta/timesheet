<?php defined('BASEPATH') || exit('No direct script allowed');

class Aktivitas_m extends MY_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->data['table_name']  = 'aktivitas';
		$this->data['primary_key'] = 'id';
	}

	public function getJoinAll($penugasan_tempat)
	{
		$query = $this->db->query("SELECT * FROM " . $this->data['table_name'] . " INNER JOIN users ON aktivitas.user_id = users.id WHERE users.penugasan_tempat = '" . $penugasan_tempat . "'");
		
		return $query->result();
	}
	
}

