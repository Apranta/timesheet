<?php defined('BASEPATH') || exit('No direct script allowed');

class Reporting_m extends MY_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->data['table_name']  = 'reporting';
		$this->data['primary_key'] = 'id';
	}
}

