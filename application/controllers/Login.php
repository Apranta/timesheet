<?php 

class Login extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->module = 'register';
        $this->data['username'] = $this->session->userdata('username');
        $this->data['id_role'] = $this->session->userdata('id_role');
        $this->data['role'] = $this->session->userdata('role');

        if ($this->data['username'])
        {
            switch ($this->data['id_role']) 
            {
                case 7:
                    redirect('admin');
                    exit;
                case 1:
                    redirect('user');
                    exit;
                default:
                    redirect('approved');
                    exit;
            }
        }
    }

    public function index()
    {
    	if ($this->POST('login')) 
        {
            $this->load->model('User_m');
            $this->load->model('Role_m');
            $username = $this->POST('username');
            $password = md5($this->POST('password'));
            $this->data['peserta'] = $this->User_m->get_row(['username' => $username, 'password' => $password]);
            if ($this->data['peserta'])
            {
                $roles = $this->Role_m->get_row(['id' => $this->data['peserta']->role]);
                $this->session->set_userdata([
                    'id_user' => $this->data['peserta']->id,
                    'username' => $this->data['peserta']->username , 
                    'id_role' => $this->data['peserta']->role,
                    'role' => $roles->nama
                ]);
                redirect('login');
                exit;
            }

            $this->flashmsg('Username atau password yang anda masukkan salah', 'danger');
            redirect('login');
    	}
    	$this->data['title'] = 'Login';
    	$this->data['content'] = 'login';
        $this->template($this->data, $this->module);
    }
}