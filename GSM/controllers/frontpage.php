<?php if (!defined('BASEPATH')) die();
class Frontpage extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->library('ion_auth');
		if (!$this->ion_auth->logged_in())
		{
			redirect('auth/login');
		}
	}
   public function index()
	{
      $this->load->view('include/header');
      $this->load->view('include/menu1');
      $this->load->view('templates/modules');
      $this->load->view('include/footer');
	}

   
}

/* End of file frontpage.php */
/* Location: ./application/controllers/frontpage.php */
