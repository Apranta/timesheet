<?php

/**
 * summary
 */
class Register extends MY_Controller
{
    /**
     * summary
     */
    public function __construct()
    {
        parent::__construct();
        $this->module = 'register';
        $this->load->library('gz');
        $this->load->model('Peserta_m');
    }

    public function index()
    {
        if ($this->POST('daftar')) {
            $password = $this->POST('password');
            $password_lagi = $this->POST('password-confirm');
            // echo $password . ' - ' . $password_lagi;
            // exit;
            if ($password !== $password_lagi) {
                $this->flashmsg('Kolom password harus sama dengan kolom password lagi', 'danger');
                redirect('register');
                exit;
            }
            $this->data = [
                'nama'          => $this->POST('nama'),
                'kontak'  => $this->POST('nohp'),
                'email'     => $this->POST('email'),
                'username'  => $this->POST('username'),
                'password'  => $this->POST('password'),
            ];

            $response = json_decode($this->gz->POST('users/register', $this->data));
            if ($response->status === 'Request Success') {
                $this->session->set_userdata(['token' => $response->data->token]);
                if (isset($response->data->staff_token)) {
                    $this->session->set_userdata(['staff_token' => $response->data->staff_token]);
                }
                $this->flashmsg($response->message, 'success');
                redirect('login/customer');
                exit;
            }

            $this->flashmsg($response->message, 'danger');
        }
        $this->data['title'] = 'Pendaftaran';
        $this->data['content'] = 'register';
        $this->template($this->data, $this->module);
    }

    public function peserta()
    {

        if ($this->POST('daftar')) {
            $password = $this->POST('password');
            $password_lagi = $this->POST('password-confirm');
            // echo $password . ' - ' . $password_lagi;
            // exit;
            $username = $this->POST("username");

            if ($username == ""){
                $this->flashmsg('Username Tidak Boleh Kosong', 'danger');
                redirect('register');
                exit;
            }
            if ($password !== $password_lagi) {
                $this->flashmsg('Kolom password harus sama dengan kolom password lagi', 'danger');
                redirect('register');
                exit;
            }
            $data = [
                'username'  => $this->POST('username'),
                'password'  => md5($this->POST('password')),
                'id_role'   => 2
            ];
            $this->load->model('User_m');
            $ca = $this->User_m->get_row(["username" => $this->POST("username")]);
            if (isset($c)) {
                $this->flashmsg("Data Sudah Pernah Registrasi Silahkan Login Kembali", 'danger');
                redirect("register/peserta");
                exit;
            }
            $this->User_m->insert($data);
            $this->data = [
                'nama_lengkap'          => $this->POST('nama'),
                'hp'  => $this->POST('nohp'),
                'no_kitas'  => $this->POST('nik'),
                'email'     => $this->POST('email'),
                'username'  => $this->POST('username'),
            ];
            $ci = $this->Peserta_m->get_row(["no_kitas" => $this->POST('nik')]);
            if (isset($ci)) {
                $this->flashmsg("Data Sudah Pernah Registrasi Silahkan Login Kembali", 'danger');
                redirect("register/peserta");
                exit;
            }
            $c = $this->Peserta_m->get_row(["email" => $this->POST("email")]);
            if (isset($c)) {
                $this->flashmsg("Data Sudah Pernah Registrasi Silahkan Login Kembali", 'danger');
                redirect("register/peserta");
                exit;
            }
            if ($this->Peserta_m->insert($this->data)) {
                
                
                // Encryption of string process starts 
                $id = $this->db->insert_id();

                $encryption = $this->encrypt_decrypt('encrypt' , $id); 

                $link = base_url("register/download?token=") . $encryption; 
                $emailContent = '<p><b>Terima kasih telah mendaftar! </b><br>
                Berikut terlampir Lembar Bukti Pendaftaran Peserta. Lampiran ini berguna sebagai bukti pendaftaran sekaligus nomor urut untuk photoshoot.<br>
                Jadwal photoshoot akan diumumkan melalui akun instagram Bujang Gadis Palembang (@bgp_palembang), OA Line BGP (@zqi5203s) dan akun Instagram Dinas Pariwisata Kota Palembang (@pariwisata.palembang). Harap langsung menghubungi panitia apabila tidak dapat melakukan photoshoot pada jadwal yang telah ditentukan.<br>
                Jangan lupa cetak lampiran untuk dikumpulkan bersama berkas lainnya ya!<br>
                Download berkasnya <b><a href="'. $link .'"> Disini </a></b><br>
                
                Pengumpulan berkas dapat dilakukan pada:<br>
                Tanggal: 28 Mei - 4 Juni 2020<br>
                Pukul: 09.00 - 16.00 WIB<br>
                Lokasi: Kantor Dinas Pariwisata Kota Palembang (Jl. Dr. Wahidin No. 3 Kelurahan Talang Semut, Kecamatan Bukit Kecil Kota Palembang) <br>
                <br>
                <br>
                Regards,<br>
                Panitia Pemilihan Bujang Gadis Palembang Tahun 2020<br>
                <br><br>
                #Samaratungga<br>
                #PBGP2020<br>
                #PariwisataPalembang<br>
                #CharmingPalembang<br>
                #PalembangEmasDarussalam<br>
                #BujangGadisPalembang<br>
                #EverythingBeginsFromHere<br></p>';
                $this->sendMail($this->POST('email'), 'Pendaftaran Bujang Gadis Palembang 2020', $emailContent);
            
            }
            $this->flashmsg('<div style="text-align: center;"><h3><i class="fa fa-check" style="font-size: 100px;"></i><br>Terima Kasih Telah Mendaftar, Silahkan Login Untuk Menyelesaikan pendaftaran</h3></div>', 'success');
            redirect('register/peserta');
            exit;
        }
        $this->data['title'] = 'Pendaftaran';
        $this->data['content'] = 'register_peserta';
        $this->template($this->data, $this->module);
    }

    public function download(){
        $token = $this->GET('token' , true);
        $id = $this->encrypt_decrypt('decrypt' , $token); 
        
        $this->data['peserta'] = $this->Peserta_m->get_row(["id" => $id]);

        if(!$this->data['peserta']){
            $this->flashmsg("silahkan Register user tidak ditemukan", 'danger');
            redirect('register/peserta');
            exit;
        }
        require FCPATH . 'vendor/autoload.php';
        $html = $this->load->view('register/lampiran', $this->data, true);
    	$pdfFilePath = 'Form Pendaftaran.pdf';
        $this->m_pdf = new \Mpdf\Mpdf();
    	$this->m_pdf->WriteHTML($html);
        $this->m_pdf->Output($pdfFilePath, "D");
    }

    private function sendMail($address, $subject, $body)
    {
        $this->load->library('CI_PHPMailer/ci_phpmailer');
        try 
        {
            $this->ci_phpmailer->setServer('smtp.gmail.com');
            $this->ci_phpmailer->setAuth('noreply.pudinglab@gmail.com', 'Manusia@123');
            $this->ci_phpmailer->setAlias('admin@bgpalembang.com', 'Bujang Gadis Palembang 2020');
            $this->ci_phpmailer->sendMessage($address, $subject, $body);
        } 
        catch (Exception $e)
        {
            $this->ci_phpmailer->displayError();
        }
    }


    private function encrypt_decrypt($action, $string) {
        $output = false;
    
        $encrypt_method = "AES-256-CBC";
        $secret_key = 'secret';
        $secret_iv = 'ini secret';
    
        // hash
        $key = hash('sha256', $secret_key);
        
        // iv - encrypt method AES-256-CBC expects 16 bytes - else you will get a warning
        $iv = substr(hash('sha256', $secret_iv), 0, 16);
    
        if ( $action == 'encrypt' ) {
            $output = openssl_encrypt($string, $encrypt_method, $key, 0, $iv);
            $output = base64_encode($output);
        } else if( $action == 'decrypt' ) {
            $output = openssl_decrypt(base64_decode($string), $encrypt_method, $key, 0, $iv);
        }
    
        return $output;
    }
 
}

