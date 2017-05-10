<?php defined('BASEPATH') OR exit('No direct script access allowed');

class home extends CI_Controller {

      public function __construct(){
        parent::__construct();
      }   

	public function index()
	{
		$this->load->view('admin_mainmenu');
	}

    public function load_RegisterForm()
    {
        $this->load->view('register');
    }

    public function Load_Teacher()
    {
    	$this->load->view('person_view');
    }

        public function logout()
    {
        $this->session->sess_destroy();
        redirect(site_url().'home/index/');
    }

	
    public function load_Admin_menu()
    {
        $this->load->view('admin/admin_mainmenu');
    }

  
}
