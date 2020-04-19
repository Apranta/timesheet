<?php

/**
 * summary
 */
class User extends MY_Controller
{
    /**
     * summary
     */
    public function __construct()
    {
        parent::__construct();
        $this->module = 'user';
        $this->data['id_user'] = $this->session->userdata('id_user');
        $this->data['username'] = $this->session->userdata('username');
        $this->data['id_role'] = $this->session->userdata('id_role');
        $this->data['role'] = $this->session->userdata('role');
        if ($this->data['id_role'] != 1) {
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
    }

    public function index()
    {
        if ($this->POST('simpan')) {
            $password = $this->POST('password');
            $password_lagi = $this->POST('password-confirm');
            if ($password !== $password_lagi) {
                $this->flashmsg('Kolom password harus sama dengan kolom password lagi', 'danger');
                redirect('user');
                exit;
            }
            $this->User_m->update($this->data['id_user'], ['password' => md5($password)]);
            $this->flashmsg('Password Berhasil Diganti', 'success');
            redirect('user');
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

    public function timesheet()
    {
        if ($this->POST('simpan')) {
            $this->Aktivitas_m->insert([
                'user_id' => $this->data['id_user'],
                'judul'      => $this->POST('judul'),
                'delegasi'    => $this->POST('delegasi'),
                'mulai'     => $this->POST('mulai'),
                'akhir'            => $this->POST('akhir'),
                'deskripsi'               => $this->POST('deskripsi'),
                'output'              => $this->POST('output'),
                'lokasi'           => $this->POST('lokasi'),
            ]);
            redirect('user/reporting', 'refresh');
            exit;
        }
        $this->data['title'] = 'Timesheet';
        $this->data['content'] = 'timesheet';
        $this->template($this->data, $this->module);
    }

    public function detail_aktivitas()
    {
        $aktivitas_id = $this->uri->segment(3);
        if(!isset($aktivitas_id)){
            redirect('user/reporting', 'refresh');
            exit;
        }
        $this->data['data']    = $this->Aktivitas_m->get_row(['id' => $aktivitas_id]);
        $this->data['title'] = 'Timesheet';
        $this->data['content'] = 'timesheet';
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
            redirect('user/profil', 'refresh');
            exit;
        }
        $this->data['data']    = $this->User_m->get_row(['username' => $this->data['username']]);
        $this->data['title'] = 'Update Profil';
        $this->data['content'] = 'update_profil';
        $this->template($this->data, $this->module);
    }

    public function reporting()
    {
        $this->data['data']    = $this->Aktivitas_m->get(['user_id' => $this->data['id_user']]);
        $this->data['title'] = 'Timesheet';
        $this->data['content'] = 'reporting';
        $this->template($this->data, $this->module);
    }

}
