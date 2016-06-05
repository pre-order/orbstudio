<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Regist extends CI_Controller {

	 public function __construct()
    {
        parent::__construct();
        // load from and url helper optional (in this tutorial)
        $this->load->helper(array(
            'form',
            'url'
        ));
        // load database
        $this->load->database();
        // load form validation library
        $this->load->library('form_validation');
        $this->load->library('encryption');
        
    }

        //wraper tampilan registration form
	public function registform()
	{
		$this->load->view('head');
                $this->load->view('navbar');
                $this->load->view('Register/RegistForm.php');
                $this->load->view('footer');
	}
        
        public function registerasi()
        {
            
            $this->load->library('form_validation');
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[data_user.Email]');
            $this->form_validation->set_message('is_unique[data_user.Email]', 'Email sudah di gunakan');
            if ($this->form_validation->run() == FALSE)
		{
		        $this->load->view('head');
                $this->load->view('navbar');
                $this->load->view('Register/RegistForm.php');
                $this->load->view('footer');
		}
		else
		{
                $date = $_POST['tanggal'] . '-' . $_POST['bulan'] . '-' . $_POST['tahun'];
                $password = $this->input->post('pwd');
                $hash = $this->encryption->encrypt($password);
                $data = array(
                    'Nama_user' => $this->input->post('nama'),
                    'jenis_kel' => $this->input->post('jenisKelamin'),
                    'Email'=> $this->input->post('email'),
                    'Tanggal_lahir' => $date,
                    'Kecamatan' => $this->input->post('kecamatan'),
                    'Kabupaten' => $this->input->post('kabupaten'),
                    'Provinsi' => $this->input->post('Provinsi'),
                    'Alamat_user' => $this->input->post('alamat'),
                    'Contac_User' => $this->input->post('noTelp'),
                    'Pass'=> $hash );
                $this->db->insert('data_user', $data);
                $this->load->view('head');
                $this->load->view('navbar');
                $this->load->view('Register/regist_success');
                $this->load->view('footer');
		}
        }
        
    
    
    public function email_check()
    {
        // allow only Ajax request    
        if($this->input->is_ajax_request()) {
        // grab the email value from the post variable.
        $email = $this->input->post('email');
        // check in database - table name : tbl_users  , Field name in the table : email
        if(!$this->form_validation->is_unique($email, 'data_user.email')) {
        // set the json object as output                 
         $this->output->set_content_type('application/json')->set_output(json_encode(array('message' => 'Email sudah di gunakan.silahkan menggunakan email lain')));
            }
        }
    }

}
        