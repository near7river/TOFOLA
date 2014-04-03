<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Centre extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->database();
		$this->load->helper('url');

		$this->load->library('grocery_CRUD');
	}
	
	public function index()
	{
		
	}
	public function liste(){
   
   			 $crud = new grocery_CRUD();
    			$crud->set_table('centre');
    			
				$crud->set_relation('iDprefecture','prefecture','nomprefecture');
				$crud->unset_jquery();
				$crud->add_action('Liste des enfants', '', base_url().'enfant/listeParCentre/','ui-icon-plus');
				$crud->add_action('Bilan du centre', '', 'demo/action_more','ui-icon-plus');
				$crud->add_action('Bilan annuel', '', 'demo/action_more','ui-icon-plus');
				$crud->add_action('Déscription de l\'état des locaux', '', 'demo/action_more','ui-icon-plus');
				$crud->add_action('Liste des dortoirs', '', 'demo/action_more','ui-icon-plus');
				$crud->add_action('Liste des formateurs', '', 'demo/action_more','ui-icon-plus');
				$crud->add_action('Liste des diplomes', '', 'demo/action_more','ui-icon-plus');
				
   				 $output = $crud->render();
   				 $output = (object) array_merge( (array)$output, array( 'active' => 'Centre' ) );
   				 
   				 $this->load->view('include/header');
   				 $this->load->view('include/menu1');
      			 $this->load->view('templates/liste',$output);
      			 $this->load->view('include/footer');
   
   }

}