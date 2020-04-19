<?php 

class Open_graph extends MY_Controller {

	public function __construct() {

		parent::__construct();
		$this->config->load('api');
        $this->data['api_url'] = $this->config->item('poll_url');
        $this->data['poll_id'] = $this->config->item('poll_id');
        $this->data['admin_url'] = $this->config->item('admin_url');
	}

	public function index() {

		$this->data['poll_option'] = $this->curl_get_request($this->data['api_url'] . 'poll-option?type=one&poll_id=' . $this->data['poll_id'] . '&option_id=' . $this->uri->segment(3));
        if ($this->data['poll_option']->error == true)
        {
            die($this->data['poll_option']->error_msg);
        }
        $this->data['option_id'] = $this->uri->segment(3);
        $details = json_decode($this->data['poll_option']->data->details);
		$this->data['finalist_img']		= $this->data['admin_url'] . '/' . $this->data['option_id'] . '-label.jpg';
		$this->data['finalist_name'] 	= $this->data['poll_option']->data->label;
		if ( isset( $this->data['finalist_name'] ) ) {
			$this->data['title']		= 'Saya mendukung ' . str_replace( '%20', ' ', $this->data['finalist_name'] );
			$this->data['description']	= 'Saya mendukung ' . str_replace( '%20', ' ', $this->data['finalist_name'] ) . ' sebagai finalis favorit. Ayo dukung ' . str_replace( '%20', ' ', $this->data['finalist_name'] ) . ' melalui aplikasi E-Voting yang tersedia di Google Playstore atau melalui website bgdpalembang.com';
		} else {
			$this->data['title']		= 'Bujang Gadis Dallas';
			$this->data['description']	= 'Dukung bujang gadis favoritmu dengan memasang aplikasi E-Voting';
		}
		$this->load->view( 'open_graph', $this->data );

	}

}