<?php

/**
 * summary
 */
class Approved extends MY_Controller
{
    /**
     * summary
     */
    public function __construct()
    {
        parent::__construct();
        $this->module = 'approved';
        $this->data['id_user'] = $this->session->userdata('id_user');
        $this->data['username'] = $this->session->userdata('username');
        $this->data['id_role'] = $this->session->userdata('id_role');
        $this->data['role'] = $this->session->userdata('role');
        if ($this->data['id_role'] == 1 || $this->data['id_role'] == 7) {
            redirect('logout');
            exit;
        }
        $this->load->model([
            'User_m',
            'Role_m',
            'Aktivitas_m',
            'Reporting_m'
        ]);
        $this->load->library("Tanggal");
        $this->data['user']    = $this->User_m->get_row(['id' => $this->data['id_user']]);
    }

    public function index()
    {
        if ($this->POST('simpan')) {
            $password = $this->POST('password');
            $password_lagi = $this->POST('password-confirm');
            if ($password !== $password_lagi) {
                $this->flashmsg('Kolom password harus sama dengan kolom password lagi', 'danger');
                redirect('approved');
                exit;
            }
            $this->User_m->update($this->data['id_user'], ['password' => md5($password)]);
            $this->flashmsg('Password Berhasil Diganti', 'success');
            redirect('approved');
            exit;
        }
        $this->data['data']    = $this->User_m->get_row(['id' => $this->data['id_user']]);
        $this->data['title'] = 'Home';
        $this->data['content'] = 'dashboard';
        $this->template($this->data, $this->module);
    }

    public function profil()
    {
        $this->data['data']    = $this->User_m->get_row(['id' => $this->data['id_user']]);
        $this->data['title'] = 'Profil Peserta';
        $this->data['content'] = 'profil';
        $this->template($this->data, $this->module);
    }

    public function detail_aktivitas()
    {
        $aktivitas_id = $this->uri->segment(3);
        if(!isset($aktivitas_id)){
            redirect('approved/reporting', 'refresh');
            exit;
        }
        $this->data['data']    = $this->Aktivitas_m->get_row(['id' => $aktivitas_id]);
        $this->data['title'] = 'Timesheet';
        $this->data['content'] = 'timesheet_detail';
        $this->template($this->data, $this->module);
    }

    public function update_profil()
    {
        
        if ($this->POST('simpan')) {
            $profil = [
                'nama_lengkap'      => $this->POST('nama_lengkap'),
                'nama_panggilan'    => $this->POST('nama_panggilan'),
                'jenis_kelamin'     => $this->POST('jenis_kelamin'),
                'jabatan'            => $this->POST('jabatan'),
                'ttl'               => $this->POST('tempat_lahir'),
                'penugasan_tim'              => $this->POST('penugasan_tim'),
                'penugasan_tempat'           => $this->POST('penugasan_tempat'),
                'telepon'                => $this->POST('telepon'),
                'email'             => $this->POST('email'),
            ];
            $this->User_m->update($this->data['id_user'], $profil);
            $this->upload($this->data['id_user'], 'foto', 'foto');
            redirect('approved/profil', 'refresh');
            exit;
        }
        $this->data['data']    = $this->User_m->get_row(['username' => $this->data['username']]);
        $this->data['title'] = 'Update Profil';
        $this->data['content'] = 'update_profil';
        $this->template($this->data, $this->module);
    }

    public function reporting()
    {   

        if($this->POST('approved')){
            $this->Reporting_m->insert([
                'aktivitas_id' => $this->POST('id'),
                'user_id' => $this->data['user']->id,
                'approve' => $this->POST('appr'),
                'status' => 1
            ]);
            echo "success";
            redirect('approved/reporting', 'refresh');
            exit;
        }
        if($this->POST('reject')){
            $this->Reporting_m->insert([
                'aktivitas_id' => $this->POST('id'),
                'user_id' => $this->data['user']->id,
                'approve' => $this->POST('appr'),
                'status' => 0,
                'alasan' => $this->POST('alasan')
            ]);
            echo "success";
            redirect('approved/reporting', 'refresh');
            exit;
        }
        $this->data['data']    = $this->Aktivitas_m->getJoinAll($this->data['user']->penugasan_tempat);

        // $this->dump($this->data);exit;
        $this->data['title'] = 'Timesheet';
        $this->data['content'] = 'reporting';
        $this->template($this->data, $this->module);
    }
}
