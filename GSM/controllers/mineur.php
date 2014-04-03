<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mineur extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->database();
		$this->load->helper('url');
		$this->load->library('ion_auth');
		$this->load->library('grocery_CRUD');
		if (!$this->ion_auth->logged_in())
		{
			redirect('auth/login');
		}
		
		//calcul des notifs + messages
	}
	
	public function index()
	{
		
	}
	public function referenciel($id=-1){
	
		if($id=-1)	{
			$output['active']='Mineur';
			$this->load->model('Autres');
			$output['T_Ref']= $this->Autres->getAllRef();
			$output = (object) array_merge( (array)$output, array( 'active' => 'Mineur' ) );
			$this->load->view('include/header');
			$this->load->view('include/menu1');
      		$this->load->view('templates/ref',$output);
      		$this->load->view('include/footer');
		}
	}
	public function liste(){
   
   			 	/*$crud = new grocery_CRUD();
    			$crud->set_table('Mineur');
				$crud->unset_jquery();
				$config['grocery_crud_dialog_forms'] = true;
				$crud->set_relation('centre_de_transfert','Centre','nom_centre');
		    	$crud->set_relation('sexe','Referenciel','valeurRef',array('nomRef'=>'sexe'));
		    	$crud->set_relation('source','Referenciel','valeurRef',array('nomRef'=>'source'));
		    	$crud->set_relation('destination','Referenciel','valeurRef',array('nomRef'=>'destination'));
				
				$crud->set_field_upload('photo_mineur','assets/uploads/files');
				$crud->add_action('Details', '', base_url().'mineur/details/','read-icon');
				$crud->unset_read();
				$crud->unset_edit();
				$crud->unset_add();
   				 $output = $crud->render();
   				 
   				 $output = (object) array_merge( (array)$output, array( 'active' => 'Mineur' ) );
   				 */
   				
   				 $output['active']='Mineur';
   				 $output['link']=base_url().'mineur/listeParUser';
   				 $this->load->view('include/header');
   				 $this->load->view('include/menu1');
      			 $this->load->view('templates/frame',$output);
      			 $this->load->view('include/footer');
   
   }
   public function listeParUser(){
   
   				$crud = new grocery_CRUD();
    			$crud->set_table('Mineur');

				
				$crud->set_relation('centre_de_transfert','Centre','nom_centre');
		    	$crud->set_relation('sexe','Referenciel','valeurRef',array('nomRef'=>'sexe'));
		    	$crud->set_relation('source','Referenciel','valeurRef',array('nomRef'=>'source'));
		    	$crud->set_relation('destination','Referenciel','valeurRef',array('nomRef'=>'destination'));
				
				$crud->set_field_upload('photo_mineur','assets/uploads/files');
				$crud->add_action('Details', '', base_url().'mineur/details/','read-icon');
				$crud->unset_read();
				$crud->unset_edit();

   				 $output = $crud->render();
   				 
   				 $output = (object) array_merge( (array)$output, array( 'active' => 'Mineur' ) );

   				 $this->load->view('templates/simplCRUD',$output);   
   }
   public function details($id){
   
   	   	
		$output=array(
   	   			'tabsTitle'=> array("Dossier personnel","Dossier social","Dossier juridique"
   	   								,"Dossier medical","Dossier psychologique"
   	   								,"Dossier scolaire","Observations","Suivi"),
   	   								
   	   			'tabsLink'=> array("dossierPersonnel/edit",
   	   								"dossierSocial/edit",
   	   								"dossierJuridique/edit",
					   	   			"dossierMedical/edit",
					   	   			"dossierPsychologique/edit",
					   	   			"dossierScolaire",
					   	   			"dossierObservations",
					   	   			"dossierSuivi"),
				'baseu' => base_url()."mineur/",
				'param' => $id
   	   );
   	   
   	      	   
   	   $output = (object) array_merge( (array)$output, array( 'active' => 'Mineur' ) );	
   	   
	   $this->load->view('include/header');
	   $this->load->view('include/menu1');
	   $this->load->view('templates/tabs',$output);
	   $this->load->view('include/footer');
   }
   public function alerts(){
   	$output=array(
   	   			'tabsTitle'=> array("Mineurs qui ont dépassé 18ans","Mineurs proche de leurs sorties"
   	   								,"Mineur qui ont dépassé leur periode"
   	   								),
   	   								
   	   			'tabsLink'=> array("ageDepasse",
   	   								"periodeDepasse",
   	   								"periodeDepasse"),
				'baseu' => base_url()."mineur/",
				'param' => ''
   	   );
   	   
   	      	   
   	   $output = (object) array_merge( (array)$output, array( 'active' => 'Options' ) );
	   $this->load->view('include/header');
	   $this->load->view('include/menu1');
	   $this->load->view('templates/tabs',$output);
	   $this->load->view('include/footer');
   }
   public function ageDepasse(){
	   
   }
   public function periodeDepasse(){
	   
   }
   public function periodePresque(){
	   
   }
   public function dossierPersonnel($id){
   		
   		$crud = new grocery_CRUD();
   		$crud->set_theme('datatables');
    	$crud->set_table('Mineur');
    	$crud->set_field_upload('photo_mineur','assets/uploads/files');
    	//exemple de renommage
    	$crud->display_as('nom',lang('gsm_nom'));
    	//fin exemple
    	$crud->set_relation('centre_de_transfert','Centre','nom_centre');
    	$crud->set_relation('sexe','Referenciel','valeurRef',array('nomRef'=>'sexe'));
    	$crud->set_relation('source','Referenciel','valeurRef',array('nomRef'=>'source'));
    	$crud->set_relation('destination','Referenciel','valeurRef',array('nomRef'=>'destination'));
    	
    	$crud->unset_back_to_list();
    	$output = $crud->render();
		$this->load->view('templates/simplCRUD',$output);

   }
   public function dossierSocial($id){
   		$crud = new grocery_CRUD();
   		$crud->set_theme('datatables');
    	$crud->set_table('DossierSocial');
    	
    	$crud->set_relation('etat_enfant','Referenciel','valeurRef',array('nomRef'=>'etat_enfant'));
    	$crud->set_relation('rang_enfant','Referenciel','valeurRef',array('nomRef'=>'rang_enfant'));
    	$crud->set_relation('niveau_scolaire','Referenciel','valeurRef',array('nomRef'=>'niveau_scolaire'));
    	$crud->set_relation('lien_tuteur','Referenciel','valeurRef',array('nomRef'=>'lien_tuteur'));
    	$crud->set_relation('niveau_scol_mere','Referenciel','valeurRef',array('nomRef'=>'niveau_scolaire'));
    	$crud->set_relation('niveau_scol_pere','Referenciel','valeurRef',array('nomRef'=>'niveau_scolaire'));
    	$crud->set_relation('niveau_vie','Referenciel','valeurRef',array('nomRef'=>'niveau_vie'));
    	$crud->set_relation('type_logement','Referenciel','valeurRef',array('nomRef'=>'type_logement'));
    	$crud->set_relation('type_cartier','Referenciel','valeurRef',array('nomRef'=>'type_cartier'));
    	$crud->set_relation_n_n('Relation_pere_enfant', 'RelationPereEnfant', 'Referenciel', 'mineurID', 'relationPEID', 'valeurRef',null,array('nomRef'=>'relation_pere_enfant'));
    	
    	$crud->unset_edit_fields('dossierSocialID','mineurID');
    	$crud->field_type('adresse_tuteur','text');
    	$crud->unset_back_to_list();
    	$output = $crud->render();
		$this->load->view('templates/simplCRUD',$output);
   }
   public function dossierJuridique($id){
	   	$crud = new grocery_CRUD();
   		$crud->set_theme('datatables');
    	$crud->set_table('DossierJuridique');
    	$crud->unset_edit_fields('dossierJuridiqueID');
    	$crud->callback_edit_field('mineurID',array($this,'call_back_liste_delit'));
    	
    	$crud->set_relation('etat_juridique','Referenciel','valeurRef',array('nomRef'=>'etat_juridique'));
    	
    	$crud->unset_back_to_list();
    	$output = $crud->render();
		$this->load->view('templates/simplCRUD',$output);
   }
   public function dossierMedical($id){
	   	$crud = new grocery_CRUD();
   		$crud->set_theme('datatables');
    	$crud->set_table('DossierMedical');
    	
    	$crud->set_relation_n_n('Vaccin', 'VaccinMineur', 'Referenciel', 'mineurID', 'vaccinID', 'valeurRef',null,array('nomRef'=>'vaccin'));
    	$crud->set_relation_n_n('Maladie_contagieuse', 'MaladieContagieuse', 'Referenciel', 'mineurID', 'maladieID', 'valeurRef',null,array('nomRef'=>'maladie'));
    	
    	$crud->unset_edit_fields('dossierMedicalID');
    	$crud->callback_edit_field('mineurID',array($this,'call_back_liste_visites'));
    	$crud->unset_back_to_list();
    	$output = $crud->render();
		$this->load->view('templates/simplCRUD',$output);
   }
   
   function call_back_liste_delit($value, $primary_key)
   {
	    return '<IFRAME src="'.base_url().'mineur\\liste_delit\\'.$value.'" width="600px" height="100%" id="iframe1" marginheight="0" frameborder="0" onload="javascript:resizeIframe(this);"></iframe>
';
   }
   function call_back_liste_visites($value, $primary_key)
   {
	    return '<IFRAME src="'.base_url().'mineur\\liste_visites\\'.$value.'" width="600px" height="100%" id="iframe1" marginheight="0" frameborder="0" onload="javascript:resizeIframe(this);"></iframe>
';
   }
   function call_back_liste_troubles($value, $primary_key)
   {
	    return '<IFRAME src="'.base_url().'mineur\\liste_troubles\\'.$value.'" width="600px" height="100%" id="iframe1" marginheight="0" frameborder="0" onload="javascript:resizeIframe(this);"></iframe>
	    <br>
	    <IFRAME src="'.base_url().'mineur\\liste_inquietudes\\'.$value.'" width="600px" height="100%" id="iframe1" marginheight="0" frameborder="0" onload="javascript:resizeIframe(this);"></iframe>
';
   }
   function call_back_add_ref($value = '', $primary_key = null)
	{
	    return '<input readonly="readonly" type="text" value="'.$this->param.'" name="nomRef" >';
	}
   public function liste_delit($id){
	    $crud = new grocery_CRUD();
	    $crud->unset_fields('dossierJuridiqueID');
	    $crud->unset_columns('dossierJuridiqueID');
    	$crud->set_table('Delit')->where('dossierJuridiqueID',$id);
    	$output = $crud->render();
		$this->load->view('templates/simplCRUD',$output);
   }
   public function liste_visites($id){
	    $crud = new grocery_CRUD();
	    $crud->unset_fields('dossierMedicalID');
	    $crud->unset_columns('dossierMedicalID');
    	$crud->set_table('Visite')->where('dossierMedicalID',$id);
    	$output = $crud->render();
		$this->load->view('templates/simplCRUD',$output);
   }
   public function liste_troubles($id){
	    $crud = new grocery_CRUD();
	    $crud->unset_fields('dossierPsychologiqueID');
	    $crud->unset_columns('dossierPsychologiqueID');
	    $crud->set_subject('Trouble psychologique signalé');
    	$crud->set_table('Trouble')->where('dossierPsychologiqueID',$id);
    	$output = $crud->render();
		$this->load->view('templates/simplCRUD',$output);
   }
   public function liste_inquietudes($id){
	    $crud = new grocery_CRUD();
	    $crud->unset_fields('dossierPsychologiqueID');
	    $crud->unset_columns('dossierPsychologiqueID');
	    $crud->set_subject('Inquiétude psychologique signalé');
    	$crud->set_table('InquietudeTrouble')->where('dossierPsychologiqueID',$id);
    	$output = $crud->render();
		$this->load->view('templates/simplCRUD',$output);
   }
   public function dossierPsychologique($id){
	   	$crud = new grocery_CRUD();
   		$crud->set_theme('datatables');
    	$crud->set_table('DossierPsychologique');
    	$crud->unset_edit_fields('dossierPsychologiqueID');
    	$crud->field_type('etat_psychologique','text');
    	$crud->callback_edit_field('mineurID',array($this,'call_back_liste_troubles'));
    	$crud->unset_back_to_list();
    	$output = $crud->render();
		$this->load->view('templates/simplCRUD',$output);
   }
   
	 
   public function dossierScolaire($id){
	   	$crud = new grocery_CRUD();
   		$crud->set_theme('datatables');
    	$crud->set_table('Formation')->where('mineur',$id);

    	$crud->set_relation('type_formation','Referenciel','valeurRef',array('nomRef'=>'type_formation'));
		$crud->set_relation('mineur','Mineur','{nom} {prenom}');

    	$output = $crud->render();
		$this->load->view('templates/simplCRUD',$output);
   }
   public function dossierObservations($id){
	   	$crud = new grocery_CRUD();
   		$crud->set_theme('datatables');
    	$crud->set_table('Observation')->where('mineur',$id);
    	$crud->field_type('text_observation','text');
		$crud->set_relation('mineur','Mineur','{nom} {prenom}');
    	$output = $crud->render();
		$this->load->view('templates/simplCRUD',$output);
   }
   public function lstRef($id){
	   	$crud = new grocery_CRUD();
    	$crud->set_table('Referenciel')->where('nomRef',$id)->where('valeurRef IS NOT NULL',null, false);
    	$crud->unset_columns('nomRef');
    	$crud->required_fields('nomRef');
		$this->param=$id;
    	$crud->callback_add_field('nomRef',array($this,'call_back_add_ref'));
    	$output = $crud->render();
		$this->load->view('templates/simplCRUD',$output);
   }
   public function dossierSuivi($id){
	   	$crud = new grocery_CRUD();
   		$crud->set_theme('datatables');
    	$crud->set_table('Detention')->where('mineur',$id);
    	$crud->set_relation('centreID','Centre','nom_centre');
    	$crud->set_relation('mineur','Mineur','{nom} {prenom}');
    	$crud->unset_back_to_list();
    	$output = $crud->render();
		$this->load->view('templates/simplCRUD',$output);
   }
}