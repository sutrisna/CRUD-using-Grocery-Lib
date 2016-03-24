<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

 
class ContohLib extends CI_Controller {
 
    function __construct()
    {
        parent::__construct();

 
		$this->load->database('mahasiswa');
		$this->load->helper('url');

		$this->load->library('grocery_CRUD'); 
    }
 
    public function mahasiswa($output = null)
    {
		$crud = new grocery_CRUD();
        $crud->set_table('murid');
		
		$output = $crud->render();
		$this->load->view('contohview',$output);
        
    }
 
}