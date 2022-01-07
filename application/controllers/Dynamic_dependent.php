<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dynamic_dependent extends CI_Controller {
 
 public function __construct()
 {
  parent::__construct();
  $this->load->model('dynamic_dependent_model');
 }

 function index()
 {
	 ////  run url ci_mini/dynamic_dependent
	/*
	  if ($this->config['base_url'] == '')         
	  { 
		if (isset($_SERVER['HTTP_HOST'])) 
            {
$base_url = isset($_SERVER['HTTPS']) && strtolower($_SERVER['HTTPS']) !== 'off' ? 'https' : 'http';           
			$base_url .= '://'. $_SERVER['HTTP_HOST'];  
			$base_url .= str_replace(basename($_SERVER['SCRIPT_NAME']), '', $_SERVER['SCRIPT_NAME']);  
			} 
            else { $base_url = 'http://localhost/'; 
			} 
            $this->set_item('base_url', $base_url); 
        }
	*/
	//set log_threshold value in config/config.php 
	
	 log_message("error","error dynammic country error");
	 log_message("debug","debug country error");
	 log_message("info","info index method call for dynamic country");
	 
  $data['country'] = $this->dynamic_dependent_model->fetch_countryModel();
  $this->load->view('users/dynamic_dependent', $data);
 }

 function fetch_state()
 {
  if($this->input->post('country_id'))
  {
   echo $this->dynamic_dependent_model->fetch_stateModel($this->input->post('country_id'));
  }
 }

 function fetch_city()
 {
  if($this->input->post('state_id'))
  {
   echo $this->dynamic_dependent_model->fetch_cityModel($this->input->post('state_id'));
  }
 }
  
}
